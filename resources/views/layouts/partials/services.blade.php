@include($services->view(), [
    'component' => tap($services, function($component) use ($content, $title) {
        $component->context("{$content->type()}.services");
        $component->title = $title;
    })
])
