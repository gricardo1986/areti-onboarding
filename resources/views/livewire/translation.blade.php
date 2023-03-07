<div class="content">
    <?php /*
    <div class="title m-b-md">
        {{ __('text.title') }}
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">{{ __('text.menu.documentation') }}</a>
        <a href="https://laravel-news.com">{{ __('text.menu.news') }}</a>
    </div>
    */
    ?>
    <select wire:model='translation'>
        <option value="en">{{ __('text.menu.language.en') }}</option>
        <option value="es">{{ __('text.menu.language.es') }}</option>
    </select>
</div>