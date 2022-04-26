<?php




wp_footer();
?>

</body>

</html>
<script>
    let langWrapper = document.querySelector(".language-wrapper");
    let langButton = document.querySelector(".language-button");
    langWrapper.addEventListener("click", function() {
        langButton.classList.toggle("active");
        setTimeout(function() {
            if (location.href == "<?php echo get_home_url() ?>/") {
                location.href = "<?php echo get_home_url() ?>/portfolio_en/";
            } else {
                location.href = "<?php echo get_home_url() ?>/";
            }
        }, 500);
    });

    if (location.href == "<?php echo get_home_url() ?>/") {
        langButton.classList.toggle("active");

    }

    let containers = document.querySelectorAll(".section");

    let linkOptions = {
        root: null,
        rootMargin: "-40px 0px -40px 0px",
        threshold: 0.3,
    };

    let linksObserver = new IntersectionObserver(function Moving(
            entries,
            observer
        ) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    navLinks.forEach(function(n) {
                        n.children[0].classList.remove("active");
                        if (
                            entry.target.dataset.name ==
                            n.href.replace("<?php echo get_home_url() ?>/#", "") ||
                            entry.target.dataset.name ==
                            n.href.replace("<?php echo get_home_url() ?>/portfolio_en/#", "")
                        ) {
                            n.children[0].classList.add("active");
                        }
                    });
                }
            });
        },
        linkOptions);

    containers.forEach((container) => linksObserver.observe(container));
</script>