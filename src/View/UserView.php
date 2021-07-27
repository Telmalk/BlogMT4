<?php


namespace View;


class UserView
{
    public function formAdd() {
       ?>
        <html lang="fr">
        <head>
        </head>
        <body>
        <div>
            <form method="post" action="?action=user.add">
                <label> Pseudo
                    <input name="user[pseudo]" type="text" />
                </label><br/>
                <label> password
                    <input name="user[password]" type="password" />
                </label><br/>
                <label> repeat password
                    <input name="user[repeatPassword]" type="password" />
                </label> <br/>
                <input type="submit" name="submit" />
            </form>
        </div>
        </body>
        </html>
        <?php
    }
}