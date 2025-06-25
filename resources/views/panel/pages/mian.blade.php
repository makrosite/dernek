@extends('panel.panel-layout')

@section('admin-main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="toggleSwitch" value="true" checked>
    <label class="form-check-label" for="toggleSwitch">Toggle</label>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('toggleSwitch');
        toggle.addEventListener('change', function() {
            if (toggle.checked) {
                toggle.value = "true";
            } else {
                toggle.value = "false";
            }
        });
        // İlk yüklemede de value'yu ayarla
        toggle.value = toggle.checked ? "true" : "false";
    });
</script>
<script>
    $(document).ready(function() {
      alert();
        $("#btn").click(function() {
            alert($('#toggleSwitch').val());
        });
    });
</script>
<button id="btn">göster</button>
@endsection
