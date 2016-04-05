/* individuelles JS */

/* JS for accordion */
$(".accordion .entry").on("click", function() {
    $(".accordion .entry").removeClass("opened").attr("aria-hidden", "true");
    $(this).addClass("opened").attr("aria-hidden", "false");
});

/* JS for table-sponsor */
  $(document).ready(function() {
            var key = $('.sort-attr1 option:selected').val();
            $(".table-style1 tbody tr").each(function() {
                var textcontent = $(this).find("p:first").text();
                if (textcontent.indexOf(key) < 0) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
            $("table").tablesorter();
            $("#trigger-btn").click(function() {

                var key = $('.sort-attr1 option:selected').val();
                $(".table-style1 tbody tr").each(function() {
                    var textcontent = $(this).find("p:first").text();
                    if (textcontent.indexOf(key) < 0) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });

                var optiontext = $('.sort-attr2 option:selected').val();
                // set sorting column and direction, this will sort on the first and third column the column index starts at zero
                if (optiontext === "0") {
                    var sorting = [
                        [0, 0],
                        [1, 0]
                    ];

                } else {
                    var sorting = [
                        [1, 0],
                        [0, 0]
                    ];

                }

                // sort on the first column
                $("table").trigger("sorton", [sorting]);
                // return false to stop default link action
                return false;
            });
        });
