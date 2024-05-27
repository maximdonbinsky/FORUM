<?php

trait ProfileInfo
{
    public static function infoProf() 
    {
        return '
                    <div class="user"><i class="bi bi-person-fill"></i> ' . $row['login'] . '</div>
                    <div class="status"><i class="bi bi-info-circle-fill"></i> ' . $row['status'] . '</div>
                    <img src="../img/avatars/' . $row['avatar'] . '" alt="">
                    <div class="info">
                        <i class="bi bi-calendar-check-fill"></i> Регистрация: ' . $row['date_reg'] . '<br>
                    </div>
            
            ';
    }
}