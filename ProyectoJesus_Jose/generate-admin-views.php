<?php
// generate-admin-views.php
// Ejecutar desde el root del proyecto: php generate-admin-views.php

$models = [
    'Attribute' => [
        'fields' => ['name', 'slug', 'type'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
    'AttributeValue' => [
        'fields' => ['attribute_id', 'value', 'unit'],
        'timestamps' => true,
        'relations' => ['attribute_id' => 'Attribute']
    ],
    'Brand' => [
        'fields' => ['name', 'slug', 'country', 'description', 'website'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
    'CarModel' => [
        'fields' => ['brand_id', 'name', 'slug', 'year_from', 'year_to', 'description'],
        'timestamps' => true,
        'relations' => ['brand_id' => 'Brand'],
        'searchable' => 'name',
    ],
    'CarVariant' => [
        'fields' => ['car_model_id', 'name', 'trim', 'engine', 'transmission', 'fuel_type', 'doors', 'notes'],
        'timestamps' => true,
        'relations' => ['car_model_id' => 'CarModel'],
        'searchable' => 'name',
    ],
    'Categorie' => [
        'fields' => ['name', 'slug', 'parent_id', 'description'],
        'timestamps' => true,
        'relations' => ['parent_id' => 'Categorie'],
        'searchable' => 'name',
    ],
    'Component' => [
        'fields' => ['name', 'part_number', 'description'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
    'ComponentPart' => [
        'fields' => ['part_id', 'component_id', 'role', 'quantity'],
        'timestamps' => true,
        'relations' => ['part_id' => 'Part', 'component_id' => 'Component']
    ],
    'Image' => [
        'fields' => ['path', 'disk', 'mime_type', 'imageable_id', 'imageable_type', 'alt', 'order'],
        'timestamps' => true,
    ],
    'Manufacturer' => [
        'fields' => ['name', 'country', 'description', 'website'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
    'Order' => [
        'fields' => ['user_id', 'order_number', 'status', 'total', 'currency', 'shipping_address', 'notes'],
        'timestamps' => true,
        'relations' => ['user_id' => 'User'],
        'searchable' => 'order_number',
    ],
    'OrderItem' => [
        'fields' => ['order_id', 'item_id', 'item_type', 'description', 'quantity', 'unit_price', 'total'],
        'timestamps' => true,
        'relations' => ['order_id' => 'Order']
    ],
    'Part' => [
        'fields' => ['sku', 'name', 'category_id', 'manufacturer_id', 'description', 'price', 'currency', 'weight', 'dimensions', 'stock', 'active'],
        'timestamps' => true,
        'relations' => ['category_id' => 'Categorie', 'manufacturer_id' => 'Manufacturer'],
        'searchable' => 'sku',
    ],
    'PartVariant' => [
        'fields' => ['part_id', 'car_variant_id', 'fitment_notes', 'direct_fit'],
        'timestamps' => true,
        'relations' => ['part_id' => 'Part', 'car_variant_id' => 'CarVariant']
    ],
    'PriceHistory' => [
        'fields' => ['priceable_id', 'priceable_type', 'price', 'currency', 'user_id', 'effective_at'],
        'timestamps' => true,
        'relations' => ['user_id' => 'User']
    ],
    'Stock' => [
        'fields' => ['warehouse_id', 'part_id', 'quantity', 'reserved'],
        'timestamps' => true,
        'relations' => ['warehouse_id' => 'Warehouse', 'part_id' => 'Part']
    ],
    'User' => [
        'fields' => ['name', 'email', 'password'],
        'timestamps' => true,
        'searchable' => 'email',
    ],
    'Vehicle' => [
        'fields' => ['car_variant_id', 'vin', 'stock_code', 'year', 'color', 'mileage', 'price', 'condition', 'description'],
        'timestamps' => true,
        'relations' => ['car_variant_id' => 'CarVariant'],
        'searchable' => 'vin',
    ],
    'Vendor' => [
        'fields' => ['name', 'contact_person', 'email', 'phone', 'address', 'tax_id', 'notes'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
    'Warehouse' => [
        'fields' => ['name', 'address', 'manager', 'phone', 'email', 'capacity'],
        'timestamps' => true,
        'searchable' => 'name',
    ],
];

function generateIndexView($modelName, $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $plural = $routePrefix . 's';
    $fields = $config['fields'];
    $searchable = $config['searchable'] ?? null;

    $html = "@extends('administrador.plantilla')\n\n@section('title', '$modelName - Panel Admin')\n\n@section('content')\n<div class=\"d-flex justify-content-between align-items-center mb-4\">\n    <h1>$modelName</h1>\n    <a href=\"{{ route('admin.$plural.create') }}\" class=\"btn btn-primary\">Crear Nuevo</a>\n</div>\n\n@if(session('success'))\n    <div class=\"alert alert-success\">{{ session('success') }}</div>\n@endif\n\n<div class=\"card\">\n    <div class=\"card-body\">\n";

    if ($searchable) {
        $html .= "<div class=\"mb-3\">\n            <form method=\"GET\" class=\"d-flex\">\n                <input type=\"text\" name=\"search\" class=\"form-control me-2\" placeholder=\"Buscar por $searchable\" value=\"{{ request('search') }}\">\n                <button type=\"submit\" class=\"btn btn-outline-secondary\">Buscar</button>\n            </form>\n        </div>\n";
    }

    $html .= "<div class=\"table-responsive\">\n            <table class=\"table table-striped\">\n                <thead>\n                    <tr>\n";

    foreach ($fields as $field) {
        $html .= "                        <th>" . ucfirst(str_replace('_', ' ', $field)) . "</th>\n";
    }
    $html .= "                        <th>Acciones</th>\n                    </tr>\n                </thead>\n                <tbody>\n                    @forelse(\$$plural as \$item)\n                        <tr>\n";

    foreach ($fields as $field) {
        if (isset($config['relations'][$field])) {
            $relation = $config['relations'][$field];
            $html .= "                            <td>{{ \$item->$field ? \$item->$relation->name : 'N/A' }}</td>\n";
        } else {
            $html .= "                            <td>{{ \$item->$field }}</td>\n";
        }
    }

    $html .= "                            <td>\n                                <a href=\"{{ route('admin.$plural.show', \$item) }}\" class=\"btn btn-sm btn-info\">Ver</a>\n                                <a href=\"{{ route('admin.$plural.edit', \$item) }}\" class=\"btn btn-sm btn-warning\">Editar</a>\n                                <form method=\"POST\" action=\"{{ route('admin.$plural.destroy', \$item) }}\" class=\"d-inline\" onsubmit=\"return confirm('¿Estás seguro?')\">\n                                    @csrf\n                                    @method('DELETE')\n                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>\n                                </form>\n                            </td>\n                        </tr>\n                    @empty\n                        <tr>\n                            <td colspan=\"" . (count($fields) + 1) . "\" class=\"text-center\">No hay registros</td>\n                        </tr>\n                    @endforelse\n                </tbody>\n            </table>\n        </div>\n\n        {{ \$${plural}->links() }}\n    </div>\n</div>\n@endsection\n";

    return $html;
}

function generateCreateView($modelName, $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $plural = $routePrefix . 's';
    $fields = $config['fields'];

    $html = "@extends('administrador.plantilla')\n\n@section('title', 'Crear $modelName - Panel Admin')\n\n@section('content')\n<div class=\"d-flex justify-content-between align-items-center mb-4\">\n    <h1>Crear $modelName</h1>\n    <a href=\"{{ route('admin.$plural.index') }}\" class=\"btn btn-secondary\">Volver</a>\n</div>\n\n@if(\$errors->any())\n    <div class=\"alert alert-danger\">\n        <ul class=\"mb-0\">\n            @foreach(\$errors->all() as \$error)\n                <li>{{ \$error }}</li>\n            @endforeach\n        </ul>\n    </div>\n@endif\n\n<div class=\"card\">\n    <div class=\"card-body\">\n        <form method=\"POST\" action=\"{{ route('admin.$plural.store') }}\">\n            @csrf\n";

    foreach ($fields as $field) {
        $label = ucfirst(str_replace('_', ' ', $field));
        $type = 'text';
        if (strpos($field, 'email') !== false) $type = 'email';
        if (strpos($field, 'password') !== false) $type = 'password';
        if (strpos($field, 'price') !== false || strpos($field, 'total') !== false) $type = 'number';
        if (strpos($field, 'quantity') !== false) $type = 'number';
        if (strpos($field, 'active') !== false) $type = 'checkbox';
        if (strpos($field, 'direct_fit') !== false) $type = 'checkbox';

        if (isset($config['relations'][$field])) {
            $relation = $config['relations'][$field];
            $html .= "            <div class=\"mb-3\">\n                <label for=\"$field\" class=\"form-label\">$label</label>\n                <select name=\"$field\" id=\"$field\" class=\"form-select\" " . (in_array($field, ['attribute_id', 'brand_id', 'car_model_id', 'category_id', 'component_id', 'manufacturer_id', 'order_id', 'part_id', 'user_id', 'warehouse_id', 'car_variant_id']) ? 'required' : '') . ">\n                    <option value=\"\">Seleccionar...</option>\n                    @foreach(\$" . strtolower($relation) . "s as \$rel)\n                        <option value=\"{{ \$rel->id }}\">{{ \$rel->name ?? \$rel->id }}</option>\n                    @endforeach\n                </select>\n            </div>\n";
        } elseif ($type === 'checkbox') {
            $html .= "            <div class=\"mb-3 form-check\">\n                <input type=\"$type\" name=\"$field\" id=\"$field\" class=\"form-check-input\" value=\"1\">\n                <label for=\"$field\" class=\"form-check-label\">$label</label>\n            </div>\n";
        } else {
            $html .= "            <div class=\"mb-3\">\n                <label for=\"$field\" class=\"form-label\">$label</label>\n                <input type=\"$type\" name=\"$field\" id=\"$field\" class=\"form-control\" " . (in_array($field, ['name', 'email', 'sku', 'order_number', 'vin']) ? 'required' : '') . ">\n            </div>\n";
        }
    }

    $html .= "            <button type=\"submit\" class=\"btn btn-primary\">Crear</button>\n        </form>\n    </div>\n</div>\n@endsection\n";

    return $html;
}

function generateEditView($modelName, $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $plural = $routePrefix . 's';
    $fields = $config['fields'];

    $html = "@extends('administrador.plantilla')\n\n@section('title', 'Editar $modelName - Panel Admin')\n\n@section('content')\n<div class=\"d-flex justify-content-between align-items-center mb-4\">\n    <h1>Editar $modelName</h1>\n    <a href=\"{{ route('admin.$plural.index') }}\" class=\"btn btn-secondary\">Volver</a>\n</div>\n\n@if(\$errors->any())\n    <div class=\"alert alert-danger\">\n        <ul class=\"mb-0\">\n            @foreach(\$errors->all() as \$error)\n                <li>{{ \$error }}</li>\n            @endforeach\n        </ul>\n    </div>\n@endif\n\n<div class=\"card\">\n    <div class=\"card-body\">\n        <form method=\"POST\" action=\"{{ route('admin.$plural.update', \$${strtolower($modelName)}) }}\">\n            @csrf\n            @method('PUT')\n";

    foreach ($fields as $field) {
        $label = ucfirst(str_replace('_', ' ', $field));
        $type = 'text';
        if (strpos($field, 'email') !== false) $type = 'email';
        if (strpos($field, 'password') !== false) $type = 'password';
        if (strpos($field, 'price') !== false || strpos($field, 'total') !== false) $type = 'number';
        if (strpos($field, 'quantity') !== false) $type = 'number';
        if (strpos($field, 'active') !== false) $type = 'checkbox';
        if (strpos($field, 'direct_fit') !== false) $type = 'checkbox';

        if (isset($config['relations'][$field])) {
            $relation = $config['relations'][$field];
            $html .= "            <div class=\"mb-3\">\n                <label for=\"$field\" class=\"form-label\">$label</label>\n                <select name=\"$field\" id=\"$field\" class=\"form-select\" " . (in_array($field, ['attribute_id', 'brand_id', 'car_model_id', 'category_id', 'component_id', 'manufacturer_id', 'order_id', 'part_id', 'user_id', 'warehouse_id', 'car_variant_id']) ? 'required' : '') . ">\n                    <option value=\"\">Seleccionar...</option>\n                    @foreach(\$" . strtolower($relation) . "s as \$rel)\n                        <option value=\"{{ \$rel->id }}\" {{ \$${strtolower($modelName)}->$field == \$rel->id ? 'selected' : '' }}>{{ \$rel->name ?? \$rel->id }}</option>\n                    @endforeach\n                </select>\n            </div>\n";
        } elseif ($type === 'checkbox') {
            $html .= "            <div class=\"mb-3 form-check\">\n                <input type=\"$type\" name=\"$field\" id=\"$field\" class=\"form-check-input\" value=\"1\" {{ \$${strtolower($modelName)}->$field ? 'checked' : '' }}>\n                <label for=\"$field\" class=\"form-check-label\">$label</label>\n            </div>\n";
        } else {
            $html .= "            <div class=\"mb-3\">\n                <label for=\"$field\" class=\"form-label\">$label</label>\n                <input type=\"$type\" name=\"$field\" id=\"$field\" class=\"form-control\" value=\"{{ \$${strtolower($modelName)}->$field }}\" " . (in_array($field, ['name', 'email', 'sku', 'order_number', 'vin']) ? 'required' : '') . ">\n            </div>\n";
        }
    }

    $html .= "            <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>\n        </form>\n    </div>\n</div>\n@endsection\n";

    return $html;
}

function generateShowView($modelName, $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $plural = $routePrefix . 's';
    $fields = $config['fields'];

    $html = "@extends('administrador.plantilla')\n\n@section('title', '$modelName - Panel Admin')\n\n@section('content')\n<div class=\"d-flex justify-content-between align-items-center mb-4\">\n    <h1>$modelName</h1>\n    <a href=\"{{ route('admin.$plural.index') }}\" class=\"btn btn-secondary\">Volver</a>\n</div>\n\n<div class=\"card\">\n    <div class=\"card-body\">\n        <dl class=\"row\">\n";

    foreach ($fields as $field) {
        $label = ucfirst(str_replace('_', ' ', $field));
        if (isset($config['relations'][$field])) {
            $relation = $config['relations'][$field];
            $html .= "            <dt class=\"col-sm-3\">$label</dt>\n            <dd class=\"col-sm-9\">{{ \$${strtolower($modelName)}->$field ? \$${strtolower($modelName)}->$relation->name : 'N/A' }}</dd>\n";
        } else {
            $html .= "            <dt class=\"col-sm-3\">$label</dt>\n            <dd class=\"col-sm-9\">{{ \$${strtolower($modelName)}->$field }}</dd>\n";
        }
    }

    if ($config['timestamps']) {
        $html .= "            <dt class=\"col-sm-3\">Creado</dt>\n            <dd class=\"col-sm-9\">{{ \$${strtolower($modelName)}->created_at->format('d/m/Y H:i') }}</dd>\n            <dt class=\"col-sm-3\">Actualizado</dt>\n            <dd class=\"col-sm-9\">{{ \$${strtolower($modelName)}->updated_at->format('d/m/Y H:i') }}</dd>\n";
    }

    $html .= "        </dl>\n    </div>\n</div>\n@endsection\n";

    return $html;
}

foreach ($models as $modelName => $config) {
    $routePrefix = strtolower(str_replace('_', '-', $modelName));
    $dir = __DIR__ . "/resources/views/administrador/$routePrefix" . "s";
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    file_put_contents("$dir/index.blade.php", generateIndexView($modelName, $config));
    file_put_contents("$dir/create.blade.php", generateCreateView($modelName, $config));
    file_put_contents("$dir/edit.blade.php", generateEditView($modelName, $config));
    file_put_contents("$dir/show.blade.php", generateShowView($modelName, $config));

    echo "Generated views for $modelName\n";
}

echo "All admin views generated successfully!\n";
?>