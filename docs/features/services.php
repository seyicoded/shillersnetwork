
<?php
    $_string = "MARKETING MANAGER , SHILLING ( TWITTER/TG ), MODERATORS, PRESENT AMA ON YOUR COMMUNITY, SCRAPING INVESTORS, SOCIAL MEDIA FOLLOWERS/LIKE ETC,  CMC AND CG LISTING, CMC AND CG PRE-LISTING , TRENDING SERVICES, LAUNCHPAD DEVELOPMENT, SAFU AND AUDIT (PINK SALE APPROVED), DEX AND CEX LISTING, WHITEPAPER, VIDEO CREATION, PRESS RELEASE, STICKERS, WEBSITE DEVELOPMENT";

    // str_split($string)
    $services = explode(",", $_string);

    for ($i=0; $i < count($services) ; $i++) { 
        ?>
            <div class="col-md-4">
                <div class="border-white p-3 hover" style="font-size: 13px; font-family: Roboto Slab; color: #6c757d;">
                    <?php echo $services[$i];?>
                </div>
            </div>
        <?php
    }
?>