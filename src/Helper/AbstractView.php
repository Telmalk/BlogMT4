<?php


namespace Helper;


abstract class AbstractView
{
    protected function header() {
        ?>
            <html>
                <head>

                </head>
                <body>

        <?php
    }

    protected function footer() {
        ?>
        </body>
        </html>
        <?php
    }
}