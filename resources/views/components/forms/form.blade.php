<form {{ $attributes }}>
    <div class="mt-8" style="max-width: 28rem;">
        <div class="row g-3">
          <div class="col-12">
            {{ $slot }}
          </div>
        </div>
      </div>
</form>