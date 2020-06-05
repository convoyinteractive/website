@include(view()->exists("components.{$component->get('resource')}") ? "components.{$component->get('resource')}" : "components.error", [
    'component' => $component,
    'attributes' => '',
])
