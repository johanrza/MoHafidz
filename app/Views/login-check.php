<?php
if (null == session('id_pengajar')) {
    echo ('
        <script>
            alert("Anda belum login");
            window.location="' . base_url('login') . '"
        </script>
        ');
}
