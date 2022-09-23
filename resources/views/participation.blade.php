<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("myPieChart");
    var accreditated = <?php echo json_encode($accreditated); ?>;
    var nonaccreditated = <?php echo json_encode($nonaccreditated); ?>;


    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Non Accredited", "Accredited"],
            datasets: [{
                data: [nonaccreditated, accreditated],
                backgroundColor: ['#007bff', '#dc3545'],
            }],
        },
    });



</script>
