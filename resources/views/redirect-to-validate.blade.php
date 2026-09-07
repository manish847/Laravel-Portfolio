<form id="validate-form" method="POST" action="{{ route('validate') }}">
    @csrf
</form>

<script>
    document.getElementById('validate-form').submit();
</script>