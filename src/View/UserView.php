<?php


namespace View;


use Helper\AbstractView;

class UserView extends AbstractView
{
    public function formAdd() {
       $this->Header();
        ?>
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
        <?php
        $this->footer();
    }

    public function formLogin() {
        $this->header();
        ?>
            <form method="post" action="?action=user.login">
                <label> Pseudo
                    <input name="login[pseudo]" type="text">
                </label> <br/>
                <label> password
                    <input type="password" name="login[password]">
                </label> <br/>
                <input type="submit" name="submit">
            </form>
        <?php
        $this->footer();
    }
}