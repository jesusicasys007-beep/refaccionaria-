<?php
// update-controllers.php

$models = [
    'Attribute' => ['relations' => []],
    'AttributeValue' => ['relations' => ['attribute_id' => 'Attribute']],
    'Brand' => ['relations' => []],
    'CarModel' => ['relations' => ['brand_id' => 'Brand']],
    'CarVariant' => ['relations' => ['car_model_id' => 'CarModel']],
    'Categorie' => ['relations' => ['parent_id' => 'Categorie']],
    'Component' => ['relations' => []],
    'ComponentPart' => ['relations' => ['part_id' => 'Part', 'component_id' => 'Component']],
    'Image' => ['relations' => []],
    'Manufacturer' => ['relations' => []],
    'Order' => ['relations' => ['user_id' => 'User']],
    'OrderItem' => ['relations' => ['order_id' => 'Order']],
    'Part' => ['relations' => ['category_id' => 'Categorie', 'manufacturer_id' => 'Manufacturer']],
    'PartVariant' => ['relations' => ['part_id' => 'Part', 'car_variant_id' => 'CarVariant']],
    'PriceHistory' => ['relations' => ['user_id' => 'User']],
    'Stock' => ['relations' => ['warehouse_id' => 'Warehouse', 'part_id' => 'Part']],
    'User' => ['relations' => []],
    'Vehicle' => ['relations' => ['car_variant_id' => 'CarVariant']],
    'Vendor' => ['relations' => []],
    'Warehouse' => ['relations' => []],
];

function generateController($modelName, $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $plural = $routePrefix . 's';
    $modelClass = "App\\Models\\$modelName";
    $relations = $config['relations'];

    $code = "<?php\n\nnamespace App\\Http\\Controllers;\n\nuse $modelClass;\nuse Illuminate\\Http\\Request;\n";

    foreach ($relations as $rel) {
        $code .= "use App\\Models\\$rel;\n";
    }

    $code .= "\nclass {$modelName}Controller extends Controller\n{\n    public function index(Request \$request)\n    {\n        \$query = {$modelName}::query();\n\n        if (\$request->has('search') && \$request->search) {\n            \$query->where('name', 'like', '%' . \$request->search . '%');\n        }\n\n        \${$plural} = \$query->paginate(15);\n\n        return view('administrador.{$plural}.index', compact('{$plural}'));\n    }\n\n    public function create()\n    {\n";

    if (!empty($relations)) {
        foreach ($relations as $field => $rel) {
            $var = strtolower($rel) . 's';
            $code .= "        \${$var} = {$rel}::all();\n";
        }
        $code .= "\n        return view('administrador.{$plural}.create', compact('" . implode("', '", array_keys($relations)) . "'));\n";
    } else {
        $code .= "        return view('administrador.{$plural}.create');\n";
    }

    $code .= "    }\n\n    public function store(Request \$request)\n    {\n        \$validated = \$request->validate([\n";

    // Add validation rules based on model, but for simplicity, basic
    $code .= "            // Add validation rules here\n        ]);\n\n        {$modelName}::create(\$validated);\n\n        return redirect()->route('admin.{$plural}.index')->with('success', '{$modelName} creado exitosamente');\n    }\n\n    public function show({$modelName} \${$routePrefix})\n    {\n        return view('administrador.{$plural}.show', compact('{$routePrefix}'));\n    }\n\n    public function edit({$modelName} \${$routePrefix})\n    {\n";

    if (!empty($relations)) {
        foreach ($relations as $field => $rel) {
            $var = strtolower($rel) . 's';
            $code .= "        \${$var} = {$rel}::all();\n";
        }
        $code .= "\n        return view('administrador.{$plural}.edit', compact('{$routePrefix}', '" . implode("', '", array_keys($relations)) . "'));\n";
    } else {
        $code .= "        return view('administrador.{$plural}.edit', compact('{$routePrefix}'));\n";
    }

    $code .= "    }\n\n    public function update(Request \$request, {$modelName} \${$routePrefix})\n    {\n        \$validated = \$request->validate([\n            // Add validation rules here\n        ]);\n\n        \${$routePrefix}->update(\$validated);\n\n        return redirect()->route('admin.{$plural}.index')->with('success', '{$modelName} actualizado exitosamente');\n    }\n\n    public function destroy({$modelName} \${$routePrefix})\n    {\n        \${$routePrefix}->delete();\n\n        return redirect()->route('admin.{$plural}.index')->with('success', '{$modelName} eliminado exitosamente');\n    }\n}\n";

    return $code;
}

foreach ($models as $modelName => $config) {
    $code = generateController($modelName, $config);
    $file = __DIR__ . "/app/Http/Controllers/{$modelName}Controller.php";
    file_put_contents($file, $code);
    echo "Updated {$modelName}Controller\n";
}

echo "All controllers updated!\n";
?>