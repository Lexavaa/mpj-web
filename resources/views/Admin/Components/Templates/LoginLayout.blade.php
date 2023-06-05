<x-ResourcesLayout :title="$title">
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        {{ $slot }}
        <!-- /Register -->
        </div>
      </div>
    </div>
</x-ResourcesLayout>