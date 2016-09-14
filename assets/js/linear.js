jQuery(document).ready(function ($) {
    document.steps = $(".step");

    function change_current(obj){
        document.current = obj;
        console.log(obj);
        console.log(obj.height());
        $(".wrapper").css("height",(obj.children(".box").outerHeight(true) + 80));
    }

    function register_change() {
        obj = $(this);

        console.log(obj.attr("name"));

        $step = obj.closest(".step");

        require = $step.attr("data-requires");
        require = require.split(",");

        var index = require.indexOf(obj.attr("name"));
        if (index != -1) {
            require.splice(index, 1);

            if (!require.length) {
                $step.find(".next.disabled").removeClass("disabled");
                $step.find(".done").prop("disabled", false).removeClass("disabled");
            }

            $step.attr("data-requires", require.join(","));
        }
    }

    $("form").on("change", "select,input", register_change);
    $("form").on("keyup", "textarea", register_change);


    $("form").on("click", ".button.next", function (e) {
        if (!$(this).hasClass("disabled")) {
            $currentStep = jQuery(".step.current");
            index = document.steps.index($currentStep);


            $(".m-progress").removeClass("hidden").find(".m-progress-bar").css("width", (index + 1) * 100 / (document.steps.length - 1) + "%");

            $nextStep = $currentStep.next();
            $currentStep.removeClass("current").addClass("prev");
            $nextStep.addClass("current");
            change_current($nextStep);
        }
    });

    $("form").on("click", ".button.prev", function (e) {
        $currentStep = jQuery(".step.current");
        $prevStep = $currentStep.prev();
        $currentStep.removeClass("current");
        $prevStep.addClass("current").removeClass("prev");
    });
    $("form").on("submit", function (e) {
        e.preventDefault();
        $("form .done").addClass("current").prev().removeClass("current").addClass("prev");
        $.ajax({
            url: "prosess.php",
            data: $(this).serialize(),
            dataType: "html",
            method: "POST",
            success: function (result) {
                $("form .done").children(".box").html(result);
                $(".m-progress").removeClass("hidden").find(".m-progress-bar").css("width", "100%");
            },
            context: document.body
        })
    });


    document.steps.each(function (i, val) {
        $this = $(this);
        $step = $this.closest(".step");

        if ($step.attr("data-requires"))
            disabled = " disabled";
        else
            disabled = "";

        if (i != document.steps.length - 1) {
            $buttons = $("<div class='row'><p class='buttons col-sm-12 navigate'></p></div>");
            if (i == 0) {
                $buttons.children(".buttons").append("<span class='button next'>Ta testen</span>");
            }
            else if (i == document.steps.length - 2) {
                $buttons.children(".buttons").append("<span class='button prev'>Forrige</span>");
                $buttons.children(".buttons").append("<button class='button done" + disabled + "'" + disabled + ">Ferdig</button>");
            }
            else {
                $buttons.children(".buttons").append("<span class='button prev'>Forrige</span>");
                $buttons.children(".buttons").append("<span class='button next" + disabled + "'>Neste</span>");
            }

            $step.children(".box").append($buttons);
        }

    });

    change_current(document.steps.filter(".current"));


    $sliders = $("input.slider");
    $sliders.each(function () {
        $this = $(this);
        $("<div id='slider'></div>").insertBefore($this).slider({
            min: $this.data("min"),
            max: $this.data("max"),
            step: $this.data("step"),
            value: $this.val(),
            slide: function (event, ui) {
                $(this).next().val(ui.value);
            },
            change: function (event, ui) {
                $(this).next().val(ui.value).trigger("change");
            }

        });
    });

    $("select").each(function () {
        $this = $(this);

        $container = $("<div></div>", {class: "select_container"});
        $container.append($(this).clone());

        $container.append("<span>" + $this.children("option").eq(0).text() + "</span>");

        $this.before($container).remove();
    });

    $("textarea").each(function () {
        $this = $(this);

        $container = $("<div></div>", {class: "textarea_container"});
        $container.append($(this).clone());

        $container.append("<span>Skriv inn ditt svar</span>");

        $this.before($container).remove();
    });
    $("form").on("keyup", ".textarea_container textarea", function () {
        $this = $(this);

        if($this.val() != "")
            $this.next().addClass("hidden");
        else
            $this.next().removeClass("hidden");
    });

    $("form").on("change", ".select_container select", function () {
        $this = $(this);
        $this.next().html($this.children(":selected").html());
    });

    $(window).on("resize",function(){
        $(".wrapper").css("height",(document.current.children(".box").outerHeight(true) + 80));
    })
});