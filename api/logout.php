<script>
    window.sessionStorage.removeItem("logged_in");
</script>
<?php
    session_start();
    session_destroy();
?>
<script>
    window.location = "../"
</script>