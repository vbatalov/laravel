<x-base-layout>

    <!--begin::Section-->
    <div class="pt-5">
        <!--begin::Heading-->
        <h1 class="anchor fw-bolder mb-5" id="dark-mode">
            <a href="#dark-mode"></a>
            Quick Setup
        </h1>
        <!--end::Heading-->

        <!--begin::Block-->
        <div class="py-5">
            <p>For the preview purpose, we use URL query <code>?mode=dark</code> to enable the other demos preview without modifying the Laravel routes.
                See the example preview URL <a href="{{ url()->current() . '?mode=dark' }}">{{ url()->current() . '?mode=dark' }}</a>.</p>

            <p>Dark Mode mode of <?php echo theme()->getProductName()?> can be easily setup.</p>
        </div>
        <!--end::Block-->
    </div>
    <!--end::Section-->

</x-base-layout>
