<?php
include "../../../eassy-supply/view/header/index.php";
include "../../../eassy-supply/view/navigasi/navbar.php";

?>

<div id="alldisp">
    <div id="allproduct">
        <!-- end -->
    </div>
    <span class=" mt-4" style="width: 100%; text-align:center; padding:20px">
        <form id="form-show">
            <input type="hidden" name="category" id="category" value="<?php echo $_GET['category'] ?>">
        </form>
    </span>
</div>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "proses.php",
            method: "post",
            data: {
                category: $('#category').val(),
            },
            success: function(data) {
                $('#allproduct').html(data);

            }
        })
    })
</script>
<?php
include "../../view/footer/footer.php";
?>