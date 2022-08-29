<!--begin::Content-->
<div id="kt_app_content" class="app-content {{ theme()->printHtmlClasses("content", false) }}" >
<?php if (theme()->getOption("layout", "app/content/container") !== false):?>
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container <?php theme()->printHtmlClasses("content-container", false)?>">
        {{ $slot }}
    </div>
    <!--end::Content container-->
    <?php else:?>
    {{ $slot }}
    <?php endif?>
</div>
<!--end::Content-->
