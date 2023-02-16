@if(session()->has('success'))
<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '{{ session('success') }}',
  showConfirmButton: false,
  timer: 1500
})
</script>
@elseif(session()->has('failed'))
<script>
Swal.fire({
  position: 'top-end',
  icon: 'warning',
  title: '{{ session('failed') }}',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif
