@if (session()->has('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'middle-center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        })
    </script>
@elseif(session()->has('failed'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'middle-center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'warning',
            title: '{{ session('failed') }}'
        })
    </script>
@endif


<script>
    function permanent() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'middle-center',
            showConfirmButton: false,
            timer: 500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: 'PERMANENT! HUBUNGI ADMIN'
        })
    }
</script>
