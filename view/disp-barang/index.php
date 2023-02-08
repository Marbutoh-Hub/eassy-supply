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
            <input type="hidden" name="show" id="show" value="true">
            <input type="hidden" name="limits" id="limits">
            <input type="hidden" name="category" id="category" value="<?php echo $_GET['category'] ?>">
            <h6>
                <button id="showdata" type='submit' class="btn btn-outline-light" style="color:black;">
                    SEE MORE
                </button>
            </h6>
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
                notshow: "not show"
            },
            success: function(data) {
                $('#allproduct').html(data);

            }
        })
        $(document).on('submit', '#form-show', function(e) {
            e.preventDefault();
            $.ajax({
                url: "proses_show.php",
                method: "post",
                data: {
                    show: $('#show').val(),
                    category: $('#category').val(),
                    limits: 0
                },
                success: function(data) {
                    $('#allproduct').html(data);
                    $('#limits').html(data);
                }
            })
        })
    })
</script>
<?php
include "../../view/footer/footer.php";
?>