<?php
if (null == session('usernameMaster')) {
    echo ('
        <script>
            alert("Anda belum login");
            window.location="' . base_url('masterLogin') . '"
        </script>
        ');
}
