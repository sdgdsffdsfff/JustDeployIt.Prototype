
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<!-- Custom JS -->
<script type="text/javascript" src="js/alertify.min.js"></script>

<!-- Sparkline JS -->
<script src="js/sparkline.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    //ScrollUp
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 400, // Animation in speed (ms)
            animationOutSpeed: 400, // Animation out speed (ms)
            scrollText: 'Scroll to top', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });
    //Tooltip
    $('a').tooltip('hide');
    //Popover
    $('.popover-pop').popover('hide');
    //Dropdown
    $('.dropdown-toggle').dropdown();
</script>
