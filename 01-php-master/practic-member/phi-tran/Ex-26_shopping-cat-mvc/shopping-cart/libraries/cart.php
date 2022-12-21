<?php

function redirect_to($url="?mod=cart&controller=main&action=show"){
      header("Location: $url");
}
