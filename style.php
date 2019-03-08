﻿/* Navbar ====================================== */
<?php

    header("Content-type: text/css; charset: UTF-8");
    ob_start();
    include('index.php');
    ob_end_clean();
    $CI =& get_instance();
    $CI->load->library('session'); //if it's not autoloaded in your CI setup
    //echo $CI->session->userdata('name');exit;
    $background = $CI->session->userdata('user_background');

    if (empty($background)){
        $user_background = base_url().'images/background/default.png';
    }else{
          $user_background =   base_url().'images/background/'.$background;
    }
?>
@import url(materialize.css);
.navbar {
  font-family: "Roboto", sans-serif;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  -ms-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  border: none;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 12;
  width: 100%; }
  .navbar .navbar-brand {
    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden; }
  .navbar .navbar-custom-right-menu {
    float: right; }
  .navbar .navbar-toggle {
    text-decoration: none;
    color: #fff;
    width: 20px;
    height: 20px;
    margin-top: -4px;
    margin-right: 17px; }
    .navbar .navbar-toggle:before {
      content: '\E8D5';
      font-family: 'Material Icons';
      font-size: 26px; }
  .navbar .navbar-collapse.in {
    overflow: visible; }

.ls-closed .sidebar {
  margin-left: -300px; }

.ls-closed section.content {
  margin-left: 15px; }

.ls-closed .bars:after, .ls-closed .bars:before {
  font-family: 'Material Icons';
  font-size: 24px;
  position: absolute;
  top: 18px;
  left: 20px;
  margin-right: 10px;
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0);
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s; }

.ls-closed .bars:before {
  content: '\E5D2';
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1); }

.ls-closed .bars:after {
  content: '\E5C4';
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0); }

.ls-closed .navbar-brand {
  margin-left: 30px; }

.overlay-open .bars:before {
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0); }

.overlay-open .bars:after {
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1); }

.navbar-header {
  padding: 10px 7px; }
  .navbar-header .bars {
    float: left;
    text-decoration: none; }

.navbar-nav > li > a {
  padding: 7px 7px 2px 7px;
  margin-top: 17px;
  margin-left: 5px; }

.navbar-nav .dropdown-menu {
  margin-top: -40px !important; }

.label-count {
  position: absolute;
  top: 2px;
  right: 6px;
  font-size: 10px;
  line-height: 15px;
  background-color: #000;
  padding: 0 4px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px; }

.col-red .navbar .navbar-brand,
.col-red .navbar .navbar-brand:hover,
.col-red .navbar .navbar-brand:active,
.col-red .navbar .navbar-brand:focus {
  color: #fff; }

.col-red .navbar .nav > li > a:hover,
.col-red .navbar .nav > li > a:focus,
.col-red .navbar .nav .open > a,
.col-red .navbar .nav .open > a:hover,
.col-red .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-red .navbar .nav > li > a {
  color: #fff; }

.col-red .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-red .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-pink .navbar .navbar-brand,
.col-pink .navbar .navbar-brand:hover,
.col-pink .navbar .navbar-brand:active,
.col-pink .navbar .navbar-brand:focus {
  color: #fff; }

.col-pink .navbar .nav > li > a:hover,
.col-pink .navbar .nav > li > a:focus,
.col-pink .navbar .nav .open > a,
.col-pink .navbar .nav .open > a:hover,
.col-pink .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-pink .navbar .nav > li > a {
  color: #fff; }

.col-pink .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-pink .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-purple .navbar .navbar-brand,
.col-purple .navbar .navbar-brand:hover,
.col-purple .navbar .navbar-brand:active,
.col-purple .navbar .navbar-brand:focus {
  color: #fff; }

.col-purple .navbar .nav > li > a:hover,
.col-purple .navbar .nav > li > a:focus,
.col-purple .navbar .nav .open > a,
.col-purple .navbar .nav .open > a:hover,
.col-purple .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-purple .navbar .nav > li > a {
  color: #fff; }

.col-purple .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-purple .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-deep-purple .navbar .navbar-brand,
.col-deep-purple .navbar .navbar-brand:hover,
.col-deep-purple .navbar .navbar-brand:active,
.col-deep-purple .navbar .navbar-brand:focus {
  color: #fff; }

.col-deep-purple .navbar .nav > li > a:hover,
.col-deep-purple .navbar .nav > li > a:focus,
.col-deep-purple .navbar .nav .open > a,
.col-deep-purple .navbar .nav .open > a:hover,
.col-deep-purple .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-deep-purple .navbar .nav > li > a {
  color: #fff; }

.col-deep-purple .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-deep-purple .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-indigo .navbar .navbar-brand,
.col-indigo .navbar .navbar-brand:hover,
.col-indigo .navbar .navbar-brand:active,
.col-indigo .navbar .navbar-brand:focus {
  color: #fff; }

.col-indigo .navbar .nav > li > a:hover,
.col-indigo .navbar .nav > li > a:focus,
.col-indigo .navbar .nav .open > a,
.col-indigo .navbar .nav .open > a:hover,
.col-indigo .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-indigo .navbar .nav > li > a {
  color: #fff; }

.col-indigo .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-indigo .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-blue .navbar .navbar-brand,
.col-blue .navbar .navbar-brand:hover,
.col-blue .navbar .navbar-brand:active,
.col-blue .navbar .navbar-brand:focus {
  color: #fff; }

.col-blue .navbar .nav > li > a:hover,
.col-blue .navbar .nav > li > a:focus,
.col-blue .navbar .nav .open > a,
.col-blue .navbar .nav .open > a:hover,
.col-blue .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-blue .navbar .nav > li > a {
  color: #fff; }

.col-blue .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-blue .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-light-blue .navbar .navbar-brand,
.col-light-blue .navbar .navbar-brand:hover,
.col-light-blue .navbar .navbar-brand:active,
.col-light-blue .navbar .navbar-brand:focus {
  color: #fff; }

.col-light-blue .navbar .nav > li > a:hover,
.col-light-blue .navbar .nav > li > a:focus,
.col-light-blue .navbar .nav .open > a,
.col-light-blue .navbar .nav .open > a:hover,
.col-light-blue .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-light-blue .navbar .nav > li > a {
  color: #fff; }

.col-light-blue .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-light-blue .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-cyan .navbar .navbar-brand,
.col-cyan .navbar .navbar-brand:hover,
.col-cyan .navbar .navbar-brand:active,
.col-cyan .navbar .navbar-brand:focus {
  color: #fff; }

.col-cyan .navbar .nav > li > a:hover,
.col-cyan .navbar .nav > li > a:focus,
.col-cyan .navbar .nav .open > a,
.col-cyan .navbar .nav .open > a:hover,
.col-cyan .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-cyan .navbar .nav > li > a {
  color: #fff; }

.col-cyan .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-cyan .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-teal .navbar .navbar-brand,
.col-teal .navbar .navbar-brand:hover,
.col-teal .navbar .navbar-brand:active,
.col-teal .navbar .navbar-brand:focus {
  color: #fff; }

.col-teal .navbar .nav > li > a:hover,
.col-teal .navbar .nav > li > a:focus,
.col-teal .navbar .nav .open > a,
.col-teal .navbar .nav .open > a:hover,
.col-teal .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-teal .navbar .nav > li > a {
  color: #fff; }

.col-teal .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-teal .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-green .navbar .navbar-brand,
.col-green .navbar .navbar-brand:hover,
.col-green .navbar .navbar-brand:active,
.col-green .navbar .navbar-brand:focus {
  color: #fff; }

.col-green .navbar .nav > li > a:hover,
.col-green .navbar .nav > li > a:focus,
.col-green .navbar .nav .open > a,
.col-green .navbar .nav .open > a:hover,
.col-green .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-green .navbar .nav > li > a {
  color: #fff; }

.col-green .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-green .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-light-green .navbar .navbar-brand,
.col-light-green .navbar .navbar-brand:hover,
.col-light-green .navbar .navbar-brand:active,
.col-light-green .navbar .navbar-brand:focus {
  color: #fff; }

.col-light-green .navbar .nav > li > a:hover,
.col-light-green .navbar .nav > li > a:focus,
.col-light-green .navbar .nav .open > a,
.col-light-green .navbar .nav .open > a:hover,
.col-light-green .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-light-green .navbar .nav > li > a {
  color: #fff; }

.col-light-green .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-light-green .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-lime .navbar .navbar-brand,
.col-lime .navbar .navbar-brand:hover,
.col-lime .navbar .navbar-brand:active,
.col-lime .navbar .navbar-brand:focus {
  color: #fff; }

.col-lime .navbar .nav > li > a:hover,
.col-lime .navbar .nav > li > a:focus,
.col-lime .navbar .nav .open > a,
.col-lime .navbar .nav .open > a:hover,
.col-lime .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-lime .navbar .nav > li > a {
  color: #fff; }

.col-lime .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-lime .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-yellow .navbar .navbar-brand,
.col-yellow .navbar .navbar-brand:hover,
.col-yellow .navbar .navbar-brand:active,
.col-yellow .navbar .navbar-brand:focus {
  color: #fff; }

.col-yellow .navbar .nav > li > a:hover,
.col-yellow .navbar .nav > li > a:focus,
.col-yellow .navbar .nav .open > a,
.col-yellow .navbar .nav .open > a:hover,
.col-yellow .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-yellow .navbar .nav > li > a {
  color: #fff; }

.col-yellow .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-yellow .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-amber .navbar .navbar-brand,
.col-amber .navbar .navbar-brand:hover,
.col-amber .navbar .navbar-brand:active,
.col-amber .navbar .navbar-brand:focus {
  color: #fff; }

.col-amber .navbar .nav > li > a:hover,
.col-amber .navbar .nav > li > a:focus,
.col-amber .navbar .nav .open > a,
.col-amber .navbar .nav .open > a:hover,
.col-amber .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-amber .navbar .nav > li > a {
  color: #fff; }

.col-amber .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-amber .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-orange .navbar .navbar-brand,
.col-orange .navbar .navbar-brand:hover,
.col-orange .navbar .navbar-brand:active,
.col-orange .navbar .navbar-brand:focus {
  color: #fff; }

.col-orange .navbar .nav > li > a:hover,
.col-orange .navbar .nav > li > a:focus,
.col-orange .navbar .nav .open > a,
.col-orange .navbar .nav .open > a:hover,
.col-orange .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-orange .navbar .nav > li > a {
  color: #fff; }

.col-orange .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-orange .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-deep-orange .navbar .navbar-brand,
.col-deep-orange .navbar .navbar-brand:hover,
.col-deep-orange .navbar .navbar-brand:active,
.col-deep-orange .navbar .navbar-brand:focus {
  color: #fff; }

.col-deep-orange .navbar .nav > li > a:hover,
.col-deep-orange .navbar .nav > li > a:focus,
.col-deep-orange .navbar .nav .open > a,
.col-deep-orange .navbar .nav .open > a:hover,
.col-deep-orange .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-deep-orange .navbar .nav > li > a {
  color: #fff; }

.col-deep-orange .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-deep-orange .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-brown .navbar .navbar-brand,
.col-brown .navbar .navbar-brand:hover,
.col-brown .navbar .navbar-brand:active,
.col-brown .navbar .navbar-brand:focus {
  color: #fff; }

.col-brown .navbar .nav > li > a:hover,
.col-brown .navbar .nav > li > a:focus,
.col-brown .navbar .nav .open > a,
.col-brown .navbar .nav .open > a:hover,
.col-brown .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-brown .navbar .nav > li > a {
  color: #fff; }

.col-brown .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-brown .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-grey .navbar .navbar-brand,
.col-grey .navbar .navbar-brand:hover,
.col-grey .navbar .navbar-brand:active,
.col-grey .navbar .navbar-brand:focus {
  color: #fff; }

.col-grey .navbar .nav > li > a:hover,
.col-grey .navbar .nav > li > a:focus,
.col-grey .navbar .nav .open > a,
.col-grey .navbar .nav .open > a:hover,
.col-grey .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-grey .navbar .nav > li > a {
  color: #fff; }

.col-grey .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-grey .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-blue-grey .navbar .navbar-brand,
.col-blue-grey .navbar .navbar-brand:hover,
.col-blue-grey .navbar .navbar-brand:active,
.col-blue-grey .navbar .navbar-brand:focus {
  color: #fff; }

.col-blue-grey .navbar .nav > li > a:hover,
.col-blue-grey .navbar .nav > li > a:focus,
.col-blue-grey .navbar .nav .open > a,
.col-blue-grey .navbar .nav .open > a:hover,
.col-blue-grey .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-blue-grey .navbar .nav > li > a {
  color: #fff; }

.col-blue-grey .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-blue-grey .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-black .navbar .navbar-brand,
.col-black .navbar .navbar-brand:hover,
.col-black .navbar .navbar-brand:active,
.col-black .navbar .navbar-brand:focus {
  color: #fff; }

.col-black .navbar .nav > li > a:hover,
.col-black .navbar .nav > li > a:focus,
.col-black .navbar .nav .open > a,
.col-black .navbar .nav .open > a:hover,
.col-black .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-black .navbar .nav > li > a {
  color: #fff; }

.col-black .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-black .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-white .navbar .navbar-brand,
.col-white .navbar .navbar-brand:hover,
.col-white .navbar .navbar-brand:active,
.col-white .navbar .navbar-brand:focus {
  color: #fff; }

.col-white .navbar .nav > li > a:hover,
.col-white .navbar .nav > li > a:focus,
.col-white .navbar .nav .open > a,
.col-white .navbar .nav .open > a:hover,
.col-white .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-white .navbar .nav > li > a {
  color: #fff; }

.col-white .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-white .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

/* Material Icons ============================== */
.material-icons.md-18 {
  font-size: 18px; }

.material-icons.md-24 {
  font-size: 24px; }

.material-icons.md-26 {
  font-size: 26px; }

.material-icons.md-28 {
  font-size: 28px; }

.material-icons.md-30 {
  font-size: 30px; }

.material-icons.md-32 {
  font-size: 32px; }

.material-icons.md-36 {
  font-size: 36px; }

.material-icons.md-48 {
  font-size: 48px; }

/* Helpers ===================================== */
.m-l--125 {
  margin-left: -125px; }

.m-t--125 {
  margin-top: -125px; }

.m-r--125 {
  margin-right: -125px; }

.m-b--125 {
  margin-bottom: -125px; }

.m-l--120 {
  margin-left: -120px; }

.m-t--120 {
  margin-top: -120px; }

.m-r--120 {
  margin-right: -120px; }

.m-b--120 {
  margin-bottom: -120px; }

.m-l--115 {
  margin-left: -115px; }

.m-t--115 {
  margin-top: -115px; }

.m-r--115 {
  margin-right: -115px; }

.m-b--115 {
  margin-bottom: -115px; }

.m-l--110 {
  margin-left: -110px; }

.m-t--110 {
  margin-top: -110px; }

.m-r--110 {
  margin-right: -110px; }

.m-b--110 {
  margin-bottom: -110px; }

.m-l--105 {
  margin-left: -105px; }

.m-t--105 {
  margin-top: -105px; }

.m-r--105 {
  margin-right: -105px; }

.m-b--105 {
  margin-bottom: -105px; }

.m-l--100 {
  margin-left: -100px; }

.m-t--100 {
  margin-top: -100px; }

.m-r--100 {
  margin-right: -100px; }

.m-b--100 {
  margin-bottom: -100px; }

.m-l--95 {
  margin-left: -95px; }

.m-t--95 {
  margin-top: -95px; }

.m-r--95 {
  margin-right: -95px; }

.m-b--95 {
  margin-bottom: -95px; }

.m-l--90 {
  margin-left: -90px; }

.m-t--90 {
  margin-top: -90px; }

.m-r--90 {
  margin-right: -90px; }

.m-b--90 {
  margin-bottom: -90px; }

.m-l--85 {
  margin-left: -85px; }

.m-t--85 {
  margin-top: -85px; }

.m-r--85 {
  margin-right: -85px; }

.m-b--85 {
  margin-bottom: -85px; }

.m-l--80 {
  margin-left: -80px; }

.m-t--80 {
  margin-top: -80px; }

.m-r--80 {
  margin-right: -80px; }

.m-b--80 {
  margin-bottom: -80px; }

.m-l--75 {
  margin-left: -75px; }

.m-t--75 {
  margin-top: -75px; }

.m-r--75 {
  margin-right: -75px; }

.m-b--75 {
  margin-bottom: -75px; }

.m-l--70 {
  margin-left: -70px; }

.m-t--70 {
  margin-top: -70px; }

.m-r--70 {
  margin-right: -70px; }

.m-b--70 {
  margin-bottom: -70px; }

.m-l--65 {
  margin-left: -65px; }

.m-t--65 {
  margin-top: -65px; }

.m-r--65 {
  margin-right: -65px; }

.m-b--65 {
  margin-bottom: -65px; }

.m-l--60 {
  margin-left: -60px; }

.m-t--60 {
  margin-top: -60px; }

.m-r--60 {
  margin-right: -60px; }

.m-b--60 {
  margin-bottom: -60px; }

.m-l--55 {
  margin-left: -55px; }

.m-t--55 {
  margin-top: -55px; }

.m-r--55 {
  margin-right: -55px; }

.m-b--55 {
  margin-bottom: -55px; }

.m-l--50 {
  margin-left: -50px; }

.m-t--50 {
  margin-top: -50px; }

.m-r--50 {
  margin-right: -50px; }

.m-b--50 {
  margin-bottom: -50px; }

.m-l--45 {
  margin-left: -45px; }

.m-t--45 {
  margin-top: -45px; }

.m-r--45 {
  margin-right: -45px; }

.m-b--45 {
  margin-bottom: -45px; }

.m-l--40 {
  margin-left: -40px; }

.m-t--40 {
  margin-top: -40px; }

.m-r--40 {
  margin-right: -40px; }

.m-b--40 {
  margin-bottom: -40px; }

.m-l--35 {
  margin-left: -35px; }

.m-t--35 {
  margin-top: -35px; }

.m-r--35 {
  margin-right: -35px; }

.m-b--35 {
  margin-bottom: -35px; }

.m-l--30 {
  margin-left: -30px; }

.m-t--30 {
  margin-top: -30px; }

.m-r--30 {
  margin-right: -30px; }

.m-b--30 {
  margin-bottom: -30px; }

.m-l--25 {
  margin-left: -25px; }

.m-t--25 {
  margin-top: -25px; }

.m-r--25 {
  margin-right: -25px; }

.m-b--25 {
  margin-bottom: -25px; }

.m-l--20 {
  margin-left: -20px; }

.m-t--20 {
  margin-top: -20px; }

.m-r--20 {
  margin-right: -20px; }

.m-b--20 {
  margin-bottom: -20px; }

.m-l--15 {
  margin-left: -15px; }

.m-t--15 {
  margin-top: -15px; }

.m-r--15 {
  margin-right: -15px; }

.m-b--15 {
  margin-bottom: -15px; }

.m-l--10 {
  margin-left: -10px; }

.m-t--10 {
  margin-top: -10px; }

.m-r--10 {
  margin-right: -10px; }

.m-b--10 {
  margin-bottom: -10px; }

.m-l--5 {
  margin-left: -5px; }

.m-t--5 {
  margin-top: -5px; }

.m-r--5 {
  margin-right: -5px; }

.m-b--5 {
  margin-bottom: -5px; }

.m-l-0 {
  margin-left: 0px; }

.m-t-0 {
  margin-top: 0px; }

.m-r-0 {
  margin-right: 0px; }

.m-b-0 {
  margin-bottom: 0px; }

.m-l-5 {
  margin-left: 5px; }

.m-t-5 {
  margin-top: 5px; }

.m-r-5 {
  margin-right: 5px; }

.m-b-5 {
  margin-bottom: 5px; }

.m-l-10 {
  margin-left: 10px; }

.m-t-10 {
  margin-top: 10px; }

.m-r-10 {
  margin-right: 10px; }

.m-b-10 {
  margin-bottom: 10px; }

.m-l-15 {
  margin-left: 15px; }

.m-t-15 {
  margin-top: 15px; }

.m-r-15 {
  margin-right: 15px; }

.m-b-15 {
  margin-bottom: 15px; }

.m-l-20 {
  margin-left: 20px; }

.m-t-20 {
  margin-top: 20px; }

.m-r-20 {
  margin-right: 20px; }

.m-b-20 {
  margin-bottom: 20px; }

.m-l-25 {
  margin-left: 25px; }

.m-t-25 {
  margin-top: 25px; }

.m-r-25 {
  margin-right: 25px; }

.m-b-25 {
  margin-bottom: 25px; }

.m-l-30 {
  margin-left: 30px; }

.m-t-30 {
  margin-top: 30px; }

.m-r-30 {
  margin-right: 30px; }

.m-b-30 {
  margin-bottom: 30px; }

.m-l-35 {
  margin-left: 35px; }

.m-t-35 {
  margin-top: 35px; }

.m-r-35 {
  margin-right: 35px; }

.m-b-35 {
  margin-bottom: 35px; }

.m-l-40 {
  margin-left: 40px; }

.m-t-40 {
  margin-top: 40px; }

.m-r-40 {
  margin-right: 40px; }

.m-b-40 {
  margin-bottom: 40px; }

.m-l-45 {
  margin-left: 45px; }

.m-t-45 {
  margin-top: 45px; }

.m-r-45 {
  margin-right: 45px; }

.m-b-45 {
  margin-bottom: 45px; }

.m-l-50 {
  margin-left: 50px; }

.m-t-50 {
  margin-top: 50px; }

.m-r-50 {
  margin-right: 50px; }

.m-b-50 {
  margin-bottom: 50px; }

.m-l-55 {
  margin-left: 55px; }

.m-t-55 {
  margin-top: 55px; }

.m-r-55 {
  margin-right: 55px; }

.m-b-55 {
  margin-bottom: 55px; }

.m-l-60 {
  margin-left: 60px; }

.m-t-60 {
  margin-top: 60px; }

.m-r-60 {
  margin-right: 60px; }

.m-b-60 {
  margin-bottom: 60px; }

.m-l-65 {
  margin-left: 65px; }

.m-t-65 {
  margin-top: 65px; }

.m-r-65 {
  margin-right: 65px; }

.m-b-65 {
  margin-bottom: 65px; }

.m-l-70 {
  margin-left: 70px; }

.m-t-70 {
  margin-top: 70px; }

.m-r-70 {
  margin-right: 70px; }

.m-b-70 {
  margin-bottom: 70px; }

.m-l-75 {
  margin-left: 75px; }

.m-t-75 {
  margin-top: 75px; }

.m-r-75 {
  margin-right: 75px; }

.m-b-75 {
  margin-bottom: 75px; }

.m-l-80 {
  margin-left: 80px; }

.m-t-80 {
  margin-top: 80px; }

.m-r-80 {
  margin-right: 80px; }

.m-b-80 {
  margin-bottom: 80px; }

.m-l-85 {
  margin-left: 85px; }

.m-t-85 {
  margin-top: 85px; }

.m-r-85 {
  margin-right: 85px; }

.m-b-85 {
  margin-bottom: 85px; }

.m-l-90 {
  margin-left: 90px; }

.m-t-90 {
  margin-top: 90px; }

.m-r-90 {
  margin-right: 90px; }

.m-b-90 {
  margin-bottom: 90px; }

.m-l-95 {
  margin-left: 95px; }

.m-t-95 {
  margin-top: 95px; }

.m-r-95 {
  margin-right: 95px; }

.m-b-95 {
  margin-bottom: 95px; }

.m-l-100 {
  margin-left: 100px; }

.m-t-100 {
  margin-top: 100px; }

.m-r-100 {
  margin-right: 100px; }

.m-b-100 {
  margin-bottom: 100px; }

.m-l-105 {
  margin-left: 105px; }

.m-t-105 {
  margin-top: 105px; }

.m-r-105 {
  margin-right: 105px; }

.m-b-105 {
  margin-bottom: 105px; }

.m-l-110 {
  margin-left: 110px; }

.m-t-110 {
  margin-top: 110px; }

.m-r-110 {
  margin-right: 110px; }

.m-b-110 {
  margin-bottom: 110px; }

.m-l-115 {
  margin-left: 115px; }

.m-t-115 {
  margin-top: 115px; }

.m-r-115 {
  margin-right: 115px; }

.m-b-115 {
  margin-bottom: 115px; }

.m-l-120 {
  margin-left: 120px; }

.m-t-120 {
  margin-top: 120px; }

.m-r-120 {
  margin-right: 120px; }

.m-b-120 {
  margin-bottom: 120px; }

.m-l-125 {
  margin-left: 125px; }

.m-t-125 {
  margin-top: 125px; }

.m-r-125 {
  margin-right: 125px; }

.m-b-125 {
  margin-bottom: 125px; }

.margin-0 {
  margin: 0; }

.p-l-0 {
  padding-left: 0px; }

.p-t-0 {
  padding-top: 0px; }

.p-r-0 {
  padding-right: 0px; }

.p-b-0 {
  padding-bottom: 0px; }

.p-l-5 {
  padding-left: 5px; }

.p-t-5 {
  padding-top: 5px; }

.p-r-5 {
  padding-right: 5px; }

.p-b-5 {
  padding-bottom: 5px; }

.p-l-10 {
  padding-left: 10px; }

.p-t-10 {
  padding-top: 10px; }

.p-r-10 {
  padding-right: 10px; }

.p-b-10 {
  padding-bottom: 10px; }

.p-l-15 {
  padding-left: 15px; }

.p-t-15 {
  padding-top: 15px; }

.p-r-15 {
  padding-right: 15px; }

.p-b-15 {
  padding-bottom: 15px; }

.p-l-20 {
  padding-left: 20px; }

.p-t-20 {
  padding-top: 20px; }

.p-r-20 {
  padding-right: 20px; }

.p-b-20 {
  padding-bottom: 20px; }

.p-l-25 {
  padding-left: 25px; }

.p-t-25 {
  padding-top: 25px; }

.p-r-25 {
  padding-right: 25px; }

.p-b-25 {
  padding-bottom: 25px; }

.p-l-30 {
  padding-left: 30px; }

.p-t-30 {
  padding-top: 30px; }

.p-r-30 {
  padding-right: 30px; }

.p-b-30 {
  padding-bottom: 30px; }

.p-l-35 {
  padding-left: 35px; }

.p-t-35 {
  padding-top: 35px; }

.p-r-35 {
  padding-right: 35px; }

.p-b-35 {
  padding-bottom: 35px; }

.p-l-40 {
  padding-left: 40px; }

.p-t-40 {
  padding-top: 40px; }

.p-r-40 {
  padding-right: 40px; }

.p-b-40 {
  padding-bottom: 40px; }

.p-l-45 {
  padding-left: 45px; }

.p-t-45 {
  padding-top: 45px; }

.p-r-45 {
  padding-right: 45px; }

.p-b-45 {
  padding-bottom: 45px; }

.p-l-50 {
  padding-left: 50px; }

.p-t-50 {
  padding-top: 50px; }

.p-r-50 {
  padding-right: 50px; }

.p-b-50 {
  padding-bottom: 50px; }

.p-l-55 {
  padding-left: 55px; }

.p-t-55 {
  padding-top: 55px; }

.p-r-55 {
  padding-right: 55px; }

.p-b-55 {
  padding-bottom: 55px; }

.p-l-60 {
  padding-left: 60px; }

.p-t-60 {
  padding-top: 60px; }

.p-r-60 {
  padding-right: 60px; }

.p-b-60 {
  padding-bottom: 60px; }

.p-l-65 {
  padding-left: 65px; }

.p-t-65 {
  padding-top: 65px; }

.p-r-65 {
  padding-right: 65px; }

.p-b-65 {
  padding-bottom: 65px; }

.p-l-70 {
  padding-left: 70px; }

.p-t-70 {
  padding-top: 70px; }

.p-r-70 {
  padding-right: 70px; }

.p-b-70 {
  padding-bottom: 70px; }

.p-l-75 {
  padding-left: 75px; }

.p-t-75 {
  padding-top: 75px; }

.p-r-75 {
  padding-right: 75px; }

.p-b-75 {
  padding-bottom: 75px; }

.p-l-80 {
  padding-left: 80px; }

.p-t-80 {
  padding-top: 80px; }

.p-r-80 {
  padding-right: 80px; }

.p-b-80 {
  padding-bottom: 80px; }

.p-l-85 {
  padding-left: 85px; }

.p-t-85 {
  padding-top: 85px; }

.p-r-85 {
  padding-right: 85px; }

.p-b-85 {
  padding-bottom: 85px; }

.p-l-90 {
  padding-left: 90px; }

.p-t-90 {
  padding-top: 90px; }

.p-r-90 {
  padding-right: 90px; }

.p-b-90 {
  padding-bottom: 90px; }

.p-l-95 {
  padding-left: 95px; }

.p-t-95 {
  padding-top: 95px; }

.p-r-95 {
  padding-right: 95px; }

.p-b-95 {
  padding-bottom: 95px; }

.p-l-100 {
  padding-left: 100px; }

.p-t-100 {
  padding-top: 100px; }

.p-r-100 {
  padding-right: 100px; }

.p-b-100 {
  padding-bottom: 100px; }

.p-l-105 {
  padding-left: 105px; }

.p-t-105 {
  padding-top: 105px; }

.p-r-105 {
  padding-right: 105px; }

.p-b-105 {
  padding-bottom: 105px; }

.p-l-110 {
  padding-left: 110px; }

.p-t-110 {
  padding-top: 110px; }

.p-r-110 {
  padding-right: 110px; }

.p-b-110 {
  padding-bottom: 110px; }

.p-l-115 {
  padding-left: 115px; }

.p-t-115 {
  padding-top: 115px; }

.p-r-115 {
  padding-right: 115px; }

.p-b-115 {
  padding-bottom: 115px; }

.p-l-120 {
  padding-left: 120px; }

.p-t-120 {
  padding-top: 120px; }

.p-r-120 {
  padding-right: 120px; }

.p-b-120 {
  padding-bottom: 120px; }

.p-l-125 {
  padding-left: 125px; }

.p-t-125 {
  padding-top: 125px; }

.p-r-125 {
  padding-right: 125px; }

.p-b-125 {
  padding-bottom: 125px; }

.padding-0 {
  padding: 0; }

.font-6 {
  font-size: 6px; }

.font-7 {
  font-size: 7px; }

.font-8 {
  font-size: 8px; }

.font-9 {
  font-size: 9px; }

.font-10 {
  font-size: 10px; }

.font-11 {
  font-size: 11px; }

.font-12 {
  font-size: 12px; }

.font-13 {
  font-size: 13px; }

.font-14 {
  font-size: 14px; }

.font-15 {
  font-size: 15px; }

.font-16 {
  font-size: 16px; }

.font-17 {
  font-size: 17px; }

.font-18 {
  font-size: 18px; }

.font-19 {
  font-size: 19px; }

.font-20 {
  font-size: 20px; }

.font-21 {
  font-size: 21px; }

.font-22 {
  font-size: 22px; }

.font-23 {
  font-size: 23px; }

.font-24 {
  font-size: 24px; }

.font-25 {
  font-size: 25px; }

.font-26 {
  font-size: 26px; }

.font-27 {
  font-size: 27px; }

.font-28 {
  font-size: 28px; }

.font-29 {
  font-size: 29px; }

.font-30 {
  font-size: 30px; }

.font-31 {
  font-size: 31px; }

.font-32 {
  font-size: 32px; }

.font-33 {
  font-size: 33px; }

.font-34 {
  font-size: 34px; }

.font-35 {
  font-size: 35px; }

.font-36 {
  font-size: 36px; }

.font-37 {
  font-size: 37px; }

.font-38 {
  font-size: 38px; }

.font-39 {
  font-size: 39px; }

.font-40 {
  font-size: 40px; }

.font-41 {
  font-size: 41px; }

.font-42 {
  font-size: 42px; }

.font-43 {
  font-size: 43px; }

.font-44 {
  font-size: 44px; }

.font-45 {
  font-size: 45px; }

.font-46 {
  font-size: 46px; }

.font-47 {
  font-size: 47px; }

.font-48 {
  font-size: 48px; }

.font-49 {
  font-size: 49px; }

.font-50 {
  font-size: 50px; }

.align-left {
  text-align: left; }

.align-center {
  text-align: center; }

.align-right {
  text-align: right; }

.align-justify {
  text-align: justify; }

.no-resize {
  resize: none; }

.font-bold {
  font-weight: bold; }

.font-italic {
  font-style: italic; }

.font-underline {
  text-decoration: underline; }

.font-line-through {
  text-decoration: line-through; }

.font-overline {
  text-decoration: overline; }

.block-header {
  margin-bottom: 15px; }
  .block-header h2 {
    margin: 0 !important;
    color: #666 !important;
    font-weight: normal;
    font-size: 16px; }
    .block-header h2 small {
      display: block;
      font-size: 12px;
      margin-top: 8px;
      color: #888; }
      .block-header h2 small a {
        font-weight: bold;
        color: #777; }

.bg-red {
  background-color: #F44336 !important;
  color: #fff; }
  .bg-red .content .text,
  .bg-red .content .number {
    color: #fff !important; }

.bg-pink {
  background-color: #E91E63 !important;
  color: #fff; }
  .bg-pink .content .text,
  .bg-pink .content .number {
    color: #fff !important; }

.bg-purple {
  background-color: #9C27B0 !important;
  color: #fff; }
  .bg-purple .content .text,
  .bg-purple .content .number {
    color: #fff !important; }

.bg-deep-purple {
  background-color: #673AB7 !important;
  color: #fff; }
  .bg-deep-purple .content .text,
  .bg-deep-purple .content .number {
    color: #fff !important; }

.bg-indigo {
  background-color: #3F51B5 !important;
  color: #fff; }
  .bg-indigo .content .text,
  .bg-indigo .content .number {
    color: #fff !important; }

.bg-blue {
  background-color: #2196F3 !important;
  color: #fff; }
  .bg-blue .content .text,
  .bg-blue .content .number {
    color: #fff !important; }

.bg-light-blue {
  background-color: #03A9F4 !important;
  color: #fff; }
  .bg-light-blue .content .text,
  .bg-light-blue .content .number {
    color: #fff !important; }

.bg-cyan {
  background-color: #00BCD4 !important;
  color: #fff; }
  .bg-cyan .content .text,
  .bg-cyan .content .number {
    color: #fff !important; }

.bg-teal {
  background-color: #009688 !important;
  color: #fff; }
  .bg-teal .content .text,
  .bg-teal .content .number {
    color: #fff !important; }

.bg-green {
  background-color: #4CAF50 !important;
  color: #fff; }
  .bg-green .content .text,
  .bg-green .content .number {
    color: #fff !important; }

.bg-light-green {
  background-color: #8BC34A !important;
  color: #fff; }
  .bg-light-green .content .text,
  .bg-light-green .content .number {
    color: #fff !important; }

.bg-lime {
  background-color: #CDDC39 !important;
  color: #fff; }
  .bg-lime .content .text,
  .bg-lime .content .number {
    color: #fff !important; }

.bg-yellow {
  background-color: #ffe821 !important;
  color: #fff; }
  .bg-yellow .content .text,
  .bg-yellow .content .number {
    color: #fff !important; }

.bg-amber {
  background-color: #FFC107 !important;
  color: #fff; }
  .bg-amber .content .text,
  .bg-amber .content .number {
    color: #fff !important; }

.bg-orange {
  background-color: #FF9800 !important;
  color: #fff; }
  .bg-orange .content .text,
  .bg-orange .content .number {
    color: #fff !important; }

.bg-deep-orange {
  background-color: #FF5722 !important;
  color: #fff; }
  .bg-deep-orange .content .text,
  .bg-deep-orange .content .number {
    color: #fff !important; }

.bg-brown {
  background-color: #795548 !important;
  color: #fff; }
  .bg-brown .content .text,
  .bg-brown .content .number {
    color: #fff !important; }

.bg-grey {
  background-color: #9E9E9E !important;
  color: #fff; }
  .bg-grey .content .text,
  .bg-grey .content .number {
    color: #fff !important; }

.bg-blue-grey {
  background-color: #607D8B !important;
  color: #fff; }
  .bg-blue-grey .content .text,
  .bg-blue-grey .content .number {
    color: #fff !important; }

.bg-black {
  background-color: #000000 !important;
  color: #fff; }
  .bg-black .content .text,
  .bg-black .content .number {
    color: #fff !important; }

.bg-white {
  background-color: #ffffff !important;
  color: #fff; }
  .bg-white .content .text,
  .bg-white .content .number {
    color: #fff !important; }

.col-red {
  color: #F44336 !important; }

.col-pink {
  color: #E91E63 !important; }

.col-purple {
  color: #9C27B0 !important; }

.col-deep-purple {
  color: #673AB7 !important; }

.col-indigo {
  color: #3F51B5 !important; }

.col-blue {
  color: #2196F3 !important; }

.col-light-blue {
  color: #03A9F4 !important; }

.col-cyan {
  color: #00BCD4 !important; }

.col-teal {
  color: #009688 !important; }

.col-green {
  color: #4CAF50 !important; }

.col-light-green {
  color: #8BC34A !important; }

.col-lime {
  color: #CDDC39 !important; }

.col-yellow {
  color: #ffe821 !important; }

.col-amber {
  color: #FFC107 !important; }

.col-orange {
  color: #FF9800 !important; }

.col-deep-orange {
  color: #FF5722 !important; }

.col-brown {
  color: #795548 !important; }

.col-grey {
  color: #9E9E9E !important; }

.col-blue-grey {
  color: #607D8B !important; }

.col-black {
  color: #000000 !important; }

.col-white {
  color: #ffffff !important; }

/* Custom Animate ============================== */
@-ms-keyframes spin {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-moz-keyframes spin {
  from {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes spin {
  from {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

/* Demo ======================================== */
.demo-button-sizes .btn {
  margin-bottom: 5px; }

.icon-button-demo button {
  margin-right: 5px;
  margin-bottom: 12px; }

.icon-and-text-button-demo button {
  margin-right: 5px;
  margin-bottom: 12px;
  width: 16.66666666666667%; }

.button-demo ul {
  padding-left: 0; }
  .button-demo ul li {
    list-style: none;
    padding-left: 0;
    display: inline-block;
    margin-right: 7px; }
    .button-demo ul li .btn {
      display: block;
      min-width: 175px; }

.button-demo .btn {
  margin-right: 8px;
  margin-bottom: 13px;
  min-width: 120px; }

.demo-button-groups .btn-group {
  margin-right: 10px; }

.demo-button-toolbar .btn-toolbar {
  float: left;
  margin-right: 25px; }

.demo-button-nesting > .btn-group {
  margin-right: 15px; }

.demo-single-button-dropdowns > .btn-group {
  margin-right: 10px; }

.demo-splite-button-dropdowns > .btn-group {
  margin-right: 10px; }

.demo-dropup .dropup {
  margin-right: 10px; }

.demo-checkbox label,
.demo-radio-button label {
  min-width: 150px; }

.demo-knob-chart div {
  margin-right: 15px; }

.demo-switch .switch {
  display: inline-block;
  min-width: 170px; }

.demo-switch .demo-switch-title {
  min-width: 95px;
  display: inline-block; }

.demo-color-box {
  padding: 15px 0;
  text-align: center;
  margin-bottom: 20px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px; }
  .demo-color-box .color-name {
    font-size: 16px;
    margin-bottom: 5px; }
  .demo-color-box .color-code,
  .demo-color-box .color-class-name {
    font-size: 13px; }

.demo-image-copyright {
  text-align: right;
  font-style: italic;
  font-size: 12px;
  color: #777;
  margin: 5px 0 10px 0; }
  .demo-image-copyright a {
    font-weight: bold;
    color: #555 !important; }

.demo-tagsinput-area {
  margin-bottom: 50px !important; }

.demo-icon-container .demo-google-material-icon {
  margin-bottom: 5px;
  text-align: left; }
  .demo-icon-container .demo-google-material-icon .icon-name {
    position: relative;
    top: -8px;
    left: 7px; }
  .demo-icon-container .demo-google-material-icon .material-icons {
    width: 24px; }

.demo-preloader .preloader {
  margin-right: 10px; }

.irs-demo {
  margin-bottom: 40px; }
  .irs-demo .irs {
    margin-top: 15px; }

.right-sidebar .nav-tabs + .tab-content {
  padding: 0; }

.right-sidebar p {
  margin: 20px 15px 15px 15px;
  font-weight: bold;
  text-align: center; }

.right-sidebar #settings .setting-list {
  list-style: none;
  padding-left: 0;
  margin-bottom: 20px; }
  .right-sidebar #settings .setting-list li {
    padding: 15px;
    position: relative;
    border-top: 1px solid #eee; }
    .right-sidebar #settings .setting-list li .switch {
      position: absolute;
      top: 15px;
      right: 5px; }

.demo-choose-skin {
  list-style: none;
  padding-left: 0;
  overflow-y: hidden; }
  .demo-choose-skin li {
    border-bottom: 1px solid #eee;
    padding: 10px 10px 4px 10px;
    position: relative;
    cursor: pointer; }
    .demo-choose-skin li.active {
      background-color: #eee; }
      .demo-choose-skin li.active:after {
        font-family: 'Material Icons';
        position: absolute;
        top: 10px;
        right: 10px;
        content: '\E876';
        font-size: 18px;
        font-weight: bold; }
    .demo-choose-skin li:hover {
      background-color: #eee; }
    .demo-choose-skin li div {
      width: 24px;
      height: 24px;
      display: inline-block;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      -ms-border-radius: 3px;
      border-radius: 3px; }
    .demo-choose-skin li span {
      position: relative;
      bottom: 7px;
      left: 5px; }
  .demo-choose-skin .red {
    background-color: #F44336; }
  .demo-choose-skin .pink {
    background-color: #E91E63; }
  .demo-choose-skin .purple {
    background-color: #9C27B0; }
  .demo-choose-skin .deep-purple {
    background-color: #673AB7; }
  .demo-choose-skin .indigo {
    background-color: #3F51B5; }
  .demo-choose-skin .blue {
    background-color: #2196F3; }
  .demo-choose-skin .light-blue {
    background-color: #03A9F4; }
  .demo-choose-skin .cyan {
    background-color: #00BCD4; }
  .demo-choose-skin .teal {
    background-color: #009688; }
  .demo-choose-skin .green {
    background-color: #4CAF50; }
  .demo-choose-skin .light-green {
    background-color: #8BC34A; }
  .demo-choose-skin .lime {
    background-color: #CDDC39; }
  .demo-choose-skin .yellow {
    background-color: #ffe821; }
  .demo-choose-skin .amber {
    background-color: #FFC107; }
  .demo-choose-skin .orange {
    background-color: #FF9800; }
  .demo-choose-skin .deep-orange {
    background-color: #FF5722; }
  .demo-choose-skin .brown {
    background-color: #795548; }
  .demo-choose-skin .grey {
    background-color: #9E9E9E; }
  .demo-choose-skin .blue-grey {
    background-color: #607D8B; }
  .demo-choose-skin .black {
    background-color: #000000; }
  .demo-choose-skin .white {
    background-color: #ffffff; }

/* Materialize Css | Taken from www.materializecss.com */
/* Media ======================================= */
@media (max-width: 767px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 35px;
    width: 73%; }
  .navbar .navbar-header {
    display: inline-block;
    margin-bottom: -6px;
    width: calc(100% + 30px); }
  .navbar .nav > li {
    display: inline-block; }
  .navbar .navbar-nav {
    margin-top: -10px;
    margin-bottom: 1px;
    margin-left: -7px; }
    .navbar .navbar-nav .open .dropdown-menu {
      background-color: #fff;
      position: absolute; }
  .navbar .dropdown-menu {
    margin-left: -50px; }
  .navbar .js-right-sidebar {
    margin-top: 15px; }
  .dt-buttons {
    float: none !important;
    text-align: center;
    margin-bottom: 15px; }
  .panel-switch-btn {
    top: 12px;
    right: 0 !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 20px; } }

@media (min-width: 992px) and (max-width: 1169px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 20px; } }

/* General ===================================== */
body {
  background-color: #e9e9e9;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  font-family: 'Roboto', Arial, Tahoma, sans-serif; }

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: bold; }

button,
input,
select,
a {
  outline: none !important; }

.no-animate {
  -o-transition-property: none !important;
  -moz-transition-property: none !important;
  -ms-transition-property: none !important;
  -webkit-transition-property: none !important;
  transition-property: none !important;
  -o-transform: none !important;
  -moz-transform: none !important;
  -ms-transform: none !important;
  -webkit-transform: none !important;
  transform: none !important;
  -webkit-animation: none !important;
  -moz-animation: none !important;
  -o-animation: none !important;
  -ms-animation: none !important;
  animation: none !important; }

section.content {
  margin: 100px 15px 0 315px;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s; }

/* Dashboard =================================== */
.dashboard-flot-chart {
  height: 275px; }

.dashboard-donut-chart {
  height: 265px; }

.dashboard-line-chart {
  height: 250px; }

.dashboard-stat-list {
  list-style: none;
  padding-left: 0;
  margin-top: 40px; }
  .dashboard-stat-list li {
    padding: 16px 0 0 0; }
    .dashboard-stat-list li small {
      font-size: 8px; }

.dashboard-task-infos .progress {
  height: 10px;
  margin-bottom: 0;
  position: relative;
  top: 6px; }

/* Buttons ===================================== */
.btn:focus {
  outline: none !important; }

.btn-circle {
  border: none;
  outline: none !important;
  overflow: hidden;
  width: 40px;
  height: 40px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%; }
  .btn-circle i {
    font-size: 18px;
    position: relative;
    left: -1px; }

.btn-link {
  font-weight: bold;
  color: #333;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s; }
  .btn-link:active, .btn-link:focus {
    text-decoration: none;
    color: #333; }
  .btn-link:hover {
    text-decoration: none;
    color: #333;
    background-color: #ddd; }

.btn-circle-lg {
  border: none;
  outline: none !important;
  overflow: hidden;
  width: 50px;
  height: 50px;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  -ms-border-radius: 50% !important;
  border-radius: 50% !important; }
  .btn-circle-lg i {
    font-size: 26px !important;
    position: relative !important;
    left: 0px !important;
    top: 6px !important; }

.btn:not(.btn-link):not(.btn-circle) {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px;
  border: none;
  font-size: 13px;
  outline: none; }
  .btn:not(.btn-link):not(.btn-circle):hover {
    outline: none; }
  .btn:not(.btn-link):not(.btn-circle) i {
    font-size: 20px;
    position: relative;
    top: 3px; }
  .btn:not(.btn-link):not(.btn-circle) span {
    position: relative;
    top: -2px;
    margin-left: 3px; }

.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus {
  background-color: #ff9600 !important; }

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus {
  background-color: #fb483a !important; }

.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus {
  background-color: #00b0e4 !important; }

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus {
  background-color: #2b982b !important; }

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus {
  background-color: #1f91f3 !important; }

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus {
  background-color: #fff !important; }

.btn-group,
.btn-group-vertical {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12); }
  .btn-group .btn,
  .btn-group-vertical .btn {
    box-shadow: none !important;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
    .btn-group .btn .caret,
    .btn-group-vertical .btn .caret {
      position: relative;
      bottom: 1px; }
  .btn-group .btn-group,
  .btn-group-vertical .btn-group {
    box-shadow: none !important; }
  .btn-group .btn + .dropdown-toggle,
  .btn-group-vertical .btn + .dropdown-toggle {
    border-left: 1px solid rgba(0, 0, 0, 0.08) !important; }

/* Bootstrap Tags Input ======================== */
.bootstrap-tagsinput {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -ms-box-shadow: none !important;
  box-shadow: none !important;
  border: none !important; }

/* noUISlider ================================== */
.noUi-target {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -ms-touch-action: none;
  touch-action: none;
  -ms-user-select: none;
  -moz-user-select: none;
  user-select: none;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  direction: ltr; }
  .noUi-target * {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }

.noUi-base {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1; }

.noUi-origin {
  position: absolute;
  right: 0;
  top: 6px;
  left: 0;
  bottom: 0; }

.noUi-handle {
  position: relative;
  z-index: 1; }

.noUi-stacking .noUi-handle {
  z-index: 10; }

.noUi-state-tap .noUi-origin {
  -webkit-transition: left 0.25s, top 0.25s;
  transition: left 0.25s, top 0.25s; }

.noUi-state-drag * {
  cursor: inherit !important; }

.noUi-base {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }

.noUi-horizontal {
  height: 18px; }
  .noUi-horizontal .noUi-handle {
    width: 34px;
    height: 28px;
    left: -17px;
    top: -6px; }

.noUi-vertical {
  width: 18px; }
  .noUi-vertical .noUi-handle {
    width: 28px;
    height: 34px;
    left: -6px;
    top: -17px; }

.noUi-background {
  background: #FAFAFA;
  box-shadow: inset 0 1px 1px #f0f0f0; }

.noUi-connect {
  background: #3FB8AF;
  box-shadow: inset 0 0 3px rgba(51, 51, 51, 0.45);
  -webkit-transition: background 450ms;
  transition: background 450ms; }

.noUi-origin {
  border-radius: 2px; }

.noUi-target {
  border-radius: 4px;
  border: 1px solid #D3D3D3;
  box-shadow: inset 0 1px 1px #F0F0F0, 0 3px 6px -5px #BBB; }
  .noUi-target.noUi-connect {
    box-shadow: inset 0 0 3px rgba(51, 51, 51, 0.45), 0 3px 6px -5px #BBB; }

.noUi-dragable {
  cursor: w-resize; }

.noUi-vertical .noUi-dragable {
  cursor: n-resize; }

.noUi-handle {
  border: 1px solid #D9D9D9;
  border-radius: 3px;
  background: #FFF;
  cursor: default;
  box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB; }

.noUi-active {
  box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB; }

.noUi-handle:before {
  content: "";
  display: block;
  position: absolute;
  height: 14px;
  width: 1px;
  background: #E8E7E6;
  left: 14px;
  top: 6px; }

.noUi-handle:after {
  content: "";
  display: block;
  position: absolute;
  height: 14px;
  width: 1px;
  background: #E8E7E6;
  left: 14px;
  top: 6px;
  left: 17px; }

.noUi-vertical .noUi-handle:before {
  width: 14px;
  height: 1px;
  left: 6px;
  top: 14px; }

.noUi-vertical .noUi-handle:after {
  width: 14px;
  height: 1px;
  left: 6px;
  top: 14px;
  top: 17px; }

[disabled].noUi-connect, [disabled] .noUi-connect {
  background: #B8B8B8; }

[disabled].noUi-origin, [disabled] .noUi-handle {
  cursor: not-allowed; }

.noUi-target {
  box-shadow: none;
  border: none; }

.noUi-base {
  height: 15px;
  top: -6px; }

.noUi-background {
  height: 3px;
  top: 6px;
  background-color: #bfbfbf;
  box-shadow: none; }

.noUi-horizontal {
  height: 3px; }

.noUi-connect {
  height: 3px;
  top: 6px;
  background-color: #26A69A;
  box-shadow: none; }

.noUi-horizontal .noUi-handle {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  box-shadow: none;
  background-color: #26A69A;
  border: none;
  left: -5px;
  top: -6px;
  transition: width 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), height 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), left 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), top 0.2s cubic-bezier(0.215, 0.61, 0.355, 1); }

.noUi-handle:before, .noUi-handle:after {
  content: none; }

.noUi-target .noUi-active.noUi-handle {
  -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  -ms-box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); }

.noUi-target .range-label {
  position: absolute;
  height: 30px;
  width: 30px;
  top: -17px;
  left: -2px;
  background-color: #26A69A;
  border-radius: 50%;
  transition: border-radius 0.25s cubic-bezier(0.215, 0.61, 0.355, 1), transform 0.25s cubic-bezier(0.215, 0.61, 0.355, 1);
  transform: scale(0.5) rotate(-45deg);
  transform-origin: 50% 100%; }

.noUi-target .noUi-active .range-label {
  border-radius: 15px 15px 15px 0;
  transform: rotate(-45deg) translate(23px, -25px); }

.range-label span {
  width: 100%;
  text-align: center;
  color: #fff;
  font-size: 12px;
  transform: rotate(45deg);
  opacity: 0;
  position: absolute;
  top: 7px;
  left: -1px;
  transition: opacity 0.25s cubic-bezier(0.215, 0.61, 0.355, 1); }

.noUi-active .range-label span {
  opacity: 1; }

/* Multi Select ================================ */
.ms-container {
  width: auto !important; }
  .ms-container .ms-list {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    -ms-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    -ms-border-radius: 0 !important;
    border-radius: 0 !important; }
  .ms-container .ms-list.ms-focus {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    -ms-box-shadow: none !important;
    box-shadow: none !important; }
  .ms-container .ms-selectable,
  .ms-container .ms-selection {
    min-width: 250px !important; }
    .ms-container .ms-selectable li.ms-hover,
    .ms-container .ms-selection li.ms-hover {
      color: #000000 !important;
      background-color: #e6e6e6 !important; }
    .ms-container .ms-selectable li.ms-elem-selectable,
    .ms-container .ms-selectable li.ms-elem-selection,
    .ms-container .ms-selection li.ms-elem-selectable,
    .ms-container .ms-selection li.ms-elem-selection {
      padding: 9px 15px 6px 15px !important; }
  .ms-container .ms-optgroup-label {
    padding: 5px 0 0 8px !important; }

/* Card ======================================== */
.card {
  background: #fff;
  min-height: 50px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  margin-bottom: 30px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }
  .card .card-inside-title {
    margin-top: 25px;
    margin-bottom: 15px;
    display: block;
    font-size: 15px;
    color: #000; }
    .card .card-inside-title small {
      color: #999;
      display: block;
      font-size: 11px;
      margin-top: 5px; }
      .card .card-inside-title small a {
        color: #777;
        font-weight: bold; }
  .card .card-inside-title:first-child {
    margin-top: 0; }
  .card .bg-red,
  .card .bg-pink,
  .card .bg-purple,
  .card .bg-deep-purple,
  .card .bg-indigo,
  .card .bg-blue,
  .card .bg-light-blue,
  .card .bg-cyan,
  .card .bg-teal,
  .card .bg-green,
  .card .bg-light-green,
  .card .bg-lime,
  .card .bg-yellow,
  .card .bg-amber,
  .card .bg-orange,
  .card .bg-deep-orange,
  .card .bg-brown,
  .card .bg-grey,
  .card .bg-blue-grey,
  .card .bg-black {
    border-bottom: none !important;
    color: #fff !important; }
    .card .bg-red h2, .card .bg-red small, .card .bg-red .material-icons,
    .card .bg-pink h2,
    .card .bg-pink small,
    .card .bg-pink .material-icons,
    .card .bg-purple h2,
    .card .bg-purple small,
    .card .bg-purple .material-icons,
    .card .bg-deep-purple h2,
    .card .bg-deep-purple small,
    .card .bg-deep-purple .material-icons,
    .card .bg-indigo h2,
    .card .bg-indigo small,
    .card .bg-indigo .material-icons,
    .card .bg-blue h2,
    .card .bg-blue small,
    .card .bg-blue .material-icons,
    .card .bg-light-blue h2,
    .card .bg-light-blue small,
    .card .bg-light-blue .material-icons,
    .card .bg-cyan h2,
    .card .bg-cyan small,
    .card .bg-cyan .material-icons,
    .card .bg-teal h2,
    .card .bg-teal small,
    .card .bg-teal .material-icons,
    .card .bg-green h2,
    .card .bg-green small,
    .card .bg-green .material-icons,
    .card .bg-light-green h2,
    .card .bg-light-green small,
    .card .bg-light-green .material-icons,
    .card .bg-lime h2,
    .card .bg-lime small,
    .card .bg-lime .material-icons,
    .card .bg-yellow h2,
    .card .bg-yellow small,
    .card .bg-yellow .material-icons,
    .card .bg-amber h2,
    .card .bg-amber small,
    .card .bg-amber .material-icons,
    .card .bg-orange h2,
    .card .bg-orange small,
    .card .bg-orange .material-icons,
    .card .bg-deep-orange h2,
    .card .bg-deep-orange small,
    .card .bg-deep-orange .material-icons,
    .card .bg-brown h2,
    .card .bg-brown small,
    .card .bg-brown .material-icons,
    .card .bg-grey h2,
    .card .bg-grey small,
    .card .bg-grey .material-icons,
    .card .bg-blue-grey h2,
    .card .bg-blue-grey small,
    .card .bg-blue-grey .material-icons,
    .card .bg-black h2,
    .card .bg-black small,
    .card .bg-black .material-icons {
      color: #fff !important; }
    .card .bg-red .badge,
    .card .bg-pink .badge,
    .card .bg-purple .badge,
    .card .bg-deep-purple .badge,
    .card .bg-indigo .badge,
    .card .bg-blue .badge,
    .card .bg-light-blue .badge,
    .card .bg-cyan .badge,
    .card .bg-teal .badge,
    .card .bg-green .badge,
    .card .bg-light-green .badge,
    .card .bg-lime .badge,
    .card .bg-yellow .badge,
    .card .bg-amber .badge,
    .card .bg-orange .badge,
    .card .bg-deep-orange .badge,
    .card .bg-brown .badge,
    .card .bg-grey .badge,
    .card .bg-blue-grey .badge,
    .card .bg-black .badge {
      background-color: #fff;
      color: #555; }
  .card .header {
    color: #555;
    padding: 20px;
    position: relative;
    border-bottom: 1px solid rgba(204, 204, 204, 0.35); }
    .card .header .header-dropdown {
      position: absolute;
      top: 20px;
      right: 15px;
      list-style: none; }
      .card .header .header-dropdown .dropdown-menu li {
        display: block !important; }
      .card .header .header-dropdown li {
        display: inline-block; }
      .card .header .header-dropdown i {
        font-size: 20px;
        color: #999;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        -webkit-transition: all 0.5s;
        transition: all 0.5s; }
        .card .header .header-dropdown i:hover {
          color: #000; }
    .card .header h2 {
      margin: 0;
      font-size: 18px;
      font-weight: normal;
      color: #111; }
      .card .header h2 small {
        display: block;
        font-size: 12px;
        margin-top: 5px;
        color: #999;
        line-height: 15px; }
        .card .header h2 small a {
          font-weight: bold;
          color: #777; }
    .card .header .col-xs-12 h2 {
      margin-top: 5px; }
  .card .body {
    font-size: 14px;
    color: #555;
    padding: 20px; }
    .card .body .col-xs-1,
    .card .body .col-sm-1,
    .card .body .col-md-1,
    .card .body .col-lg-1 {
      margin-bottom: 20px; }
    .card .body .col-xs-2,
    .card .body .col-sm-2,
    .card .body .col-md-2,
    .card .body .col-lg-2 {
      margin-bottom: 20px; }
    .card .body .col-xs-3,
    .card .body .col-sm-3,
    .card .body .col-md-3,
    .card .body .col-lg-3 {
      margin-bottom: 20px; }
    .card .body .col-xs-4,
    .card .body .col-sm-4,
    .card .body .col-md-4,
    .card .body .col-lg-4 {
      margin-bottom: 20px; }
    .card .body .col-xs-5,
    .card .body .col-sm-5,
    .card .body .col-md-5,
    .card .body .col-lg-5 {
      margin-bottom: 20px; }
    .card .body .col-xs-6,
    .card .body .col-sm-6,
    .card .body .col-md-6,
    .card .body .col-lg-6 {
      margin-bottom: 20px; }
    .card .body .col-xs-7,
    .card .body .col-sm-7,
    .card .body .col-md-7,
    .card .body .col-lg-7 {
      margin-bottom: 20px; }
    .card .body .col-xs-8,
    .card .body .col-sm-8,
    .card .body .col-md-8,
    .card .body .col-lg-8 {
      margin-bottom: 20px; }
    .card .body .col-xs-9,
    .card .body .col-sm-9,
    .card .body .col-md-9,
    .card .body .col-lg-9 {
      margin-bottom: 20px; }
    .card .body .col-xs-10,
    .card .body .col-sm-10,
    .card .body .col-md-10,
    .card .body .col-lg-10 {
      margin-bottom: 20px; }
    .card .body .col-xs-11,
    .card .body .col-sm-11,
    .card .body .col-md-11,
    .card .body .col-lg-11 {
      margin-bottom: 20px; }
    .card .body .col-xs-12,
    .card .body .col-sm-12,
    .card .body .col-md-12,
    .card .body .col-lg-12 {
      margin-bottom: 20px; }

/* Infobox ===================================== */
.info-box {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  height: 80px;
  display: flex;
  cursor: default;
  background-color: #fff;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .info-box .icon {
    display: inline-block;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.12);
    width: 80px; }
    .info-box .icon i {
      color: #fff;
      font-size: 50px;
      line-height: 80px; }
    .info-box .icon .chart.chart-bar {
      height: 100%;
      line-height: 100px; }
      .info-box .icon .chart.chart-bar canvas {
        vertical-align: baseline !important; }
    .info-box .icon .chart.chart-pie {
      height: 100%;
      line-height: 123px; }
      .info-box .icon .chart.chart-pie canvas {
        vertical-align: baseline !important; }
    .info-box .icon .chart.chart-line {
      height: 100%;
      line-height: 115px; }
      .info-box .icon .chart.chart-line canvas {
        vertical-align: baseline !important; }
  .info-box .content {
    display: inline-block;
    padding: 7px 10px; }
    .info-box .content .text {
      font-size: 13px;
      margin-top: 11px;
      color: #555; }
    .info-box .content .number {
      font-weight: normal;
      font-size: 26px;
      margin-top: -4px;
      color: #555; }

.info-box.hover-zoom-effect .icon {
  overflow: hidden; }
  .info-box.hover-zoom-effect .icon i {
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease; }

.info-box.hover-zoom-effect:hover .icon i {
  opacity: 0.4;
  -moz-transform: rotate(-32deg) scale(1.4);
  -ms-transform: rotate(-32deg) scale(1.4);
  -o-transform: rotate(-32deg) scale(1.4);
  -webkit-transform: rotate(-32deg) scale(1.4);
  transform: rotate(-32deg) scale(1.4); }

.info-box.hover-expand-effect:after {
  background-color: rgba(0, 0, 0, 0.05);
  content: ".";
  position: absolute;
  left: 80px;
  top: 0;
  width: 0;
  height: 100%;
  color: transparent;
  -moz-transition: all 0.95s;
  -o-transition: all 0.95s;
  -webkit-transition: all 0.95s;
  transition: all 0.95s; }

.info-box.hover-expand-effect:hover:after {
  width: 100%; }

.info-box-2 {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  height: 80px;
  display: flex;
  cursor: default;
  background-color: #fff;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .info-box-2 .icon {
    display: inline-block;
    text-align: center;
    width: 80px; }
    .info-box-2 .icon i {
      color: #fff;
      font-size: 50px;
      line-height: 80px; }
  .info-box-2 .chart.chart-bar {
    height: 100%;
    line-height: 105px; }
    .info-box-2 .chart.chart-bar canvas {
      vertical-align: baseline !important; }
  .info-box-2 .chart.chart-pie {
    height: 100%;
    line-height: 123px; }
    .info-box-2 .chart.chart-pie canvas {
      vertical-align: baseline !important; }
  .info-box-2 .chart.chart-line {
    height: 100%;
    line-height: 115px; }
    .info-box-2 .chart.chart-line canvas {
      vertical-align: baseline !important; }
  .info-box-2 .content {
    display: inline-block;
    padding: 7px 10px; }
    .info-box-2 .content .text {
      font-size: 13px;
      margin-top: 11px;
      color: #555; }
    .info-box-2 .content .number {
      font-weight: normal;
      font-size: 26px;
      margin-top: -4px;
      color: #555; }

.info-box-2.hover-zoom-effect .icon {
  overflow: hidden; }
  .info-box-2.hover-zoom-effect .icon i {
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease; }

.info-box-2.hover-zoom-effect:hover .icon i {
  opacity: 0.4;
  -moz-transform: rotate(-32deg) scale(1.4);
  -ms-transform: rotate(-32deg) scale(1.4);
  -o-transform: rotate(-32deg) scale(1.4);
  -webkit-transform: rotate(-32deg) scale(1.4);
  transform: rotate(-32deg) scale(1.4); }

.info-box-2.hover-expand-effect:after {
  background-color: rgba(0, 0, 0, 0.05);
  content: ".";
  position: absolute;
  left: 0;
  top: 0;
  width: 0;
  height: 100%;
  color: transparent;
  -moz-transition: all 0.95s;
  -o-transition: all 0.95s;
  -webkit-transition: all 0.95s;
  transition: all 0.95s; }

.info-box-2.hover-expand-effect:hover:after {
  width: 100%; }

.info-box-3 {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  height: 80px;
  display: flex;
  cursor: default;
  background-color: #fff;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .info-box-3 .icon {
    position: absolute;
    right: 10px;
    bottom: 2px;
    text-align: center; }
    .info-box-3 .icon i {
      color: rgba(0, 0, 0, 0.15);
      font-size: 60px; }
  .info-box-3 .chart {
    margin-right: 5px; }
  .info-box-3 .chart.chart-bar {
    height: 100%;
    line-height: 50px; }
    .info-box-3 .chart.chart-bar canvas {
      vertical-align: baseline !important; }
  .info-box-3 .chart.chart-pie {
    height: 100%;
    line-height: 34px; }
    .info-box-3 .chart.chart-pie canvas {
      vertical-align: baseline !important; }
  .info-box-3 .chart.chart-line {
    height: 100%;
    line-height: 40px; }
    .info-box-3 .chart.chart-line canvas {
      vertical-align: baseline !important; }
  .info-box-3 .content {
    display: inline-block;
    padding: 7px 16px; }
    .info-box-3 .content .text {
      font-size: 13px;
      margin-top: 11px;
      color: #555; }
    .info-box-3 .content .number {
      font-weight: normal;
      font-size: 26px;
      margin-top: -4px;
      color: #555; }

.info-box-3.hover-zoom-effect .icon i {
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease; }

.info-box-3.hover-zoom-effect:hover .icon i {
  opacity: 0.4;
  -moz-transform: rotate(-32deg) scale(1.4);
  -ms-transform: rotate(-32deg) scale(1.4);
  -o-transform: rotate(-32deg) scale(1.4);
  -webkit-transform: rotate(-32deg) scale(1.4);
  transform: rotate(-32deg) scale(1.4); }

.info-box-3.hover-expand-effect:after {
  background-color: rgba(0, 0, 0, 0.05);
  content: ".";
  position: absolute;
  left: 0;
  top: 0;
  width: 0;
  height: 100%;
  color: transparent;
  -moz-transition: all 0.95s;
  -o-transition: all 0.95s;
  -webkit-transition: all 0.95s;
  transition: all 0.95s; }

.info-box-3.hover-expand-effect:hover:after {
  width: 100%; }

.info-box-4 {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  height: 80px;
  display: flex;
  cursor: default;
  background-color: #fff;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .info-box-4 .icon {
    position: absolute;
    right: 10px;
    bottom: 2px;
    text-align: center; }
    .info-box-4 .icon i {
      color: rgba(0, 0, 0, 0.15);
      font-size: 60px; }
  .info-box-4 .chart {
    margin-right: 5px; }
  .info-box-4 .chart.chart-bar {
    height: 100%;
    line-height: 50px; }
    .info-box-4 .chart.chart-bar canvas {
      vertical-align: baseline !important; }
  .info-box-4 .chart.chart-pie {
    height: 100%;
    line-height: 34px; }
    .info-box-4 .chart.chart-pie canvas {
      vertical-align: baseline !important; }
  .info-box-4 .chart.chart-line {
    height: 100%;
    line-height: 40px; }
    .info-box-4 .chart.chart-line canvas {
      vertical-align: baseline !important; }
  .info-box-4 .content {
    display: inline-block;
    padding: 7px 16px; }
    .info-box-4 .content .text {
      font-size: 13px;
      margin-top: 11px;
      color: #555; }
    .info-box-4 .content .number {
      font-weight: normal;
      font-size: 26px;
      margin-top: -4px;
      color: #555; }

.info-box-4.hover-zoom-effect .icon i {
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease; }

.info-box-4.hover-zoom-effect:hover .icon i {
  opacity: 0.4;
  -moz-transform: rotate(-32deg) scale(1.4);
  -ms-transform: rotate(-32deg) scale(1.4);
  -o-transform: rotate(-32deg) scale(1.4);
  -webkit-transform: rotate(-32deg) scale(1.4);
  transform: rotate(-32deg) scale(1.4); }

.info-box-4.hover-expand-effect:after {
  background-color: rgba(0, 0, 0, 0.05);
  content: ".";
  position: absolute;
  left: 0;
  top: 0;
  width: 0;
  height: 100%;
  color: transparent;
  -moz-transition: all 0.95s;
  -o-transition: all 0.95s;
  -webkit-transition: all 0.95s;
  transition: all 0.95s; }

.info-box-4.hover-expand-effect:hover:after {
  width: 100%; }

/* Alerts ====================================== */
.alert {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  box-shadow: none;
  border: none;
  color: #fff !important; }
  .alert .alert-link {
    color: #fff;
    text-decoration: underline;
    font-weight: bold; }

.alert-success {
  background-color: #2b982b; }

.alert-info {
  background-color: #00b0e4; }

.alert-warning {
  background-color: #ff9600 !important; }

.alert-danger {
  background-color: #fb483a !important; }

.alert-dismissible .close {
  color: #fff;
  opacity: 1;
  border: none;
  text-shadow: none; }

/* Dialogs (SweetAlert) ======================== */
.sweet-alert {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  -ms-border-radius: 0 !important;
  border-radius: 0 !important; }
  .sweet-alert p {
    font-size: 14px !important; }
  .sweet-alert .sa-input-error {
    top: 23px !important;
    right: 13px !important; }
  .sweet-alert h2 {
    font-size: 18px !important;
    margin: 0 0 5px 0 !important; }
  .sweet-alert button {
    font-size: 15px !important;
    -webkit-border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    -ms-border-radius: 0 !important;
    border-radius: 0 !important;
    padding: 5px 20px !important; }

/* Checkbox & Radio ============================ */
[type="checkbox"] + label {
  padding-left: 26px;
  height: 25px;
  line-height: 21px;
  font-size: 13px;
  font-weight: normal; }

[type="checkbox"]:checked + label:before {
  top: -4px;
  left: -2px;
  width: 11px;
  height: 19px; }

[type="checkbox"]:checked.chk-col-red + label:before {
  border-right: 2px solid #F44336;
  border-bottom: 2px solid #F44336; }

[type="checkbox"]:checked.chk-col-pink + label:before {
  border-right: 2px solid #E91E63;
  border-bottom: 2px solid #E91E63; }

[type="checkbox"]:checked.chk-col-purple + label:before {
  border-right: 2px solid #9C27B0;
  border-bottom: 2px solid #9C27B0; }

[type="checkbox"]:checked.chk-col-deep-purple + label:before {
  border-right: 2px solid #673AB7;
  border-bottom: 2px solid #673AB7; }

[type="checkbox"]:checked.chk-col-indigo + label:before {
  border-right: 2px solid #3F51B5;
  border-bottom: 2px solid #3F51B5; }

[type="checkbox"]:checked.chk-col-blue + label:before {
  border-right: 2px solid #2196F3;
  border-bottom: 2px solid #2196F3; }

[type="checkbox"]:checked.chk-col-light-blue + label:before {
  border-right: 2px solid #03A9F4;
  border-bottom: 2px solid #03A9F4; }

[type="checkbox"]:checked.chk-col-cyan + label:before {
  border-right: 2px solid #00BCD4;
  border-bottom: 2px solid #00BCD4; }

[type="checkbox"]:checked.chk-col-teal + label:before {
  border-right: 2px solid #009688;
  border-bottom: 2px solid #009688; }

[type="checkbox"]:checked.chk-col-green + label:before {
  border-right: 2px solid #4CAF50;
  border-bottom: 2px solid #4CAF50; }

[type="checkbox"]:checked.chk-col-light-green + label:before {
  border-right: 2px solid #8BC34A;
  border-bottom: 2px solid #8BC34A; }

[type="checkbox"]:checked.chk-col-lime + label:before {
  border-right: 2px solid #CDDC39;
  border-bottom: 2px solid #CDDC39; }

[type="checkbox"]:checked.chk-col-yellow + label:before {
  border-right: 2px solid #ffe821;
  border-bottom: 2px solid #ffe821; }

[type="checkbox"]:checked.chk-col-amber + label:before {
  border-right: 2px solid #FFC107;
  border-bottom: 2px solid #FFC107; }

[type="checkbox"]:checked.chk-col-orange + label:before {
  border-right: 2px solid #FF9800;
  border-bottom: 2px solid #FF9800; }

[type="checkbox"]:checked.chk-col-deep-orange + label:before {
  border-right: 2px solid #FF5722;
  border-bottom: 2px solid #FF5722; }

[type="checkbox"]:checked.chk-col-brown + label:before {
  border-right: 2px solid #795548;
  border-bottom: 2px solid #795548; }

[type="checkbox"]:checked.chk-col-grey + label:before {
  border-right: 2px solid #9E9E9E;
  border-bottom: 2px solid #9E9E9E; }

[type="checkbox"]:checked.chk-col-blue-grey + label:before {
  border-right: 2px solid #607D8B;
  border-bottom: 2px solid #607D8B; }

[type="checkbox"]:checked.chk-col-black + label:before {
  border-right: 2px solid #000000;
  border-bottom: 2px solid #000000; }

[type="checkbox"]:checked.chk-col-white + label:before {
  border-right: 2px solid #ffffff;
  border-bottom: 2px solid #ffffff; }

[type="checkbox"].filled-in:checked + label:after {
  top: 0;
  width: 20px;
  height: 20px;
  border: 2px solid #26a69a;
  background-color: #26a69a;
  z-index: 0; }

[type="checkbox"].filled-in:checked + label:before {
  border-right: 2px solid #fff !important;
  border-bottom: 2px solid #fff !important; }

[type="checkbox"].filled-in:checked.chk-col-red + label:after {
  border: 2px solid #F44336;
  background-color: #F44336; }

[type="checkbox"].filled-in:checked.chk-col-pink + label:after {
  border: 2px solid #E91E63;
  background-color: #E91E63; }

[type="checkbox"].filled-in:checked.chk-col-purple + label:after {
  border: 2px solid #9C27B0;
  background-color: #9C27B0; }

[type="checkbox"].filled-in:checked.chk-col-deep-purple + label:after {
  border: 2px solid #673AB7;
  background-color: #673AB7; }

[type="checkbox"].filled-in:checked.chk-col-indigo + label:after {
  border: 2px solid #3F51B5;
  background-color: #3F51B5; }

[type="checkbox"].filled-in:checked.chk-col-blue + label:after {
  border: 2px solid #2196F3;
  background-color: #2196F3; }

[type="checkbox"].filled-in:checked.chk-col-light-blue + label:after {
  border: 2px solid #03A9F4;
  background-color: #03A9F4; }

[type="checkbox"].filled-in:checked.chk-col-cyan + label:after {
  border: 2px solid #00BCD4;
  background-color: #00BCD4; }

[type="checkbox"].filled-in:checked.chk-col-teal + label:after {
  border: 2px solid #009688;
  background-color: #009688; }

[type="checkbox"].filled-in:checked.chk-col-green + label:after {
  border: 2px solid #4CAF50;
  background-color: #4CAF50; }

[type="checkbox"].filled-in:checked.chk-col-light-green + label:after {
  border: 2px solid #8BC34A;
  background-color: #8BC34A; }

[type="checkbox"].filled-in:checked.chk-col-lime + label:after {
  border: 2px solid #CDDC39;
  background-color: #CDDC39; }

[type="checkbox"].filled-in:checked.chk-col-yellow + label:after {
  border: 2px solid #ffe821;
  background-color: #ffe821; }

[type="checkbox"].filled-in:checked.chk-col-amber + label:after {
  border: 2px solid #FFC107;
  background-color: #FFC107; }

[type="checkbox"].filled-in:checked.chk-col-orange + label:after {
  border: 2px solid #FF9800;
  background-color: #FF9800; }

[type="checkbox"].filled-in:checked.chk-col-deep-orange + label:after {
  border: 2px solid #FF5722;
  background-color: #FF5722; }

[type="checkbox"].filled-in:checked.chk-col-brown + label:after {
  border: 2px solid #795548;
  background-color: #795548; }

[type="checkbox"].filled-in:checked.chk-col-grey + label:after {
  border: 2px solid #9E9E9E;
  background-color: #9E9E9E; }

[type="checkbox"].filled-in:checked.chk-col-blue-grey + label:after {
  border: 2px solid #607D8B;
  background-color: #607D8B; }

[type="checkbox"].filled-in:checked.chk-col-black + label:after {
  border: 2px solid #000000;
  background-color: #000000; }

[type="checkbox"].filled-in:checked.chk-col-white + label:after {
  border: 2px solid #ffffff;
  background-color: #ffffff; }

[type="radio"]:not(:checked) + label {
  padding-left: 26px;
  height: 25px;
  line-height: 25px;
  font-size: 13px;
  font-weight: normal; }

[type="radio"]:checked + label {
  padding-left: 26px;
  height: 25px;
  line-height: 25px;
  font-size: 13px;
  font-weight: normal; }

[type="radio"].radio-col-red:checked + label:after {
  background-color: #F44336;
  border-color: #F44336; }

[type="radio"].radio-col-pink:checked + label:after {
  background-color: #E91E63;
  border-color: #E91E63; }

[type="radio"].radio-col-purple:checked + label:after {
  background-color: #9C27B0;
  border-color: #9C27B0; }

[type="radio"].radio-col-deep-purple:checked + label:after {
  background-color: #673AB7;
  border-color: #673AB7; }

[type="radio"].radio-col-indigo:checked + label:after {
  background-color: #3F51B5;
  border-color: #3F51B5; }

[type="radio"].radio-col-blue:checked + label:after {
  background-color: #2196F3;
  border-color: #2196F3; }

[type="radio"].radio-col-light-blue:checked + label:after {
  background-color: #03A9F4;
  border-color: #03A9F4; }

[type="radio"].radio-col-cyan:checked + label:after {
  background-color: #00BCD4;
  border-color: #00BCD4; }

[type="radio"].radio-col-teal:checked + label:after {
  background-color: #009688;
  border-color: #009688; }

[type="radio"].radio-col-green:checked + label:after {
  background-color: #4CAF50;
  border-color: #4CAF50; }

[type="radio"].radio-col-light-green:checked + label:after {
  background-color: #8BC34A;
  border-color: #8BC34A; }

[type="radio"].radio-col-lime:checked + label:after {
  background-color: #CDDC39;
  border-color: #CDDC39; }

[type="radio"].radio-col-yellow:checked + label:after {
  background-color: #ffe821;
  border-color: #ffe821; }

[type="radio"].radio-col-amber:checked + label:after {
  background-color: #FFC107;
  border-color: #FFC107; }

[type="radio"].radio-col-orange:checked + label:after {
  background-color: #FF9800;
  border-color: #FF9800; }

[type="radio"].radio-col-deep-orange:checked + label:after {
  background-color: #FF5722;
  border-color: #FF5722; }

[type="radio"].radio-col-brown:checked + label:after {
  background-color: #795548;
  border-color: #795548; }

[type="radio"].radio-col-grey:checked + label:after {
  background-color: #9E9E9E;
  border-color: #9E9E9E; }

[type="radio"].radio-col-blue-grey:checked + label:after {
  background-color: #607D8B;
  border-color: #607D8B; }

[type="radio"].radio-col-black:checked + label:after {
  background-color: #000000;
  border-color: #000000; }

[type="radio"].radio-col-white:checked + label:after {
  background-color: #ffffff;
  border-color: #ffffff; }

[type="radio"].with-gap.radio-col-red:checked + label:before {
  border: 2px solid #F44336; }

[type="radio"].with-gap.radio-col-red:checked + label:after {
  background-color: #F44336;
  border: 2px solid #F44336; }

[type="radio"].with-gap.radio-col-pink:checked + label:before {
  border: 2px solid #E91E63; }

[type="radio"].with-gap.radio-col-pink:checked + label:after {
  background-color: #E91E63;
  border: 2px solid #E91E63; }

[type="radio"].with-gap.radio-col-purple:checked + label:before {
  border: 2px solid #9C27B0; }

[type="radio"].with-gap.radio-col-purple:checked + label:after {
  background-color: #9C27B0;
  border: 2px solid #9C27B0; }

[type="radio"].with-gap.radio-col-deep-purple:checked + label:before {
  border: 2px solid #673AB7; }

[type="radio"].with-gap.radio-col-deep-purple:checked + label:after {
  background-color: #673AB7;
  border: 2px solid #673AB7; }

[type="radio"].with-gap.radio-col-indigo:checked + label:before {
  border: 2px solid #3F51B5; }

[type="radio"].with-gap.radio-col-indigo:checked + label:after {
  background-color: #3F51B5;
  border: 2px solid #3F51B5; }

[type="radio"].with-gap.radio-col-blue:checked + label:before {
  border: 2px solid #2196F3; }

[type="radio"].with-gap.radio-col-blue:checked + label:after {
  background-color: #2196F3;
  border: 2px solid #2196F3; }

[type="radio"].with-gap.radio-col-light-blue:checked + label:before {
  border: 2px solid #03A9F4; }

[type="radio"].with-gap.radio-col-light-blue:checked + label:after {
  background-color: #03A9F4;
  border: 2px solid #03A9F4; }

[type="radio"].with-gap.radio-col-cyan:checked + label:before {
  border: 2px solid #00BCD4; }

[type="radio"].with-gap.radio-col-cyan:checked + label:after {
  background-color: #00BCD4;
  border: 2px solid #00BCD4; }

[type="radio"].with-gap.radio-col-teal:checked + label:before {
  border: 2px solid #009688; }

[type="radio"].with-gap.radio-col-teal:checked + label:after {
  background-color: #009688;
  border: 2px solid #009688; }

[type="radio"].with-gap.radio-col-green:checked + label:before {
  border: 2px solid #4CAF50; }

[type="radio"].with-gap.radio-col-green:checked + label:after {
  background-color: #4CAF50;
  border: 2px solid #4CAF50; }

[type="radio"].with-gap.radio-col-light-green:checked + label:before {
  border: 2px solid #8BC34A; }

[type="radio"].with-gap.radio-col-light-green:checked + label:after {
  background-color: #8BC34A;
  border: 2px solid #8BC34A; }

[type="radio"].with-gap.radio-col-lime:checked + label:before {
  border: 2px solid #CDDC39; }

[type="radio"].with-gap.radio-col-lime:checked + label:after {
  background-color: #CDDC39;
  border: 2px solid #CDDC39; }

[type="radio"].with-gap.radio-col-yellow:checked + label:before {
  border: 2px solid #ffe821; }

[type="radio"].with-gap.radio-col-yellow:checked + label:after {
  background-color: #ffe821;
  border: 2px solid #ffe821; }

[type="radio"].with-gap.radio-col-amber:checked + label:before {
  border: 2px solid #FFC107; }

[type="radio"].with-gap.radio-col-amber:checked + label:after {
  background-color: #FFC107;
  border: 2px solid #FFC107; }

[type="radio"].with-gap.radio-col-orange:checked + label:before {
  border: 2px solid #FF9800; }

[type="radio"].with-gap.radio-col-orange:checked + label:after {
  background-color: #FF9800;
  border: 2px solid #FF9800; }

[type="radio"].with-gap.radio-col-deep-orange:checked + label:before {
  border: 2px solid #FF5722; }

[type="radio"].with-gap.radio-col-deep-orange:checked + label:after {
  background-color: #FF5722;
  border: 2px solid #FF5722; }

[type="radio"].with-gap.radio-col-brown:checked + label:before {
  border: 2px solid #795548; }

[type="radio"].with-gap.radio-col-brown:checked + label:after {
  background-color: #795548;
  border: 2px solid #795548; }

[type="radio"].with-gap.radio-col-grey:checked + label:before {
  border: 2px solid #9E9E9E; }

[type="radio"].with-gap.radio-col-grey:checked + label:after {
  background-color: #9E9E9E;
  border: 2px solid #9E9E9E; }

[type="radio"].with-gap.radio-col-blue-grey:checked + label:before {
  border: 2px solid #607D8B; }

[type="radio"].with-gap.radio-col-blue-grey:checked + label:after {
  background-color: #607D8B;
  border: 2px solid #607D8B; }

[type="radio"].with-gap.radio-col-black:checked + label:before {
  border: 2px solid #000000; }

[type="radio"].with-gap.radio-col-black:checked + label:after {
  background-color: #000000;
  border: 2px solid #000000; }

[type="radio"].with-gap.radio-col-white:checked + label:before {
  border: 2px solid #ffffff; }

[type="radio"].with-gap.radio-col-white:checked + label:after {
  background-color: #ffffff;
  border: 2px solid #ffffff; }

/* Switch ====================================== */
.switch label {
  font-weight: normal;
  font-size: 13px; }
  .switch label .lever {
    margin: 0 14px; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-red:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(244, 67, 54, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-red {
    background-color: rgba(244, 67, 54, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-red:after {
      background-color: #F44336; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-pink:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-pink {
    background-color: rgba(233, 30, 99, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-pink:after {
      background-color: #E91E63; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-purple:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(156, 39, 176, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-purple {
    background-color: rgba(156, 39, 176, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-purple:after {
      background-color: #9C27B0; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-deep-purple:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-deep-purple {
    background-color: rgba(103, 58, 183, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-deep-purple:after {
      background-color: #673AB7; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-indigo:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-indigo {
    background-color: rgba(63, 81, 181, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-indigo:after {
      background-color: #3F51B5; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-blue:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(33, 150, 243, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-blue {
    background-color: rgba(33, 150, 243, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-blue:after {
      background-color: #2196F3; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-light-blue:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-light-blue {
    background-color: rgba(3, 169, 244, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-light-blue:after {
      background-color: #03A9F4; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-cyan:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-cyan {
    background-color: rgba(0, 188, 212, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-cyan:after {
      background-color: #00BCD4; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-teal:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-teal {
    background-color: rgba(0, 150, 136, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-teal:after {
      background-color: #009688; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-green:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(76, 175, 80, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-green {
    background-color: rgba(76, 175, 80, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-green:after {
      background-color: #4CAF50; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-light-green:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-light-green {
    background-color: rgba(139, 195, 74, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-light-green:after {
      background-color: #8BC34A; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-lime:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-lime {
    background-color: rgba(205, 220, 57, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-lime:after {
      background-color: #CDDC39; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-yellow:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-yellow {
    background-color: rgba(255, 232, 33, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-yellow:after {
      background-color: #ffe821; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-amber:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-amber {
    background-color: rgba(255, 193, 7, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-amber:after {
      background-color: #FFC107; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-orange:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-orange {
    background-color: rgba(255, 152, 0, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-orange:after {
      background-color: #FF9800; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-deep-orange:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-deep-orange {
    background-color: rgba(255, 87, 34, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-deep-orange:after {
      background-color: #FF5722; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-brown:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-brown {
    background-color: rgba(121, 85, 72, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-brown:after {
      background-color: #795548; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-grey:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-grey {
    background-color: rgba(158, 158, 158, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-grey:after {
      background-color: #9E9E9E; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-blue-grey:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-blue-grey {
    background-color: rgba(96, 125, 139, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-blue-grey:after {
      background-color: #607D8B; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-black:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-black {
    background-color: rgba(0, 0, 0, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-black:after {
      background-color: #000000; }
  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-white:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1); }
  .switch label input[type=checkbox]:checked + .lever.switch-col-white {
    background-color: rgba(255, 255, 255, 0.5); }
    .switch label input[type=checkbox]:checked + .lever.switch-col-white:after {
      background-color: #ffffff; }

/* DateTime Picker ============================= */
.dtp div.dtp-date,
.dtp div.dtp-time {
  background: #007d72; }

.dtp > .dtp-content > .dtp-date-view > header.dtp-header {
  background: #009688; }

.dtp .dtp-buttons .dtp-btn-ok {
  margin-left: 10px; }

.dtp .dtp-buttons .dtp-btn-clear {
  margin-right: 10px !important; }

.dtp .p10 > a {
  color: #fff; }

.dtp div.dtp-actual-year {
  font-size: 1.5em;
  color: #ffffff; }

.dtp table.dtp-picker-days tr td a.selected {
  background: #007d72;
  color: #fff; }

.datepicker.datepicker-dropdown.dropdown-menu {
  margin-top: 0 !important; }

.datepicker table tr td.active {
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#009688), to(#009688));
  background-image: -webkit-linear-gradient(to bottom, #009688, #009688);
  background-image: -o-linear-gradient(to bottom, #009688, #009688);
  background-image: linear-gradient(to bottom, #009688, #009688);
  border: none; }
  .datepicker table tr td.active:hover.active {
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#009688), to(#009688));
    background-image: -webkit-linear-gradient(to bottom, #009688, #009688);
    background-image: -o-linear-gradient(to bottom, #009688, #009688);
    background-image: linear-gradient(to bottom, #009688, #009688);
    border: none; }

.datepicker table tr td.selected {
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#009688), to(#009688));
  background-image: -webkit-linear-gradient(to bottom, #009688, #009688);
  background-image: -o-linear-gradient(to bottom, #009688, #009688);
  background-image: linear-gradient(to bottom, #009688, #009688);
  border: none; }

.datepicker table tr td span.active {
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#009688), to(#009688));
  background-image: -webkit-linear-gradient(to bottom, #009688, #009688);
  background-image: -o-linear-gradient(to bottom, #009688, #009688);
  background-image: linear-gradient(to bottom, #009688, #009688);
  border: none; }
  .datepicker table tr td span.active:hover.active {
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#009688), to(#009688));
    background-image: -webkit-linear-gradient(to bottom, #009688, #009688);
    background-image: -o-linear-gradient(to bottom, #009688, #009688);
    background-image: linear-gradient(to bottom, #009688, #009688);
    border: none; }

.datepicker table.table-condensed > tbody > tr > td {
  padding: 6px 9px; }

.input-daterange .form-control {
  text-align: left; }

.input-daterange .input-group-addon {
  padding-right: 10px !important; }

/* Bootstrap Select ============================ */
.bootstrap-select {
  box-shadow: none !important;
  border-bottom: 1px solid #ddd !important;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .bootstrap-select .dropdown-toggle:focus, .bootstrap-select .dropdown-toggle:active {
    outline: none !important; }
  .bootstrap-select .bs-searchbox,
  .bootstrap-select .bs-actionsbox,
  .bootstrap-select .bs-donebutton {
    padding: 0 0 5px 0;
    border-bottom: 1px solid #e9e9e9; }
    .bootstrap-select .bs-searchbox .form-control,
    .bootstrap-select .bs-actionsbox .form-control,
    .bootstrap-select .bs-donebutton .form-control {
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      border-radius: 0;
      -webkit-box-shadow: none !important;
      -moz-box-shadow: none !important;
      -ms-box-shadow: none !important;
      box-shadow: none !important;
      border: none;
      margin-left: 30px; }
  .bootstrap-select .bs-searchbox {
    position: relative; }
    .bootstrap-select .bs-searchbox:after {
      content: '\E8B6';
      font-family: 'Material Icons';
      position: absolute;
      top: 0;
      left: 10px;
      font-size: 25px; }
  .bootstrap-select ul.dropdown-menu {
    margin-top: 0 !important; }
  .bootstrap-select .dropdown-menu li.selected a {
    background-color: #eee !important;
    color: #555 !important; }
  .bootstrap-select .dropdown-menu .active a {
    background-color: transparent;
    color: #333 !important; }
  .bootstrap-select .dropdown-menu .notify {
    background-color: #F44336 !important;
    color: #fff !important;
    border: none !important; }

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {
  margin-top: 9px; }

/* Tooltip & Popovers ========================== */
.tooltip {
  font-size: 13px; }
  .tooltip .tooltip-inner {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }

.popover {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  border: 1px solid rgba(0, 0, 0, 0.08); }
  .popover .popover-title {
    font-weight: bold;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    background-color: #e9e9e9;
    border-bottom: 1px solid #ddd; }
  .popover .popover-content {
    font-size: 13px;
    color: #777;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }

/* Nav Tabs ==================================== */
.nav-tabs {
  border-bottom: 2px solid #eee; }
  .nav-tabs > li {
    position: relative;
    top: 3px;
    left: -2px; }
    .nav-tabs > li > a {
      border: none !important;
      color: #999 !important;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      border-radius: 0; }
      .nav-tabs > li > a:hover, .nav-tabs > li > a:active, .nav-tabs > li > a:focus {
        background-color: transparent !important; }
      .nav-tabs > li > a:before {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 0;
        border-bottom: 2px solid #2196F3;
        bottom: 2px;
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -moz-transition: 0.1s ease-in;
        -o-transition: 0.1s ease-in;
        -webkit-transition: 0.1s ease-in;
        transition: 0.1s ease-in; }
      .nav-tabs > li > a .material-icons {
        position: relative;
        top: 7px;
        margin-bottom: 8px; }
  .nav-tabs li.active a {
    color: #222 !important; }
    .nav-tabs li.active a:hover, .nav-tabs li.active a:active, .nav-tabs li.active a:focus {
      background-color: transparent !important; }
    .nav-tabs li.active a:before {
      -moz-transform: scaleX(1);
      -ms-transform: scaleX(1);
      -o-transform: scaleX(1);
      -webkit-transform: scaleX(1);
      transform: scaleX(1); }
  .nav-tabs + .tab-content {
    padding: 15px 0; }

.nav-tabs.tab-col-red > li > a:before {
  border-bottom: 2px solid #F44336; }

.nav-tabs.tab-col-pink > li > a:before {
  border-bottom: 2px solid #E91E63; }

.nav-tabs.tab-col-purple > li > a:before {
  border-bottom: 2px solid #9C27B0; }

.nav-tabs.tab-col-deep-purple > li > a:before {
  border-bottom: 2px solid #673AB7; }

.nav-tabs.tab-col-indigo > li > a:before {
  border-bottom: 2px solid #3F51B5; }

.nav-tabs.tab-col-blue > li > a:before {
  border-bottom: 2px solid #2196F3; }

.nav-tabs.tab-col-light-blue > li > a:before {
  border-bottom: 2px solid #03A9F4; }

.nav-tabs.tab-col-cyan > li > a:before {
  border-bottom: 2px solid #00BCD4; }

.nav-tabs.tab-col-teal > li > a:before {
  border-bottom: 2px solid #009688; }

.nav-tabs.tab-col-green > li > a:before {
  border-bottom: 2px solid #4CAF50; }

.nav-tabs.tab-col-light-green > li > a:before {
  border-bottom: 2px solid #8BC34A; }

.nav-tabs.tab-col-lime > li > a:before {
  border-bottom: 2px solid #CDDC39; }

.nav-tabs.tab-col-yellow > li > a:before {
  border-bottom: 2px solid #ffe821; }

.nav-tabs.tab-col-amber > li > a:before {
  border-bottom: 2px solid #FFC107; }

.nav-tabs.tab-col-orange > li > a:before {
  border-bottom: 2px solid #FF9800; }

.nav-tabs.tab-col-deep-orange > li > a:before {
  border-bottom: 2px solid #FF5722; }

.nav-tabs.tab-col-brown > li > a:before {
  border-bottom: 2px solid #795548; }

.nav-tabs.tab-col-grey > li > a:before {
  border-bottom: 2px solid #9E9E9E; }

.nav-tabs.tab-col-blue-grey > li > a:before {
  border-bottom: 2px solid #607D8B; }

.nav-tabs.tab-col-black > li > a:before {
  border-bottom: 2px solid #000000; }

.nav-tabs.tab-col-white > li > a:before {
  border-bottom: 2px solid #ffffff; }

/* Thumbnails ================================== */
.thumbnail {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .thumbnail p:not(button) {
    color: #999999;
    font-size: 14px; }
  .thumbnail h3 {
    font-weight: bold;
    font-size: 17px; }

/* Modals ====================================== */
.modal .modal-header {
  border: none;
  padding: 25px 25px 5px 25px; }
  .modal .modal-header .modal-title {
    font-weight: bold;
    font-size: 16px; }

.modal .modal-content {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.31) !important;
  border: none; }
  .modal .modal-content .modal-body {
    color: #777;
    padding: 15px 25px; }

.modal .modal-footer {
  border: none; }

.modal-col-red {
  background-color: #F44336; }
  .modal-col-red .modal-body,
  .modal-col-red .modal-title {
    color: #fff !important; }
  .modal-col-red .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-red .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-red .modal-footer .btn-link:hover, .modal-col-red .modal-footer .btn-link:active, .modal-col-red .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-pink {
  background-color: #E91E63; }
  .modal-col-pink .modal-body,
  .modal-col-pink .modal-title {
    color: #fff !important; }
  .modal-col-pink .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-pink .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-pink .modal-footer .btn-link:hover, .modal-col-pink .modal-footer .btn-link:active, .modal-col-pink .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-purple {
  background-color: #9C27B0; }
  .modal-col-purple .modal-body,
  .modal-col-purple .modal-title {
    color: #fff !important; }
  .modal-col-purple .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-purple .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-purple .modal-footer .btn-link:hover, .modal-col-purple .modal-footer .btn-link:active, .modal-col-purple .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-deep-purple {
  background-color: #673AB7; }
  .modal-col-deep-purple .modal-body,
  .modal-col-deep-purple .modal-title {
    color: #fff !important; }
  .modal-col-deep-purple .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-deep-purple .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-deep-purple .modal-footer .btn-link:hover, .modal-col-deep-purple .modal-footer .btn-link:active, .modal-col-deep-purple .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-indigo {
  background-color: #3F51B5; }
  .modal-col-indigo .modal-body,
  .modal-col-indigo .modal-title {
    color: #fff !important; }
  .modal-col-indigo .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-indigo .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-indigo .modal-footer .btn-link:hover, .modal-col-indigo .modal-footer .btn-link:active, .modal-col-indigo .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-blue {
  background-color: #2196F3; }
  .modal-col-blue .modal-body,
  .modal-col-blue .modal-title {
    color: #fff !important; }
  .modal-col-blue .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-blue .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-blue .modal-footer .btn-link:hover, .modal-col-blue .modal-footer .btn-link:active, .modal-col-blue .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-light-blue {
  background-color: #03A9F4; }
  .modal-col-light-blue .modal-body,
  .modal-col-light-blue .modal-title {
    color: #fff !important; }
  .modal-col-light-blue .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-light-blue .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-light-blue .modal-footer .btn-link:hover, .modal-col-light-blue .modal-footer .btn-link:active, .modal-col-light-blue .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-cyan {
  background-color: #00BCD4; }
  .modal-col-cyan .modal-body,
  .modal-col-cyan .modal-title {
    color: #fff !important; }
  .modal-col-cyan .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-cyan .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-cyan .modal-footer .btn-link:hover, .modal-col-cyan .modal-footer .btn-link:active, .modal-col-cyan .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-teal {
  background-color: #009688; }
  .modal-col-teal .modal-body,
  .modal-col-teal .modal-title {
    color: #fff !important; }
  .modal-col-teal .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-teal .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-teal .modal-footer .btn-link:hover, .modal-col-teal .modal-footer .btn-link:active, .modal-col-teal .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-green {
  background-color: #4CAF50; }
  .modal-col-green .modal-body,
  .modal-col-green .modal-title {
    color: #fff !important; }
  .modal-col-green .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-green .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-green .modal-footer .btn-link:hover, .modal-col-green .modal-footer .btn-link:active, .modal-col-green .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-light-green {
  background-color: #8BC34A; }
  .modal-col-light-green .modal-body,
  .modal-col-light-green .modal-title {
    color: #fff !important; }
  .modal-col-light-green .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-light-green .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-light-green .modal-footer .btn-link:hover, .modal-col-light-green .modal-footer .btn-link:active, .modal-col-light-green .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-lime {
  background-color: #CDDC39; }
  .modal-col-lime .modal-body,
  .modal-col-lime .modal-title {
    color: #fff !important; }
  .modal-col-lime .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-lime .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-lime .modal-footer .btn-link:hover, .modal-col-lime .modal-footer .btn-link:active, .modal-col-lime .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-yellow {
  background-color: #ffe821; }
  .modal-col-yellow .modal-body,
  .modal-col-yellow .modal-title {
    color: #fff !important; }
  .modal-col-yellow .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-yellow .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-yellow .modal-footer .btn-link:hover, .modal-col-yellow .modal-footer .btn-link:active, .modal-col-yellow .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-amber {
  background-color: #FFC107; }
  .modal-col-amber .modal-body,
  .modal-col-amber .modal-title {
    color: #fff !important; }
  .modal-col-amber .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-amber .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-amber .modal-footer .btn-link:hover, .modal-col-amber .modal-footer .btn-link:active, .modal-col-amber .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-orange {
  background-color: #FF9800; }
  .modal-col-orange .modal-body,
  .modal-col-orange .modal-title {
    color: #fff !important; }
  .modal-col-orange .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-orange .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-orange .modal-footer .btn-link:hover, .modal-col-orange .modal-footer .btn-link:active, .modal-col-orange .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-deep-orange {
  background-color: #FF5722; }
  .modal-col-deep-orange .modal-body,
  .modal-col-deep-orange .modal-title {
    color: #fff !important; }
  .modal-col-deep-orange .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-deep-orange .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-deep-orange .modal-footer .btn-link:hover, .modal-col-deep-orange .modal-footer .btn-link:active, .modal-col-deep-orange .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-brown {
  background-color: #795548; }
  .modal-col-brown .modal-body,
  .modal-col-brown .modal-title {
    color: #fff !important; }
  .modal-col-brown .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-brown .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-brown .modal-footer .btn-link:hover, .modal-col-brown .modal-footer .btn-link:active, .modal-col-brown .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-grey {
  background-color: #9E9E9E; }
  .modal-col-grey .modal-body,
  .modal-col-grey .modal-title {
    color: #fff !important; }
  .modal-col-grey .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-grey .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-grey .modal-footer .btn-link:hover, .modal-col-grey .modal-footer .btn-link:active, .modal-col-grey .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-blue-grey {
  background-color: #607D8B; }
  .modal-col-blue-grey .modal-body,
  .modal-col-blue-grey .modal-title {
    color: #fff !important; }
  .modal-col-blue-grey .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-blue-grey .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-blue-grey .modal-footer .btn-link:hover, .modal-col-blue-grey .modal-footer .btn-link:active, .modal-col-blue-grey .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-black {
  background-color: #000000; }
  .modal-col-black .modal-body,
  .modal-col-black .modal-title {
    color: #fff !important; }
  .modal-col-black .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-black .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-black .modal-footer .btn-link:hover, .modal-col-black .modal-footer .btn-link:active, .modal-col-black .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

.modal-col-white {
  background-color: #ffffff; }
  .modal-col-white .modal-body,
  .modal-col-white .modal-title {
    color: #fff !important; }
  .modal-col-white .modal-footer {
    background-color: rgba(0, 0, 0, 0.12); }
    .modal-col-white .modal-footer .btn-link {
      color: #fff !important; }
      .modal-col-white .modal-footer .btn-link:hover, .modal-col-white .modal-footer .btn-link:active, .modal-col-white .modal-footer .btn-link:focus {
        background-color: rgba(0, 0, 0, 0.12); }

/* Labels ====================================== */
.label {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }

.label-primary {
  background-color: #1f91f3; }

.label-success {
  background-color: #2b982b; }

.label-info {
  background-color: #00b0e4; }

.label-warning {
  background-color: #ff9600; }

.label-danger {
  background-color: #fb483a; }

/* Collapse ==================================== */
.collapse .well,
.collapse.in .well,
.collapsing .well {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  margin-bottom: 0; }

/* Tables ====================================== */
.table tbody tr td, .table tbody tr th {
  padding: 10px;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee; }

.table tbody tr.primary td, .table tbody tr.primary th {
  background-color: #1f91f3;
  color: #fff; }

.table tbody tr.success td, .table tbody tr.success th {
  background-color: #2b982b;
  color: #fff; }

.table tbody tr.info td, .table tbody tr.info th {
  background-color: #00b0e4;
  color: #fff; }

.table tbody tr.warning td, .table tbody tr.warning th {
  background-color: #ff9600;
  color: #fff; }

.table tbody tr.danger td, .table tbody tr.danger th {
  background-color: #fb483a;
  color: #fff; }

.table thead tr th {
  padding: 10px;
  border-bottom: 1px solid #eee; }

.table-bordered {
  border-top: 1px solid #eee; }
  .table-bordered tbody tr td, .table-bordered tbody tr th {
    padding: 10px;
    border: 1px solid #eee; }
  .table-bordered thead tr th {
    padding: 10px;
    border: 1px solid #eee; }

/* Panel ======================================= */
.panel-group .panel-col-red {
  border: 1px solid #F44336; }
  .panel-group .panel-col-red .panel-title {
    background-color: #F44336 !important;
    color: #fff; }
  .panel-group .panel-col-red .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-pink {
  border: 1px solid #E91E63; }
  .panel-group .panel-col-pink .panel-title {
    background-color: #E91E63 !important;
    color: #fff; }
  .panel-group .panel-col-pink .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-purple {
  border: 1px solid #9C27B0; }
  .panel-group .panel-col-purple .panel-title {
    background-color: #9C27B0 !important;
    color: #fff; }
  .panel-group .panel-col-purple .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-deep-purple {
  border: 1px solid #673AB7; }
  .panel-group .panel-col-deep-purple .panel-title {
    background-color: #673AB7 !important;
    color: #fff; }
  .panel-group .panel-col-deep-purple .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-indigo {
  border: 1px solid #3F51B5; }
  .panel-group .panel-col-indigo .panel-title {
    background-color: #3F51B5 !important;
    color: #fff; }
  .panel-group .panel-col-indigo .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-blue {
  border: 1px solid #2196F3; }
  .panel-group .panel-col-blue .panel-title {
    background-color: #2196F3 !important;
    color: #fff; }
  .panel-group .panel-col-blue .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-light-blue {
  border: 1px solid #03A9F4; }
  .panel-group .panel-col-light-blue .panel-title {
    background-color: #03A9F4 !important;
    color: #fff; }
  .panel-group .panel-col-light-blue .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-cyan {
  border: 1px solid #00BCD4; }
  .panel-group .panel-col-cyan .panel-title {
    background-color: #00BCD4 !important;
    color: #fff; }
  .panel-group .panel-col-cyan .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-teal {
  border: 1px solid #009688; }
  .panel-group .panel-col-teal .panel-title {
    background-color: #009688 !important;
    color: #fff; }
  .panel-group .panel-col-teal .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-green {
  border: 1px solid #4CAF50; }
  .panel-group .panel-col-green .panel-title {
    background-color: #4CAF50 !important;
    color: #fff; }
  .panel-group .panel-col-green .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-light-green {
  border: 1px solid #8BC34A; }
  .panel-group .panel-col-light-green .panel-title {
    background-color: #8BC34A !important;
    color: #fff; }
  .panel-group .panel-col-light-green .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-lime {
  border: 1px solid #CDDC39; }
  .panel-group .panel-col-lime .panel-title {
    background-color: #CDDC39 !important;
    color: #fff; }
  .panel-group .panel-col-lime .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-yellow {
  border: 1px solid #ffe821; }
  .panel-group .panel-col-yellow .panel-title {
    background-color: #ffe821 !important;
    color: #fff; }
  .panel-group .panel-col-yellow .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-amber {
  border: 1px solid #FFC107; }
  .panel-group .panel-col-amber .panel-title {
    background-color: #FFC107 !important;
    color: #fff; }
  .panel-group .panel-col-amber .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-orange {
  border: 1px solid #FF9800; }
  .panel-group .panel-col-orange .panel-title {
    background-color: #FF9800 !important;
    color: #fff; }
  .panel-group .panel-col-orange .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-deep-orange {
  border: 1px solid #FF5722; }
  .panel-group .panel-col-deep-orange .panel-title {
    background-color: #FF5722 !important;
    color: #fff; }
  .panel-group .panel-col-deep-orange .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-brown {
  border: 1px solid #795548; }
  .panel-group .panel-col-brown .panel-title {
    background-color: #795548 !important;
    color: #fff; }
  .panel-group .panel-col-brown .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-grey {
  border: 1px solid #9E9E9E; }
  .panel-group .panel-col-grey .panel-title {
    background-color: #9E9E9E !important;
    color: #fff; }
  .panel-group .panel-col-grey .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-blue-grey {
  border: 1px solid #607D8B; }
  .panel-group .panel-col-blue-grey .panel-title {
    background-color: #607D8B !important;
    color: #fff; }
  .panel-group .panel-col-blue-grey .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-black {
  border: 1px solid #000000; }
  .panel-group .panel-col-black .panel-title {
    background-color: #000000 !important;
    color: #fff; }
  .panel-group .panel-col-black .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel-col-white {
  border: 1px solid #ffffff; }
  .panel-group .panel-col-white .panel-title {
    background-color: #ffffff !important;
    color: #fff; }
  .panel-group .panel-col-white .panel-body {
    border-top-color: transparent !important; }

.panel-group .panel {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .panel-group .panel .panel-title .material-icons {
    float: left;
    line-height: 16px;
    margin-right: 8px; }
  .panel-group .panel .panel-heading {
    padding: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
    .panel-group .panel .panel-heading a {
      display: block;
      padding: 10px 15px; }
      .panel-group .panel .panel-heading a:hover, .panel-group .panel .panel-heading a:focus, .panel-group .panel .panel-heading a:active {
        text-decoration: none; }
  .panel-group .panel .panel-body {
    color: #555; }

.panel-group .panel-primary {
  border: 1px solid #1f91f3; }
  .panel-group .panel-primary .panel-title {
    background-color: #1f91f3; }

.panel-group .panel-success {
  border: 1px solid #2b982b; }
  .panel-group .panel-success .panel-title {
    background-color: #2b982b;
    color: #fff; }

.panel-group .panel-warning {
  border: 1px solid #ff9600; }
  .panel-group .panel-warning .panel-title {
    background-color: #ff9600;
    color: #fff; }

.panel-group .panel-danger {
  border: 1px solid #fb483a; }
  .panel-group .panel-danger .panel-title {
    background-color: #fb483a;
    color: #fff; }

.full-body .panel-col-red .panel-body {
  border-top-color: #fff !important;
  background-color: #F44336;
  color: #fff; }

.full-body .panel-col-pink .panel-body {
  border-top-color: #fff !important;
  background-color: #E91E63;
  color: #fff; }

.full-body .panel-col-purple .panel-body {
  border-top-color: #fff !important;
  background-color: #9C27B0;
  color: #fff; }

.full-body .panel-col-deep-purple .panel-body {
  border-top-color: #fff !important;
  background-color: #673AB7;
  color: #fff; }

.full-body .panel-col-indigo .panel-body {
  border-top-color: #fff !important;
  background-color: #3F51B5;
  color: #fff; }

.full-body .panel-col-blue .panel-body {
  border-top-color: #fff !important;
  background-color: #2196F3;
  color: #fff; }

.full-body .panel-col-light-blue .panel-body {
  border-top-color: #fff !important;
  background-color: #03A9F4;
  color: #fff; }

.full-body .panel-col-cyan .panel-body {
  border-top-color: #fff !important;
  background-color: #00BCD4;
  color: #fff; }

.full-body .panel-col-teal .panel-body {
  border-top-color: #fff !important;
  background-color: #009688;
  color: #fff; }

.full-body .panel-col-green .panel-body {
  border-top-color: #fff !important;
  background-color: #4CAF50;
  color: #fff; }

.full-body .panel-col-light-green .panel-body {
  border-top-color: #fff !important;
  background-color: #8BC34A;
  color: #fff; }

.full-body .panel-col-lime .panel-body {
  border-top-color: #fff !important;
  background-color: #CDDC39;
  color: #fff; }

.full-body .panel-col-yellow .panel-body {
  border-top-color: #fff !important;
  background-color: #ffe821;
  color: #fff; }

.full-body .panel-col-amber .panel-body {
  border-top-color: #fff !important;
  background-color: #FFC107;
  color: #fff; }

.full-body .panel-col-orange .panel-body {
  border-top-color: #fff !important;
  background-color: #FF9800;
  color: #fff; }

.full-body .panel-col-deep-orange .panel-body {
  border-top-color: #fff !important;
  background-color: #FF5722;
  color: #fff; }

.full-body .panel-col-brown .panel-body {
  border-top-color: #fff !important;
  background-color: #795548;
  color: #fff; }

.full-body .panel-col-grey .panel-body {
  border-top-color: #fff !important;
  background-color: #9E9E9E;
  color: #fff; }

.full-body .panel-col-blue-grey .panel-body {
  border-top-color: #fff !important;
  background-color: #607D8B;
  color: #fff; }

.full-body .panel-col-black .panel-body {
  border-top-color: #fff !important;
  background-color: #000000;
  color: #fff; }

.full-body .panel-col-white .panel-body {
  border-top-color: #fff !important;
  background-color: #ffffff;
  color: #fff; }

.full-body .panel-primary .panel-body {
  border-top-color: #fff !important;
  background-color: #1f91f3;
  color: #fff; }

.full-body .panel-success .panel-body {
  border-top-color: #fff !important;
  background-color: #2b982b;
  color: #fff; }

.full-body .panel-warning .panel-body {
  border-top-color: #fff !important;
  background-color: #ff9600;
  color: #fff; }

.full-body .panel-danger .panel-body {
  border-top-color: #fff !important;
  background-color: #fb483a;
  color: #fff; }

/* Progress Bars =============================== */
.progress {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  height: 22px; }
  .progress .progress-bar {
    line-height: 23px;
    background-color: #1f91f3; }
  .progress .progress-bar-success {
    background-color: #2b982b; }
  .progress .progress-bar-info {
    background-color: #00b0e4; }
  .progress .progress-bar-warning {
    background-color: #ff9600; }
  .progress .progress-bar-danger {
    background-color: #fb483a; }

/* Ion Range Slider ============================ */
.irs .irs-min,
.irs .irs-max,
.irs .irs-from,
.irs .irs-to,
.irs .irs-single {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }

/* Input Group ================================= */
.input-group {
  width: 100%;
  margin-bottom: 20px; }
  .input-group .form-line {
    display: inline-block;
    width: 100%;
    border-bottom: 1px solid #ddd;
    position: relative; }
    .input-group .form-line:after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      bottom: -2px;
      -moz-transform: scaleX(0);
      -ms-transform: scaleX(0);
      -o-transform: scaleX(0);
      -webkit-transform: scaleX(0);
      transform: scaleX(0);
      -moz-transition: 0.25s ease-in;
      -o-transition: 0.25s ease-in;
      -webkit-transition: 0.25s ease-in;
      transition: 0.25s ease-in;
      border-bottom: 2px solid #1f91f3; }
    .input-group .form-line + .input-group-addon {
      padding-right: 0;
      padding-left: 10px; }
  .input-group .help-info {
    float: right;
    font-size: 12px;
    margin-top: 5px;
    color: #999; }
  .input-group label.error {
    font-size: 12px;
    display: block;
    margin-top: 5px;
    font-weight: normal;
    color: #F44336; }
  .input-group .form-line.error:after {
    border-bottom: 2px solid #F44336; }
  .input-group .form-line.success:after {
    border-bottom: 2px solid #4CAF50; }
  .input-group .form-line.warning:after {
    border-bottom: 2px solid #FFC107; }
  .input-group .form-line.focused:after {
    -moz-transform: scaleX(1);
    -ms-transform: scaleX(1);
    -o-transform: scaleX(1);
    -webkit-transform: scaleX(1);
    transform: scaleX(1); }
  .input-group .form-line.focused .form-label {
    bottom: 25px;
    left: 0;
    font-size: 12px; }
  .input-group .input-group-addon {
    border: none;
    background-color: transparent;
    padding-left: 0;
    font-weight: bold; }
    .input-group .input-group-addon .material-icons {
      font-size: 18px;
      color: #555; }
  .input-group input[type="text"],
  .input-group .form-control {
    border: none;
    box-shadow: none;
    padding-left: 0; }
  .input-group .form-control:focus {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    -ms-box-shadow: none !important;
    box-shadow: none !important; }

.input-group.input-group-sm .input-group-addon i {
  font-size: 14px; }

.input-group.input-group-sm .form-control {
  font-size: 12px; }

.input-group.input-group-lg .input-group-addon i {
  font-size: 26px; }

.input-group.input-group-lg .form-control {
  font-size: 18px; }

.form-control-label {
  text-align: right; }
  .form-control-label label {
    margin-top: 8px; }

.form-horizontal .form-group {
  margin-bottom: 0; }

.form-group {
  width: 100%;
  margin-bottom: 25px; }
  .form-group .form-control {
    width: 100%;
    border: none;
    box-shadow: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    padding-left: 0; }
  .form-group .help-info {
    float: right;
    font-size: 12px;
    margin-top: 5px;
    color: #999; }
  .form-group label.error {
    font-size: 12px;
    display: block;
    margin-top: 5px;
    font-weight: normal;
    color: #F44336; }
  .form-group .form-line {
    width: 100%;
    position: relative;
    border-bottom: 1px solid #ddd; }
    .form-group .form-line:after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 0;
      bottom: -1px;
      -moz-transform: scaleX(0);
      -ms-transform: scaleX(0);
      -o-transform: scaleX(0);
      -webkit-transform: scaleX(0);
      transform: scaleX(0);
      -moz-transition: 0.25s ease-in;
      -o-transition: 0.25s ease-in;
      -webkit-transition: 0.25s ease-in;
      transition: 0.25s ease-in;
      border-bottom: 2px solid #1f91f3; }
    .form-group .form-line .form-label {
      font-weight: normal;
      color: #aaa;
      position: absolute;
      top: 10px;
      left: 0;
      cursor: text;
      -moz-transition: 0.2s;
      -o-transition: 0.2s;
      -webkit-transition: 0.2s;
      transition: 0.2s; }
  .form-group .form-line.error:after {
    border-bottom: 2px solid #F44336; }
  .form-group .form-line.success:after {
    border-bottom: 2px solid #4CAF50; }
  .form-group .form-line.warning:after {
    border-bottom: 2px solid #FFC107; }
  .form-group .form-line.focused:after {
    -moz-transform: scaleX(1);
    -ms-transform: scaleX(1);
    -o-transform: scaleX(1);
    -webkit-transform: scaleX(1);
    transform: scaleX(1); }
  .form-group .form-line.focused .form-label {
    top: -10px;
    left: 0;
    font-size: 12px; }

.form-group-sm .form-label {
  font-size: 12px; }

.form-group-sm .form-line.focused .form-label {
  bottom: 20px;
  font-size: 10px; }

.form-group-lg .form-label {
  font-size: 18px; }

.form-group-lg .form-line.focused .form-label {
  bottom: 35px;
  font-size: 12px; }

.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: transparent; }

/* Color Picker ================================ */
.colorpicker {
  z-index: 1; }
  .colorpicker:before, .colorpicker:after {
    display: none !important; }

/* Dropzone ==================================== */
.dropzone {
  border: 2px solid transparent !important;
  background-color: #eee !important; }
  .dropzone .dz-message .drag-icon-cph .material-icons {
    font-size: 80px;
    color: #777; }

.dz-drag-hover {
  border: 2px dashed #888 !important; }

/* Breadcrumbs ================================= */
.breadcrumb {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  background-color: transparent;
  font-size: 13px;
  margin-bottom: 10px; }
  .breadcrumb li a {
    color: #444;
    text-decoration: none; }
    .breadcrumb li a .material-icons {
      font-size: 18px;
      position: relative;
      top: 4px; }
  .breadcrumb li .material-icons {
    font-size: 18px;
    position: relative;
    top: 4px; }
  .breadcrumb > li + li:before {
    content: '>\00a0'; }

.breadcrumb-col-red li a {
  color: #F44336 !important;
  font-weight: bold; }

.breadcrumb-bg-red {
  background-color: #F44336 !important; }
  .breadcrumb-bg-red li {
    color: #fff !important; }
    .breadcrumb-bg-red li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-red li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-red li + li:before {
    color: #fff; }

.breadcrumb-col-pink li a {
  color: #E91E63 !important;
  font-weight: bold; }

.breadcrumb-bg-pink {
  background-color: #E91E63 !important; }
  .breadcrumb-bg-pink li {
    color: #fff !important; }
    .breadcrumb-bg-pink li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-pink li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-pink li + li:before {
    color: #fff; }

.breadcrumb-col-purple li a {
  color: #9C27B0 !important;
  font-weight: bold; }

.breadcrumb-bg-purple {
  background-color: #9C27B0 !important; }
  .breadcrumb-bg-purple li {
    color: #fff !important; }
    .breadcrumb-bg-purple li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-purple li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-purple li + li:before {
    color: #fff; }

.breadcrumb-col-deep-purple li a {
  color: #673AB7 !important;
  font-weight: bold; }

.breadcrumb-bg-deep-purple {
  background-color: #673AB7 !important; }
  .breadcrumb-bg-deep-purple li {
    color: #fff !important; }
    .breadcrumb-bg-deep-purple li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-deep-purple li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-deep-purple li + li:before {
    color: #fff; }

.breadcrumb-col-indigo li a {
  color: #3F51B5 !important;
  font-weight: bold; }

.breadcrumb-bg-indigo {
  background-color: #3F51B5 !important; }
  .breadcrumb-bg-indigo li {
    color: #fff !important; }
    .breadcrumb-bg-indigo li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-indigo li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-indigo li + li:before {
    color: #fff; }

.breadcrumb-col-blue li a {
  color: #2196F3 !important;
  font-weight: bold; }

.breadcrumb-bg-blue {
  background-color: #2196F3 !important; }
  .breadcrumb-bg-blue li {
    color: #fff !important; }
    .breadcrumb-bg-blue li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-blue li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-blue li + li:before {
    color: #fff; }

.breadcrumb-col-light-blue li a {
  color: #03A9F4 !important;
  font-weight: bold; }

.breadcrumb-bg-light-blue {
  background-color: #03A9F4 !important; }
  .breadcrumb-bg-light-blue li {
    color: #fff !important; }
    .breadcrumb-bg-light-blue li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-light-blue li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-light-blue li + li:before {
    color: #fff; }

.breadcrumb-col-cyan li a {
  color: #00BCD4 !important;
  font-weight: bold; }

.breadcrumb-bg-cyan {
  background-color: #00BCD4 !important; }
  .breadcrumb-bg-cyan li {
    color: #fff !important; }
    .breadcrumb-bg-cyan li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-cyan li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-cyan li + li:before {
    color: #fff; }

.breadcrumb-col-teal li a {
  color: #009688 !important;
  font-weight: bold; }

.breadcrumb-bg-teal {
  background-color: #009688 !important; }
  .breadcrumb-bg-teal li {
    color: #fff !important; }
    .breadcrumb-bg-teal li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-teal li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-teal li + li:before {
    color: #fff; }

.breadcrumb-col-green li a {
  color: #4CAF50 !important;
  font-weight: bold; }

.breadcrumb-bg-green {
  background-color: #4CAF50 !important; }
  .breadcrumb-bg-green li {
    color: #fff !important; }
    .breadcrumb-bg-green li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-green li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-green li + li:before {
    color: #fff; }

.breadcrumb-col-light-green li a {
  color: #8BC34A !important;
  font-weight: bold; }

.breadcrumb-bg-light-green {
  background-color: #8BC34A !important; }
  .breadcrumb-bg-light-green li {
    color: #fff !important; }
    .breadcrumb-bg-light-green li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-light-green li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-light-green li + li:before {
    color: #fff; }

.breadcrumb-col-lime li a {
  color: #CDDC39 !important;
  font-weight: bold; }

.breadcrumb-bg-lime {
  background-color: #CDDC39 !important; }
  .breadcrumb-bg-lime li {
    color: #fff !important; }
    .breadcrumb-bg-lime li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-lime li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-lime li + li:before {
    color: #fff; }

.breadcrumb-col-yellow li a {
  color: #ffe821 !important;
  font-weight: bold; }

.breadcrumb-bg-yellow {
  background-color: #ffe821 !important; }
  .breadcrumb-bg-yellow li {
    color: #fff !important; }
    .breadcrumb-bg-yellow li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-yellow li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-yellow li + li:before {
    color: #fff; }

.breadcrumb-col-amber li a {
  color: #FFC107 !important;
  font-weight: bold; }

.breadcrumb-bg-amber {
  background-color: #FFC107 !important; }
  .breadcrumb-bg-amber li {
    color: #fff !important; }
    .breadcrumb-bg-amber li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-amber li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-amber li + li:before {
    color: #fff; }

.breadcrumb-col-orange li a {
  color: #FF9800 !important;
  font-weight: bold; }

.breadcrumb-bg-orange {
  background-color: #FF9800 !important; }
  .breadcrumb-bg-orange li {
    color: #fff !important; }
    .breadcrumb-bg-orange li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-orange li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-orange li + li:before {
    color: #fff; }

.breadcrumb-col-deep-orange li a {
  color: #FF5722 !important;
  font-weight: bold; }

.breadcrumb-bg-deep-orange {
  background-color: #FF5722 !important; }
  .breadcrumb-bg-deep-orange li {
    color: #fff !important; }
    .breadcrumb-bg-deep-orange li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-deep-orange li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-deep-orange li + li:before {
    color: #fff; }

.breadcrumb-col-brown li a {
  color: #795548 !important;
  font-weight: bold; }

.breadcrumb-bg-brown {
  background-color: #795548 !important; }
  .breadcrumb-bg-brown li {
    color: #fff !important; }
    .breadcrumb-bg-brown li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-brown li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-brown li + li:before {
    color: #fff; }

.breadcrumb-col-grey li a {
  color: #9E9E9E !important;
  font-weight: bold; }

.breadcrumb-bg-grey {
  background-color: #9E9E9E !important; }
  .breadcrumb-bg-grey li {
    color: #fff !important; }
    .breadcrumb-bg-grey li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-grey li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-grey li + li:before {
    color: #fff; }

.breadcrumb-col-blue-grey li a {
  color: #607D8B !important;
  font-weight: bold; }

.breadcrumb-bg-blue-grey {
  background-color: #607D8B !important; }
  .breadcrumb-bg-blue-grey li {
    color: #fff !important; }
    .breadcrumb-bg-blue-grey li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-blue-grey li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-blue-grey li + li:before {
    color: #fff; }

.breadcrumb-col-black li a {
  color: #000000 !important;
  font-weight: bold; }

.breadcrumb-bg-black {
  background-color: #000000 !important; }
  .breadcrumb-bg-black li {
    color: #fff !important; }
    .breadcrumb-bg-black li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-black li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-black li + li:before {
    color: #fff; }

.breadcrumb-col-white li a {
  color: #ffffff !important;
  font-weight: bold; }

.breadcrumb-bg-white {
  background-color: #ffffff !important; }
  .breadcrumb-bg-white li {
    color: #fff !important; }
    .breadcrumb-bg-white li a {
      color: #fff;
      font-weight: bold; }
      .breadcrumb-bg-white li a .material-icons {
        padding-bottom: 8px; }
  .breadcrumb-bg-white li + li:before {
    color: #fff; }

/* Badge | List Group Item ===================== */
.badge {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }

.list-group-item {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s; }

.list-group .active {
  background-color: #2196F3;
  border-color: #2196F3; }
  .list-group .active:hover, .list-group .active:focus, .list-group .active:active {
    background-color: #2196F3;
    border-color: #2196F3; }
  .list-group .active .list-group-item-text {
    color: #dfe9f1;
    font-size: 13px; }
    .list-group .active .list-group-item-text:hover, .list-group .active .list-group-item-text:active, .list-group .active .list-group-item-text:focus {
      color: #dfe9f1; }

.list-group .list-group-item.active:hover .list-group-item-text, .list-group .list-group-item.active:focus .list-group-item-text, .list-group .list-group-item.active:active .list-group-item-text {
  color: #dfe9f1; }

.list-group .list-group-item:first-child, .list-group .list-group-item:last-child {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }

.list-group .list-group-item .list-group-item-heading {
  font-weight: bold;
  font-size: 17px; }

.list-group .list-group-item-success {
  background-color: #2b982b;
  border: none;
  color: #fff; }
  .list-group .list-group-item-success:hover, .list-group .list-group-item-success:focus {
    background-color: #2b982b;
    color: #fff;
    opacity: 0.8; }

.list-group .list-group-item-info {
  background-color: #00b0e4;
  border: none;
  color: #fff; }
  .list-group .list-group-item-info:hover, .list-group .list-group-item-info:focus {
    background-color: #00b0e4;
    color: #fff;
    opacity: 0.8; }

.list-group .list-group-item-warning {
  background-color: #ff9600;
  border: none;
  color: #fff; }
  .list-group .list-group-item-warning:hover, .list-group .list-group-item-warning:focus {
    background-color: #ff9600;
    color: #fff;
    opacity: 0.8; }

.list-group .list-group-item-danger {
  background-color: #fb483a;
  border: none;
  color: #fff; }
  .list-group .list-group-item-danger:hover, .list-group .list-group-item-danger:focus {
    background-color: #fb483a;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-red {
  stroke: #F44336; }

.list-group .list-group-bg-red {
  background-color: #F44336;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-red:hover, .list-group .list-group-bg-red:focus {
    background-color: #F44336;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-pink {
  stroke: #E91E63; }

.list-group .list-group-bg-pink {
  background-color: #E91E63;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-pink:hover, .list-group .list-group-bg-pink:focus {
    background-color: #E91E63;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-purple {
  stroke: #9C27B0; }

.list-group .list-group-bg-purple {
  background-color: #9C27B0;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-purple:hover, .list-group .list-group-bg-purple:focus {
    background-color: #9C27B0;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-deep-purple {
  stroke: #673AB7; }

.list-group .list-group-bg-deep-purple {
  background-color: #673AB7;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-deep-purple:hover, .list-group .list-group-bg-deep-purple:focus {
    background-color: #673AB7;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-indigo {
  stroke: #3F51B5; }

.list-group .list-group-bg-indigo {
  background-color: #3F51B5;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-indigo:hover, .list-group .list-group-bg-indigo:focus {
    background-color: #3F51B5;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-blue {
  stroke: #2196F3; }

.list-group .list-group-bg-blue {
  background-color: #2196F3;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-blue:hover, .list-group .list-group-bg-blue:focus {
    background-color: #2196F3;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-light-blue {
  stroke: #03A9F4; }

.list-group .list-group-bg-light-blue {
  background-color: #03A9F4;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-light-blue:hover, .list-group .list-group-bg-light-blue:focus {
    background-color: #03A9F4;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-cyan {
  stroke: #00BCD4; }

.list-group .list-group-bg-cyan {
  background-color: #00BCD4;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-cyan:hover, .list-group .list-group-bg-cyan:focus {
    background-color: #00BCD4;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-teal {
  stroke: #009688; }

.list-group .list-group-bg-teal {
  background-color: #009688;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-teal:hover, .list-group .list-group-bg-teal:focus {
    background-color: #009688;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-green {
  stroke: #4CAF50; }

.list-group .list-group-bg-green {
  background-color: #4CAF50;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-green:hover, .list-group .list-group-bg-green:focus {
    background-color: #4CAF50;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-light-green {
  stroke: #8BC34A; }

.list-group .list-group-bg-light-green {
  background-color: #8BC34A;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-light-green:hover, .list-group .list-group-bg-light-green:focus {
    background-color: #8BC34A;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-lime {
  stroke: #CDDC39; }

.list-group .list-group-bg-lime {
  background-color: #CDDC39;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-lime:hover, .list-group .list-group-bg-lime:focus {
    background-color: #CDDC39;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-yellow {
  stroke: #ffe821; }

.list-group .list-group-bg-yellow {
  background-color: #ffe821;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-yellow:hover, .list-group .list-group-bg-yellow:focus {
    background-color: #ffe821;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-amber {
  stroke: #FFC107; }

.list-group .list-group-bg-amber {
  background-color: #FFC107;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-amber:hover, .list-group .list-group-bg-amber:focus {
    background-color: #FFC107;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-orange {
  stroke: #FF9800; }

.list-group .list-group-bg-orange {
  background-color: #FF9800;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-orange:hover, .list-group .list-group-bg-orange:focus {
    background-color: #FF9800;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-deep-orange {
  stroke: #FF5722; }

.list-group .list-group-bg-deep-orange {
  background-color: #FF5722;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-deep-orange:hover, .list-group .list-group-bg-deep-orange:focus {
    background-color: #FF5722;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-brown {
  stroke: #795548; }

.list-group .list-group-bg-brown {
  background-color: #795548;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-brown:hover, .list-group .list-group-bg-brown:focus {
    background-color: #795548;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-grey {
  stroke: #9E9E9E; }

.list-group .list-group-bg-grey {
  background-color: #9E9E9E;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-grey:hover, .list-group .list-group-bg-grey:focus {
    background-color: #9E9E9E;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-blue-grey {
  stroke: #607D8B; }

.list-group .list-group-bg-blue-grey {
  background-color: #607D8B;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-blue-grey:hover, .list-group .list-group-bg-blue-grey:focus {
    background-color: #607D8B;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-black {
  stroke: #000000; }

.list-group .list-group-bg-black {
  background-color: #000000;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-black:hover, .list-group .list-group-bg-black:focus {
    background-color: #000000;
    color: #fff;
    opacity: 0.8; }

.list-group .pl-white {
  stroke: #ffffff; }

.list-group .list-group-bg-white {
  background-color: #ffffff;
  border: none;
  color: #fff; }
  .list-group .list-group-bg-white:hover, .list-group .list-group-bg-white:focus {
    background-color: #ffffff;
    color: #fff;
    opacity: 0.8; }

/* Pagination & Pager ========================== */
.pager li > a {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  border: none;
  background-color: transparent;
  color: #222;
  font-weight: bold; }

.pager li a:focus,
.pager li a:active {
  background-color: transparent; }

.pagination .disabled a,
.pagination .disabled a:hover,
.pagination .disabled a:focus,
.pagination .disabled a:active {
  color: #bbb; }

.pagination li.active a {
  background-color: #2196F3; }

.pagination li {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .pagination li a:focus,
  .pagination li a:active {
    background-color: transparent;
    color: #555; }

.pagination > li > a {
  border: none;
  font-weight: bold;
  color: #555; }

.pagination > li:first-child > a,
.pagination > li:last-child > a {
  width: auto;
  height: 32px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .pagination > li:first-child > a .material-icons,
  .pagination > li:last-child > a .material-icons {
    position: relative;
    bottom: 2px; }

.pagination-sm > li:first-child > a,
.pagination-sm > li:last-child > a {
  width: 28px;
  height: 28px; }
  .pagination-sm > li:first-child > a .material-icons,
  .pagination-sm > li:last-child > a .material-icons {
    position: relative;
    top: -1px;
    left: -6px;
    font-size: 20px; }

.pagination-lg > li:first-child > a,
.pagination-lg > li:last-child > a {
  width: 44px;
  height: 44px; }
  .pagination-lg > li:first-child > a .material-icons,
  .pagination-lg > li:last-child > a .material-icons {
    font-size: 30px;
    position: relative;
    top: -3px;
    left: -10px; }

/* Media Object ================================ */
.media {
  margin-bottom: 25px; }
  .media .media-body {
    color: #777;
    font-size: 13px; }
    .media .media-body .media-heading {
      font-size: 16px;
      font-weight: bold;
      color: #333; }

/* Form Wizard ================================= */
.wizard,
.tabcontrol {
  display: block;
  width: 100%;
  overflow: hidden; }

.wizard a,
.tabcontrol a {
  outline: 0; }

.wizard ul,
.tabcontrol ul {
  list-style: none !important;
  padding: 0;
  margin: 0; }

.wizard ul > li, .tabcontrol ul > li {
  display: block;
  padding: 0; }

/* Accessibility */
.wizard > .steps .current-info,
.tabcontrol > .steps .current-info,
.wizard > .content > .title,
.tabcontrol > .content > .title {
  position: absolute;
  left: -999em; }

.wizard > .steps {
  position: relative;
  display: block;
  width: 100%; }

.wizard.vertical > .steps {
  float: left;
  width: 30%; }

.wizard.vertical > .steps > ul > li {
  float: none;
  width: 100%; }

.wizard.vertical > .content {
  float: left;
  margin: 0 0 0.5em 0;
  width: 70%; }

.wizard.vertical > .actions {
  float: right;
  width: 100%; }

.wizard.vertical > .actions > ul > li {
  margin: 0 0 0 1em; }

.wizard > .steps .number {
  font-size: 1.429em; }

.wizard > .steps > ul > li {
  width: 25%;
  float: left; }

.wizard > .actions > ul > li {
  float: left; }

.wizard > .steps a {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px; }
  .wizard > .steps a:hover, .wizard > .steps a:active {
    display: block;
    width: auto;
    margin: 0 0.5em 0.5em;
    padding: 1em 1em;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px; }

.wizard > .steps .disabled a {
  background: #eee;
  color: #aaa;
  cursor: default; }
  .wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active {
    background: #eee;
    color: #aaa;
    cursor: default; }

.wizard > .steps .current a {
  background: #2184be;
  color: #fff;
  cursor: default; }
  .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
    background: #2184be;
    color: #fff;
    cursor: default; }

.wizard > .steps .done a {
  background: #9dc8e2;
  color: #fff; }
  .wizard > .steps .done a:hover, .wizard > .steps .done a:active {
    background: #9dc8e2;
    color: #fff; }

.wizard > .steps .error a {
  background: #ff3111;
  color: #fff; }
  .wizard > .steps .error a:hover, .wizard > .steps .error a:active {
    background: #ff3111;
    color: #fff; }

.wizard > .content {
  border: 1px solid #ddd;
  display: block;
  margin: 0.5em;
  min-height: 35em;
  overflow: hidden;
  position: relative;
  width: auto; }

.wizard > .actions {
  position: relative;
  display: block;
  text-align: right;
  width: 100%; }

.wizard > .actions > ul {
  display: inline-block;
  text-align: right; }
  .wizard > .actions > ul > li {
    margin: 0 0.5em; }

.wizard > .actions a {
  background: #009688;
  color: #fff;
  display: block;
  padding: 0.5em 1em;
  text-decoration: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .wizard > .actions a:hover, .wizard > .actions a:active {
    background: #009688;
    color: #fff;
    display: block;
    padding: 0.5em 1em;
    text-decoration: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }

.wizard > .actions .disabled a {
  background: #eee;
  color: #aaa; }
  .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active {
    background: #eee;
    color: #aaa; }

.tabcontrol > .steps {
  position: relative;
  display: block;
  width: 100%; }
  .tabcontrol > .steps > ul {
    position: relative;
    margin: 6px 0 0 0;
    top: 1px;
    z-index: 1; }
    .tabcontrol > .steps > ul > li {
      float: left;
      margin: 5px 2px 0 0;
      padding: 1px;
      -webkit-border-top-left-radius: 5px;
      -webkit-border-top-right-radius: 5px;
      -moz-border-radius-topleft: 5px;
      -moz-border-radius-topright: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px; }
      .tabcontrol > .steps > ul > li:hover {
        background: #edecec;
        border: 1px solid #bbb;
        padding: 0; }
      .tabcontrol > .steps > ul > li.current {
        background: #fff;
        border: 1px solid #bbb;
        border-bottom: 0 none;
        padding: 0 0 1px 0;
        margin-top: 0; }
        .tabcontrol > .steps > ul > li.current > a {
          padding: 15px 30px 10px 30px; }
      .tabcontrol > .steps > ul > li > a {
        color: #5f5f5f;
        display: inline-block;
        border: 0 none;
        margin: 0;
        padding: 10px 30px;
        text-decoration: none; }
        .tabcontrol > .steps > ul > li > a:hover {
          text-decoration: none; }

.tabcontrol > .content {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 35em;
  overflow: hidden;
  border-top: 1px solid #bbb;
  padding-top: 20px; }
  .tabcontrol > .content > .body {
    float: left;
    position: absolute;
    width: 95%;
    height: 95%;
    padding: 2.5%; }
    .tabcontrol > .content > .body ul {
      list-style: disc !important; }
      .tabcontrol > .content > .body ul > li {
        display: list-item; }

.wizard .content {
  min-height: 245px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  overflow-y: auto; }
  .wizard .content .body {
    padding: 15px; }

.wizard .steps a {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s; }
  .wizard .steps a:active, .wizard .steps a:focus, .wizard .steps a:hover {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }

.wizard .steps .done a {
  background-color: rgba(0, 150, 136, 0.6); }
  .wizard .steps .done a:hover, .wizard .steps .done a:active, .wizard .steps .done a:focus {
    background-color: rgba(0, 150, 136, 0.5); }

.wizard .steps .error a {
  background-color: #F44336 !important; }

.wizard .steps .current a {
  background-color: #009688; }
  .wizard .steps .current a:active, .wizard .steps .current a:focus, .wizard .steps .current a:hover {
    background-color: #009688; }

/* Waves ======================================= */
.waves-effect.waves-red .waves-ripple {
  background: rgba(244, 67, 54, 0.5); }

.waves-effect.waves-pink .waves-ripple {
  background: rgba(233, 30, 99, 0.5); }

.waves-effect.waves-purple .waves-ripple {
  background: rgba(156, 39, 176, 0.5); }

.waves-effect.waves-deep-purple .waves-ripple {
  background: rgba(103, 58, 183, 0.5); }

.waves-effect.waves-indigo .waves-ripple {
  background: rgba(63, 81, 181, 0.5); }

.waves-effect.waves-blue .waves-ripple {
  background: rgba(33, 150, 243, 0.5); }

.waves-effect.waves-light-blue .waves-ripple {
  background: rgba(3, 169, 244, 0.5); }

.waves-effect.waves-cyan .waves-ripple {
  background: rgba(0, 188, 212, 0.5); }

.waves-effect.waves-teal .waves-ripple {
  background: rgba(0, 150, 136, 0.5); }

.waves-effect.waves-green .waves-ripple {
  background: rgba(76, 175, 80, 0.5); }

.waves-effect.waves-light-green .waves-ripple {
  background: rgba(139, 195, 74, 0.5); }

.waves-effect.waves-lime .waves-ripple {
  background: rgba(205, 220, 57, 0.5); }

.waves-effect.waves-yellow .waves-ripple {
  background: rgba(255, 232, 33, 0.5); }

.waves-effect.waves-amber .waves-ripple {
  background: rgba(255, 193, 7, 0.5); }

.waves-effect.waves-orange .waves-ripple {
  background: rgba(255, 152, 0, 0.5); }

.waves-effect.waves-deep-orange .waves-ripple {
  background: rgba(255, 87, 34, 0.5); }

.waves-effect.waves-brown .waves-ripple {
  background: rgba(121, 85, 72, 0.5); }

.waves-effect.waves-grey .waves-ripple {
  background: rgba(158, 158, 158, 0.5); }

.waves-effect.waves-blue-grey .waves-ripple {
  background: rgba(96, 125, 139, 0.5); }

.waves-effect.waves-black .waves-ripple {
  background: rgba(0, 0, 0, 0.5); }

.waves-effect.waves-white .waves-ripple {
  background: rgba(255, 255, 255, 0.5); }

/* Page Loader ================================= */
.page-loader-wrapper {
  z-index: 99999999;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: #eee;
  overflow: hidden;
  text-align: center; }
  .page-loader-wrapper p {
    font-size: 13px;
    margin-top: 10px;
    font-weight: bold;
    color: #444; }
  .page-loader-wrapper .loader {
    position: relative;
    top: calc(50% - 30px); }

/* Preloaders ================================== */
.md-preloader .pl-red {
  stroke: #F44336; }

.md-preloader .pl-pink {
  stroke: #E91E63; }

.md-preloader .pl-purple {
  stroke: #9C27B0; }

.md-preloader .pl-deep-purple {
  stroke: #673AB7; }

.md-preloader .pl-indigo {
  stroke: #3F51B5; }

.md-preloader .pl-blue {
  stroke: #2196F3; }

.md-preloader .pl-light-blue {
  stroke: #03A9F4; }

.md-preloader .pl-cyan {
  stroke: #00BCD4; }

.md-preloader .pl-teal {
  stroke: #009688; }

.md-preloader .pl-green {
  stroke: #4CAF50; }

.md-preloader .pl-light-green {
  stroke: #8BC34A; }

.md-preloader .pl-lime {
  stroke: #CDDC39; }

.md-preloader .pl-yellow {
  stroke: #ffe821; }

.md-preloader .pl-amber {
  stroke: #FFC107; }

.md-preloader .pl-orange {
  stroke: #FF9800; }

.md-preloader .pl-deep-orange {
  stroke: #FF5722; }

.md-preloader .pl-brown {
  stroke: #795548; }

.md-preloader .pl-grey {
  stroke: #9E9E9E; }

.md-preloader .pl-blue-grey {
  stroke: #607D8B; }

.md-preloader .pl-black {
  stroke: #000000; }

.md-preloader .pl-white {
  stroke: #ffffff; }

.preloader {
  display: inline-block;
  position: relative;
  width: 50px;
  height: 50px;
  -webkit-animation: container-rotate 1568ms linear infinite;
  -moz-animation: container-rotate 1568ms linear infinite;
  -o-animation: container-rotate 1568ms linear infinite;
  animation: container-rotate 1568ms linear infinite; }
  .preloader.pl-size-xl {
    width: 75px;
    height: 75px; }
  .preloader.pl-size-l {
    width: 60px;
    height: 60px; }
  .preloader.pl-size-md {
    width: 50px;
    height: 50px; }
  .preloader.pl-size-sm {
    width: 40px;
    height: 40px; }
  .preloader.pl-size-xs {
    width: 25px;
    height: 25px; }

.spinner-layer {
  position: absolute;
  width: 100%;
  height: 100%;
  border-color: #F44336;
  -ms-opacity: 1;
  opacity: 1;
  -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  -moz-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  -o-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; }
  .spinner-layer.pl-red {
    border-color: #F44336; }
  .spinner-layer.pl-pink {
    border-color: #E91E63; }
  .spinner-layer.pl-purple {
    border-color: #9C27B0; }
  .spinner-layer.pl-deep-purple {
    border-color: #673AB7; }
  .spinner-layer.pl-indigo {
    border-color: #3F51B5; }
  .spinner-layer.pl-blue {
    border-color: #2196F3; }
  .spinner-layer.pl-light-blue {
    border-color: #03A9F4; }
  .spinner-layer.pl-cyan {
    border-color: #00BCD4; }
  .spinner-layer.pl-teal {
    border-color: #009688; }
  .spinner-layer.pl-green {
    border-color: #4CAF50; }
  .spinner-layer.pl-light-green {
    border-color: #8BC34A; }
  .spinner-layer.pl-lime {
    border-color: #CDDC39; }
  .spinner-layer.pl-yellow {
    border-color: #ffe821; }
  .spinner-layer.pl-amber {
    border-color: #FFC107; }
  .spinner-layer.pl-orange {
    border-color: #FF9800; }
  .spinner-layer.pl-deep-orange {
    border-color: #FF5722; }
  .spinner-layer.pl-brown {
    border-color: #795548; }
  .spinner-layer.pl-grey {
    border-color: #9E9E9E; }
  .spinner-layer.pl-blue-grey {
    border-color: #607D8B; }
  .spinner-layer.pl-black {
    border-color: #000000; }
  .spinner-layer.pl-white {
    border-color: #ffffff; }

.right {
  float: right !important; }

.gap-patch {
  position: absolute;
  top: 0;
  left: 45%;
  width: 10%;
  height: 100%;
  overflow: hidden;
  border-color: inherit; }
  .gap-patch.circle {
    width: 1000%;
    left: -450%; }

.circle-clipper {
  display: inline-block;
  position: relative;
  width: 50%;
  height: 100%;
  overflow: hidden;
  border-color: inherit; }
  .circle-clipper .circle {
    width: 200%;
    height: 100%;
    border-width: 3px;
    border-style: solid;
    border-color: inherit;
    border-bottom-color: transparent !important;
    -ms-border-radius: 50%;
    border-radius: 50%;
    -webkit-animation: none;
    animation: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0; }
  .circle-clipper.left .circle {
    left: 0;
    border-right-color: transparent !important;
    -webkit-transform: rotate(129deg);
    -moz-transform: rotate(129deg);
    -ms-transform: rotate(129deg);
    -o-transform: rotate(129deg);
    transform: rotate(129deg);
    -webkit-animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    -moz-animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    -o-animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; }
  .circle-clipper.right .circle {
    left: -100%;
    border-left-color: transparent !important;
    -webkit-transform: rotate(-129deg);
    -moz-transform: rotate(-129deg);
    -ms-transform: rotate(-129deg);
    -o-transform: rotate(-129deg);
    transform: rotate(-129deg);
    -webkit-animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    -moz-animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    -o-animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; }

@-webkit-keyframes container-rotate {
  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes container-rotate {
  to {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes fill-unfill-rotate {
  12.5% {
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg); }
  25% {
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg); }
  37.5% {
    -webkit-transform: rotate(405deg);
    transform: rotate(405deg); }
  50% {
    -webkit-transform: rotate(540deg);
    transform: rotate(540deg); }
  62.5% {
    -webkit-transform: rotate(675deg);
    transform: rotate(675deg); }
  75% {
    -webkit-transform: rotate(810deg);
    transform: rotate(810deg); }
  87.5% {
    -webkit-transform: rotate(945deg);
    transform: rotate(945deg); }
  to {
    -webkit-transform: rotate(1080deg);
    transform: rotate(1080deg); } }

@keyframes fill-unfill-rotate {
  12.5% {
    transform: rotate(135deg); }
  25% {
    transform: rotate(270deg); }
  37.5% {
    transform: rotate(405deg); }
  50% {
    transform: rotate(540deg); }
  62.5% {
    transform: rotate(675deg); }
  75% {
    transform: rotate(810deg); }
  87.5% {
    transform: rotate(945deg); }
  to {
    transform: rotate(1080deg); } }

@-webkit-keyframes left-spin {
  from {
    -webkit-transform: rotate(130deg);
    -moz-transform: rotate(130deg);
    -ms-transform: rotate(130deg);
    -o-transform: rotate(130deg);
    transform: rotate(130deg); }
  50% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  to {
    -webkit-transform: rotate(130deg);
    -moz-transform: rotate(130deg);
    -ms-transform: rotate(130deg);
    -o-transform: rotate(130deg);
    transform: rotate(130deg); } }

@keyframes left-spin {
  from {
    -moz-transform: rotate(130deg);
    -ms-transform: rotate(130deg);
    -o-transform: rotate(130deg);
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg); }
  50% {
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  to {
    -moz-transform: rotate(130deg);
    -ms-transform: rotate(130deg);
    -o-transform: rotate(130deg);
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg); } }

@-webkit-keyframes right-spin {
  from {
    -webkit-transform: rotate(-130deg);
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    transform: rotate(-130deg); }
  50% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg); }
  to {
    -webkit-transform: rotate(-130deg);
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    transform: rotate(-130deg); } }

@-moz-keyframes right-spin {
  from {
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg); }
  50% {
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  to {
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg); } }

@keyframes right-spin {
  from {
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg); }
  50% {
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  to {
    -moz-transform: rotate(-130deg);
    -ms-transform: rotate(-130deg);
    -o-transform: rotate(-130deg);
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg); } }

/* Navbars ===================================== */
.navbar {
  font-family: "Roboto", sans-serif;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  -ms-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  border: none;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 12;
  width: 100%; }
  .navbar .navbar-brand {
    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden; }
  .navbar .navbar-custom-right-menu {
    float: right; }
  .navbar .navbar-toggle {
    text-decoration: none;
    color: #fff;
    width: 20px;
    height: 20px;
    margin-top: -4px;
    margin-right: 17px; }
    .navbar .navbar-toggle:before {
      content: '\E8D5';
      font-family: 'Material Icons';
      font-size: 26px; }
  .navbar .navbar-collapse.in {
    overflow: visible; }

.ls-closed .sidebar {
  margin-left: -300px; }

.ls-closed section.content {
  margin-left: 15px; }

.ls-closed .bars:after, .ls-closed .bars:before {
  font-family: 'Material Icons';
  font-size: 24px;
  position: absolute;
  top: 18px;
  left: 20px;
  margin-right: 10px;
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0);
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s; }

.ls-closed .bars:before {
  content: '\E5D2';
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1); }

.ls-closed .bars:after {
  content: '\E5C4';
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0); }

.ls-closed .navbar-brand {
  margin-left: 30px; }

.overlay-open .bars:before {
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0); }

.overlay-open .bars:after {
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1); }

.navbar-header {
  padding: 10px 7px; }
  .navbar-header .bars {
    float: left;
    text-decoration: none; }

.navbar-nav > li > a {
  padding: 7px 7px 2px 7px;
  margin-top: 17px;
  margin-left: 5px; }

.navbar-nav .dropdown-menu {
  margin-top: -40px !important; }

.label-count {
  position: absolute;
  top: 2px;
  right: 6px;
  font-size: 10px;
  line-height: 15px;
  background-color: #000;
  padding: 0 4px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px; }

.col-red .navbar .navbar-brand,
.col-red .navbar .navbar-brand:hover,
.col-red .navbar .navbar-brand:active,
.col-red .navbar .navbar-brand:focus {
  color: #fff; }

.col-red .navbar .nav > li > a:hover,
.col-red .navbar .nav > li > a:focus,
.col-red .navbar .nav .open > a,
.col-red .navbar .nav .open > a:hover,
.col-red .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-red .navbar .nav > li > a {
  color: #fff; }

.col-red .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-red .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-pink .navbar .navbar-brand,
.col-pink .navbar .navbar-brand:hover,
.col-pink .navbar .navbar-brand:active,
.col-pink .navbar .navbar-brand:focus {
  color: #fff; }

.col-pink .navbar .nav > li > a:hover,
.col-pink .navbar .nav > li > a:focus,
.col-pink .navbar .nav .open > a,
.col-pink .navbar .nav .open > a:hover,
.col-pink .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-pink .navbar .nav > li > a {
  color: #fff; }

.col-pink .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-pink .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-purple .navbar .navbar-brand,
.col-purple .navbar .navbar-brand:hover,
.col-purple .navbar .navbar-brand:active,
.col-purple .navbar .navbar-brand:focus {
  color: #fff; }

.col-purple .navbar .nav > li > a:hover,
.col-purple .navbar .nav > li > a:focus,
.col-purple .navbar .nav .open > a,
.col-purple .navbar .nav .open > a:hover,
.col-purple .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-purple .navbar .nav > li > a {
  color: #fff; }

.col-purple .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-purple .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-deep-purple .navbar .navbar-brand,
.col-deep-purple .navbar .navbar-brand:hover,
.col-deep-purple .navbar .navbar-brand:active,
.col-deep-purple .navbar .navbar-brand:focus {
  color: #fff; }

.col-deep-purple .navbar .nav > li > a:hover,
.col-deep-purple .navbar .nav > li > a:focus,
.col-deep-purple .navbar .nav .open > a,
.col-deep-purple .navbar .nav .open > a:hover,
.col-deep-purple .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-deep-purple .navbar .nav > li > a {
  color: #fff; }

.col-deep-purple .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-deep-purple .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-indigo .navbar .navbar-brand,
.col-indigo .navbar .navbar-brand:hover,
.col-indigo .navbar .navbar-brand:active,
.col-indigo .navbar .navbar-brand:focus {
  color: #fff; }

.col-indigo .navbar .nav > li > a:hover,
.col-indigo .navbar .nav > li > a:focus,
.col-indigo .navbar .nav .open > a,
.col-indigo .navbar .nav .open > a:hover,
.col-indigo .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-indigo .navbar .nav > li > a {
  color: #fff; }

.col-indigo .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-indigo .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-blue .navbar .navbar-brand,
.col-blue .navbar .navbar-brand:hover,
.col-blue .navbar .navbar-brand:active,
.col-blue .navbar .navbar-brand:focus {
  color: #fff; }

.col-blue .navbar .nav > li > a:hover,
.col-blue .navbar .nav > li > a:focus,
.col-blue .navbar .nav .open > a,
.col-blue .navbar .nav .open > a:hover,
.col-blue .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-blue .navbar .nav > li > a {
  color: #fff; }

.col-blue .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-blue .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-light-blue .navbar .navbar-brand,
.col-light-blue .navbar .navbar-brand:hover,
.col-light-blue .navbar .navbar-brand:active,
.col-light-blue .navbar .navbar-brand:focus {
  color: #fff; }

.col-light-blue .navbar .nav > li > a:hover,
.col-light-blue .navbar .nav > li > a:focus,
.col-light-blue .navbar .nav .open > a,
.col-light-blue .navbar .nav .open > a:hover,
.col-light-blue .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-light-blue .navbar .nav > li > a {
  color: #fff; }

.col-light-blue .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-light-blue .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-cyan .navbar .navbar-brand,
.col-cyan .navbar .navbar-brand:hover,
.col-cyan .navbar .navbar-brand:active,
.col-cyan .navbar .navbar-brand:focus {
  color: #fff; }

.col-cyan .navbar .nav > li > a:hover,
.col-cyan .navbar .nav > li > a:focus,
.col-cyan .navbar .nav .open > a,
.col-cyan .navbar .nav .open > a:hover,
.col-cyan .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-cyan .navbar .nav > li > a {
  color: #fff; }

.col-cyan .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-cyan .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-teal .navbar .navbar-brand,
.col-teal .navbar .navbar-brand:hover,
.col-teal .navbar .navbar-brand:active,
.col-teal .navbar .navbar-brand:focus {
  color: #fff; }

.col-teal .navbar .nav > li > a:hover,
.col-teal .navbar .nav > li > a:focus,
.col-teal .navbar .nav .open > a,
.col-teal .navbar .nav .open > a:hover,
.col-teal .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-teal .navbar .nav > li > a {
  color: #fff; }

.col-teal .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-teal .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-green .navbar .navbar-brand,
.col-green .navbar .navbar-brand:hover,
.col-green .navbar .navbar-brand:active,
.col-green .navbar .navbar-brand:focus {
  color: #fff; }

.col-green .navbar .nav > li > a:hover,
.col-green .navbar .nav > li > a:focus,
.col-green .navbar .nav .open > a,
.col-green .navbar .nav .open > a:hover,
.col-green .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-green .navbar .nav > li > a {
  color: #fff; }

.col-green .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-green .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-light-green .navbar .navbar-brand,
.col-light-green .navbar .navbar-brand:hover,
.col-light-green .navbar .navbar-brand:active,
.col-light-green .navbar .navbar-brand:focus {
  color: #fff; }

.col-light-green .navbar .nav > li > a:hover,
.col-light-green .navbar .nav > li > a:focus,
.col-light-green .navbar .nav .open > a,
.col-light-green .navbar .nav .open > a:hover,
.col-light-green .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-light-green .navbar .nav > li > a {
  color: #fff; }

.col-light-green .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-light-green .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-lime .navbar .navbar-brand,
.col-lime .navbar .navbar-brand:hover,
.col-lime .navbar .navbar-brand:active,
.col-lime .navbar .navbar-brand:focus {
  color: #fff; }

.col-lime .navbar .nav > li > a:hover,
.col-lime .navbar .nav > li > a:focus,
.col-lime .navbar .nav .open > a,
.col-lime .navbar .nav .open > a:hover,
.col-lime .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-lime .navbar .nav > li > a {
  color: #fff; }

.col-lime .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-lime .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-yellow .navbar .navbar-brand,
.col-yellow .navbar .navbar-brand:hover,
.col-yellow .navbar .navbar-brand:active,
.col-yellow .navbar .navbar-brand:focus {
  color: #fff; }

.col-yellow .navbar .nav > li > a:hover,
.col-yellow .navbar .nav > li > a:focus,
.col-yellow .navbar .nav .open > a,
.col-yellow .navbar .nav .open > a:hover,
.col-yellow .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-yellow .navbar .nav > li > a {
  color: #fff; }

.col-yellow .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-yellow .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-amber .navbar .navbar-brand,
.col-amber .navbar .navbar-brand:hover,
.col-amber .navbar .navbar-brand:active,
.col-amber .navbar .navbar-brand:focus {
  color: #fff; }

.col-amber .navbar .nav > li > a:hover,
.col-amber .navbar .nav > li > a:focus,
.col-amber .navbar .nav .open > a,
.col-amber .navbar .nav .open > a:hover,
.col-amber .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-amber .navbar .nav > li > a {
  color: #fff; }

.col-amber .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-amber .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-orange .navbar .navbar-brand,
.col-orange .navbar .navbar-brand:hover,
.col-orange .navbar .navbar-brand:active,
.col-orange .navbar .navbar-brand:focus {
  color: #fff; }

.col-orange .navbar .nav > li > a:hover,
.col-orange .navbar .nav > li > a:focus,
.col-orange .navbar .nav .open > a,
.col-orange .navbar .nav .open > a:hover,
.col-orange .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-orange .navbar .nav > li > a {
  color: #fff; }

.col-orange .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-orange .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-deep-orange .navbar .navbar-brand,
.col-deep-orange .navbar .navbar-brand:hover,
.col-deep-orange .navbar .navbar-brand:active,
.col-deep-orange .navbar .navbar-brand:focus {
  color: #fff; }

.col-deep-orange .navbar .nav > li > a:hover,
.col-deep-orange .navbar .nav > li > a:focus,
.col-deep-orange .navbar .nav .open > a,
.col-deep-orange .navbar .nav .open > a:hover,
.col-deep-orange .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-deep-orange .navbar .nav > li > a {
  color: #fff; }

.col-deep-orange .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-deep-orange .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-brown .navbar .navbar-brand,
.col-brown .navbar .navbar-brand:hover,
.col-brown .navbar .navbar-brand:active,
.col-brown .navbar .navbar-brand:focus {
  color: #fff; }

.col-brown .navbar .nav > li > a:hover,
.col-brown .navbar .nav > li > a:focus,
.col-brown .navbar .nav .open > a,
.col-brown .navbar .nav .open > a:hover,
.col-brown .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-brown .navbar .nav > li > a {
  color: #fff; }

.col-brown .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-brown .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-grey .navbar .navbar-brand,
.col-grey .navbar .navbar-brand:hover,
.col-grey .navbar .navbar-brand:active,
.col-grey .navbar .navbar-brand:focus {
  color: #fff; }

.col-grey .navbar .nav > li > a:hover,
.col-grey .navbar .nav > li > a:focus,
.col-grey .navbar .nav .open > a,
.col-grey .navbar .nav .open > a:hover,
.col-grey .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-grey .navbar .nav > li > a {
  color: #fff; }

.col-grey .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-grey .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-blue-grey .navbar .navbar-brand,
.col-blue-grey .navbar .navbar-brand:hover,
.col-blue-grey .navbar .navbar-brand:active,
.col-blue-grey .navbar .navbar-brand:focus {
  color: #fff; }

.col-blue-grey .navbar .nav > li > a:hover,
.col-blue-grey .navbar .nav > li > a:focus,
.col-blue-grey .navbar .nav .open > a,
.col-blue-grey .navbar .nav .open > a:hover,
.col-blue-grey .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-blue-grey .navbar .nav > li > a {
  color: #fff; }

.col-blue-grey .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-blue-grey .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-black .navbar .navbar-brand,
.col-black .navbar .navbar-brand:hover,
.col-black .navbar .navbar-brand:active,
.col-black .navbar .navbar-brand:focus {
  color: #fff; }

.col-black .navbar .nav > li > a:hover,
.col-black .navbar .nav > li > a:focus,
.col-black .navbar .nav .open > a,
.col-black .navbar .nav .open > a:hover,
.col-black .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-black .navbar .nav > li > a {
  color: #fff; }

.col-black .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-black .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

.col-white .navbar .navbar-brand,
.col-white .navbar .navbar-brand:hover,
.col-white .navbar .navbar-brand:active,
.col-white .navbar .navbar-brand:focus {
  color: #fff; }

.col-white .navbar .nav > li > a:hover,
.col-white .navbar .nav > li > a:focus,
.col-white .navbar .nav .open > a,
.col-white .navbar .nav .open > a:hover,
.col-white .navbar .nav .open > a:focus {
  background-color: rgba(0, 0, 0, 0.05); }

.col-white .navbar .nav > li > a {
  color: #fff; }

.col-white .navbar .bars {
  float: left;
  padding: 10px 20px;
  font-size: 22px;
  color: #fff;
  margin-right: 10px;
  margin-left: -10px;
  margin-top: 4px; }

.col-white .navbar .bars:hover {
  background-color: rgba(0, 0, 0, 0.08); }

/* Dropdown Menu =============================== */
.dropdown-menu {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  margin-top: -35px !important;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  border: none; }
  .dropdown-menu .divider {
    margin: 5px 0; }
  .dropdown-menu .header {
    font-size: 13px;
    font-weight: bold;
    min-width: 270px;
    border-bottom: 1px solid #eee;
    text-align: center;
    padding: 4px 0 6px 0; }
  .dropdown-menu ul.menu {
    padding-left: 0; }
    .dropdown-menu ul.menu.tasks h4 {
      color: #333;
      font-size: 13px;
      margin: 0 0 8px 0; }
      .dropdown-menu ul.menu.tasks h4 small {
        float: right;
        margin-top: 6px; }
    .dropdown-menu ul.menu.tasks .progress {
      height: 7px;
      margin-bottom: 7px; }
    .dropdown-menu ul.menu .icon-circle {
      width: 36px;
      height: 36px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%;
      color: #fff;
      text-align: center;
      display: inline-block; }
      .dropdown-menu ul.menu .icon-circle i {
        font-size: 18px;
        line-height: 36px; }
    .dropdown-menu ul.menu li {
      border-bottom: 1px solid #eee; }
      .dropdown-menu ul.menu li:last-child {
        border-bottom: none; }
      .dropdown-menu ul.menu li a {
        padding: 7px 11px;
        text-decoration: none;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s; }
        .dropdown-menu ul.menu li a:hover {
          background-color: #e9e9e9; }
    .dropdown-menu ul.menu .menu-info {
      display: inline-block;
      position: relative;
      top: 3px;
      left: 5px; }
      .dropdown-menu ul.menu .menu-info h4 {
        margin: 0;
        font-size: 13px;
        color: #333; }
      .dropdown-menu ul.menu .menu-info p {
        margin: 0;
        font-size: 11px;
        color: #aaa; }
        .dropdown-menu ul.menu .menu-info p .material-icons {
          font-size: 13px;
          color: #aaa;
          position: relative;
          top: 2px; }
  .dropdown-menu .footer a {
    text-align: center;
    border-top: 1px solid #eee;
    padding: 5px 0 5px 0;
    font-size: 12px;
    margin-bottom: -5px; }
    .dropdown-menu .footer a:hover {
      background-color: transparent; }
  .dropdown-menu > li > a {
    padding: 7px 18px;
    color: #666;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
    font-size: 14px;
    line-height: 25px; }
    .dropdown-menu > li > a:hover {
      background-color: rgba(0, 0, 0, 0.075); }
    .dropdown-menu > li > a i.material-icons {
      float: left;
      margin-right: 7px;
      margin-top: 2px;
      font-size: 20px; }

.dropdown-animated {
  -webkit-animation-duration: .3s !important;
  -moz-animation-duration: .3s !important;
  -o-animation-duration: .3s !important;
  animation-duration: .3s !important; }

/* Left Sidebar & Overlay ====================== */
.overlay {
  position: fixed;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 10; }

.overlay-open .sidebar {
  margin-left: 0;
  z-index: 99999999; }

.sidebar {
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  font-family: "Roboto", sans-serif;
  background: #fdfdfd;
  width: 300px;
  overflow: hidden;
  display: inline-block;
  height: calc(100vh - 70px);
  position: fixed;
  top: 70px;
  left: 0;
  -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 11 !important; }
  .sidebar .legal {
    position: absolute;
    bottom: 0;
    width: 100%;
    border-top: 1px solid #eee;
    padding: 15px;
    overflow: hidden; }
    .sidebar .legal .copyright {
      font-size: 13px;
      white-space: nowrap;
      -ms-text-overflow: ellipsis;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      overflow: hidden; }
      .sidebar .legal .copyright a {
        font-weight: bold;
        text-decoration: none; }
    .sidebar .legal .version {
      white-space: nowrap;
      -ms-text-overflow: ellipsis;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      overflow: hidden;
      margin-top: 5px;
      font-size: 13px; }
  .sidebar .user-info {
    padding: 13px 15px 12px 15px;
    white-space: nowrap;
    position: relative;
    border-bottom: 1px solid #e9e9e9;
     background: url("<?php
                        echo $user_background;
                       ?>") no-repeat no-repeat;
    height: 135px; }
    .sidebar .user-info .image {
      margin-right: 12px;
      display: inline-block; }
      .sidebar .user-info .image img {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        vertical-align: bottom !important; }
    .sidebar .user-info .info-container {
      cursor: default;
      display: block;
      position: relative;
      top: 25px; }
      .sidebar .user-info .info-container .name {
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        font-size: 14px;
        max-width: 200px;
        color: #fff; }
      .sidebar .user-info .info-container .email {
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        font-size: 12px;
        max-width: 200px;
        color: #fff; }
      .sidebar .user-info .info-container .user-helper-dropdown {
        position: absolute;
        right: -3px;
        bottom: -12px;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        box-shadow: none;
        cursor: pointer;
        color: #fff; }
  .sidebar .menu {
    position: relative;
    overflow-y: auto;
    height: 90vh; }
    .sidebar .menu .list {
      list-style: none;
      padding-left: 0; }
      .sidebar .menu .list li.active > :first-child span {
        font-weight: bold; }
      .sidebar .menu .list .header {
        background: #eee;
        font-size: 12px;
        font-weight: 600;
        padding: 8px 16px; }
      .sidebar .menu .list i.material-icons {
        margin-top: 4px; }
      .sidebar .menu .list .menu-toggle:after, .sidebar .menu .list .menu-toggle:before {
        position: absolute;
        top: calc(50% - 14px);
        right: 17px;
        font-size: 19px;
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0);
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s; }
      .sidebar .menu .list .menu-toggle:before {
        content: '+';
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1); }
      .sidebar .menu .list .menu-toggle:after {
        content: '\2013';
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0); }
      .sidebar .menu .list .menu-toggle.toggled:before {
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0); }
      .sidebar .menu .list .menu-toggle.toggled:after {
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1); }
      .sidebar .menu .list a {
        color: #747474;
        position: relative;
        display: inline-flex;
        vertical-align: middle;
        width: 100%;
        padding: 10px 13px; }
        .sidebar .menu .list a:hover, .sidebar .menu .list a:active, .sidebar .menu .list a:focus {
          text-decoration: none !important; }
        .sidebar .menu .list a small {
          position: absolute;
          top: calc(50% - 7.5px);
          right: 15px; }
        .sidebar .menu .list a span {
          margin: 7px 0 7px 12px;
          color: #333;
          font-weight: bold;
          font-size: 14px;
          overflow: hidden; }
      .sidebar .menu .list .ml-menu {
        list-style: none;
        display: none;
        padding-left: 0; }
        .sidebar .menu .list .ml-menu span {
          font-weight: normal;
          font-size: 14px;
          margin: 3px 0 1px 6px; }
        .sidebar .menu .list .ml-menu li a {
          padding-left: 55px;
          padding-top: 7px;
          padding-bottom: 7px; }
        .sidebar .menu .list .ml-menu li.active a.toggled:not(.menu-toggle) {
          font-weight: 600;
          margin-left: 5px; }
          .sidebar .menu .list .ml-menu li.active a.toggled:not(.menu-toggle):before {
            content: '\E315';
            font-family: 'Material Icons';
            position: relative;
            font-size: 21px;
            height: 20px;
            top: -5px;
            right: 0px; }
        .sidebar .menu .list .ml-menu li .ml-menu li a {
          padding-left: 80px; }
        .sidebar .menu .list .ml-menu li .ml-menu .ml-menu li a {
          padding-left: 95px; }

.right-sidebar {
  width: 280px;
  height: calc(100vh - 70px);
  position: fixed;
  right: -300px;
  top: 70px;
  background: #fdfdfd;
  z-index: 11 !important;
  -webkit-box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.1);
  box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s; }
  .right-sidebar.open {
    right: 0; }
  .right-sidebar .nav-tabs {
    font-weight: 600;
    font-size: 13px;
    width: 100%;
    margin-left: 2px; }
    .right-sidebar .nav-tabs li {
      text-align: center; }
      .right-sidebar .nav-tabs li > a {
        margin-right: 0; }
      .right-sidebar .nav-tabs li:first-child {
        width: 45%; }
      .right-sidebar .nav-tabs li:last-child {
        width: 55%; }

/* Bootstrap Notify ============================ */
.bootstrap-notify-container {
  max-width: 320px;
  text-align: center; }

/* Jquery Nestable ============================= */
.dd-handle {
  background-color: #f9f9f9 !important; }
  .dd-handle:hover {
    color: #2196F3; }

.nestable-dark-theme .dd-handle {
  background: #ccc !important;
  border: 1px solid #999 !important; }

.dd3-handle {
  background: #999 !important; }

.dd3-content:hover {
  color: #2196F3; }

/* Login Page ================================== */
.login-page {
  background-color: #00BCD4;
  padding-left: 0;
  max-width: 360px;
  margin: 5% auto;
  overflow-x: hidden; }
  .login-page .login-box .msg {
    color: #555;
    margin-bottom: 30px;
    text-align: center; }
  .login-page .login-box a {
    font-size: 14px;
    text-decoration: none;
    color: #00BCD4; }
  .login-page .login-box .logo {
    margin-bottom: 20px; }
    .login-page .login-box .logo a {
      font-size: 36px;
      display: block;
      width: 100%;
      text-align: center;
      color: #fff; }
    .login-page .login-box .logo small {
      display: block;
      width: 100%;
      text-align: center;
      color: #fff;
      margin-top: -5px; }

/* Sign Up Page ================================ */
.signup-page {
  background-color: #597cc7;
  padding-left: 0;
  max-width: 360px;
  margin: 5% auto;
  overflow-x: hidden; }
  .signup-page .signup-box .msg {
    color: #555;
    margin-bottom: 30px;
    text-align: center; }
  .signup-page .signup-box a {
    font-size: 14px;
    text-decoration: none;
    color: #00BCD4; }
  .signup-page .signup-box .logo {
    margin-bottom: 20px; }
    .signup-page .signup-box .logo a {
      font-size: 36px;
      display: block;
      width: 100%;
      text-align: center;
      color: #fff; }
    .signup-page .signup-box .logo small {
      display: block;
      width: 100%;
      text-align: center;
      color: #fff;
      margin-top: -5px; }

/* Forgot Password Page ======================== */
.fp-page {
  background-color: #00BCD4;
  padding-left: 0;
  max-width: 360px;
  margin: 5% auto;
  overflow-x: hidden; }
  .fp-page .fp-box .msg {
    color: #555;
    margin-bottom: 30px;
    text-align: center; }
  .fp-page .fp-box a {
    font-size: 14px;
    text-decoration: none;
    color: #00BCD4; }
  .fp-page .fp-box .logo {
    margin-bottom: 20px; }
    .fp-page .fp-box .logo a {
      font-size: 36px;
      display: block;
      width: 100%;
      text-align: center;
      color: #fff; }
    .fp-page .fp-box .logo small {
      display: block;
      width: 100%;
      text-align: center;
      color: #fff;
      margin-top: -5px; }

/* 404 Not Found Page ========================== */
.four-zero-four {
  width: 100%;
  text-align: center;
  margin: 5% auto; }
  .four-zero-four .four-zero-four-container .error-code {
    font-size: 160px; }
  .four-zero-four .four-zero-four-container .error-message {
    font-size: 26px;
    color: #333;
    font-weight: bold;
    margin-top: -40px; }
  .four-zero-four .four-zero-four-container .button-place {
    margin-top: 32px; }

/* 500 Server Error Page ======================= */
.five-zero-zero {
  width: 100%;
  text-align: center;
  margin: 5% auto; }
  .five-zero-zero .five-zero-zero-container .error-code {
    font-size: 160px; }
  .five-zero-zero .five-zero-zero-container .error-message {
    font-size: 27px;
    color: #333;
    font-weight: bold;
    margin-top: -40px; }
  .five-zero-zero .five-zero-zero-container .button-place {
    margin-top: 32px; }

/* Profile Page ================================ */
.profile-card .profile-header {
  background-color: #ad1455;
  padding: 42px 0; }

.profile-card .profile-body .image-area {
  text-align: center;
  margin-top: -64px; }
  .profile-card .profile-body .image-area img {
    border: 2px solid #ad1455;
    padding: 2px;
    margin: 2px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }

.profile-card .profile-body .content-area {
  text-align: center;
  border-bottom: 1px solid #ddd;
  padding-bottom: 15px; }
  .profile-card .profile-body .content-area p {
    margin-bottom: 0; }
    .profile-card .profile-body .content-area p:last-child {
      font-weight: 600;
      color: #ad1455;
      margin-top: 5px; }

.profile-card .profile-footer {
  padding: 15px; }
  .profile-card .profile-footer ul {
    margin: 0;
    padding: 0;
    list-style: none; }
    .profile-card .profile-footer ul li {
      border-bottom: 1px solid #eee;
      padding: 10px 0; }
      .profile-card .profile-footer ul li:last-child {
        border-bottom: none;
        margin-bottom: 15px; }
      .profile-card .profile-footer ul li span:first-child {
        font-weight: bold; }
      .profile-card .profile-footer ul li span:last-child {
        float: right; }

.card-about-me .body ul {
  margin: 0;
  padding: 0;
  list-style: none; }
  .card-about-me .body ul li {
    border-bottom: 1px solid #eee;
    margin-bottom: 10px;
    padding-bottom: 15px; }
    .card-about-me .body ul li:last-child {
      border: none;
      margin-bottom: 0;
      padding-bottom: 0; }
    .card-about-me .body ul li .title {
      font-weight: bold;
      color: #666; }
      .card-about-me .body ul li .title i {
        margin-right: 2px;
        position: relative;
        top: 7px; }
    .card-about-me .body ul li .content {
      margin-top: 10px;
      color: #999;
      font-size: 13px; }

.panel-post {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .panel-post .panel-heading {
    background-color: #fff;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
    .panel-post .panel-heading .media {
      margin-bottom: 0; }
      .panel-post .panel-heading .media a img {
        width: 42px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }
      .panel-post .panel-heading .media .media-body {
        padding-top: 5px; }
        .panel-post .panel-heading .media .media-body h4 {
          font-size: 14px; }
          .panel-post .panel-heading .media .media-body h4 a {
            color: #666; }
  .panel-post .panel-body {
    padding: 0; }
    .panel-post .panel-body .post .post-heading {
      padding: 12px 15px; }
      .panel-post .panel-body .post .post-heading p {
        margin-bottom: 0; }
  .panel-post .panel-footer {
    background-color: #fff;
    border: none; }
    .panel-post .panel-footer ul {
      margin: 0;
      padding: 0;
      list-style: none; }
      .panel-post .panel-footer ul li {
        display: inline-block;
        margin-right: 12px; }
        .panel-post .panel-footer ul li:last-child {
          float: right;
          margin-right: 0; }
        .panel-post .panel-footer ul li a {
          color: #777;
          text-decoration: none; }
          .panel-post .panel-footer ul li a i {
            font-size: 16px;
            position: relative;
            top: 4px;
            margin-right: 2px; }
          .panel-post .panel-footer ul li a span {
            font-size: 13px; }
    .panel-post .panel-footer .form-group {
      margin-bottom: 5px;
      margin-top: 20px; }

/* Maps ======================================== */
/* Google Maps */
.gmap {
  width: 100%;
  height: 400px; }

/* jVector Map */
.jvector-map {
  width: 100%;
  height: 600px; }

/* Charts ====================================== */
/* Morris */
.morris-hover.morris-default-style {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }

/* Flot */
.flot-chart {
  width: 100%;
  height: 320px; }

.panel-switch-btn {
  position: relative;
  right: 20px;
  z-index: 9; }
  .panel-switch-btn label {
    font-weight: bold !important; }

.legendLabel {
  width: 85px !important;
  position: relative;
  left: 3px; }

#multiple_axis_chart .legendLabel {
  width: 160px !important; }

/* Sparkline */
.sparkline {
  text-align: center; }

/* Searchbar =================================== */
.search-bar {
  position: fixed;
  top: -100px;
  left: 0;
  z-index: 9999999;
  width: 100%;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s; }
  .search-bar.open {
    top: 0; }
  .search-bar .search-icon {
    position: absolute;
    top: 20px;
    left: 14px; }
    .search-bar .search-icon .material-icons {
      font-size: 32px;
      color: #999; }
  .search-bar .close-search {
    position: absolute;
    cursor: pointer;
    font-size: 30px;
    top: 16px;
    right: 18px; }
    .search-bar .close-search .material-icons {
      color: #999;
      opacity: 1;
      -moz-transition: 0.5s;
      -o-transition: 0.5s;
      -webkit-transition: 0.5s;
      transition: 0.5s; }
      .search-bar .close-search .material-icons:hover {
        opacity: .5; }
  .search-bar input[type="text"] {
    width: 100%;
    font-size: 16px;
    padding: 25px 60px 23px 56px;
    border: none; }

/* Jquery DataTable ============================ */
.dataTables_wrapper {
  position: relative; }
  .dataTables_wrapper select {
    border: none;
    border-bottom: 1px solid #ddd;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    box-shadow: none; }
    .dataTables_wrapper select:active, .dataTables_wrapper select:focus {
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      -ms-box-shadow: none;
      box-shadow: none; }
  .dataTables_wrapper input[type="search"] {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    box-shadow: none;
    border: none;
    font-size: 12px;
    border-bottom: 1px solid #ddd; }
    .dataTables_wrapper input[type="search"]:focus, .dataTables_wrapper input[type="search"]:active {
      border-bottom: 2px solid #1f91f3; }
  .dataTables_wrapper .dt-buttons {
    float: left;
    margin-top: 10px;
   }
    .dataTables_wrapper .dt-buttons a.dt-button {
      background-color: #597cc7;
      color: #fff;
      padding: 7px 12px;
      //padding-top: 50px;
      margin-right: 5px;
      text-decoration: none;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      -ms-border-radius: 2px;
      border-radius: 2px;
      border: none;
      font-size: 13px;
      outline: none; }
      .dataTables_wrapper .dt-buttons a.dt-button:active {
        opacity: 0.8; }

.dt-button-info {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 400px;
  text-align: center;
  background-color: #fff;
  border: 2px solid #999;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  margin-top: -100px;
  margin-left: -200px;
  z-index: 21; }
  .dt-button-info h2 {
    color: #777; }
  .dt-button-info div {
    color: #777;
    margin-bottom: 20px; }

/* Light Gallery ================================ */
.lg-outer .lg-thumb-item,
.lg-outer .lg-toogle-thumb {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  -ms-border-radius: 0 !important;
  border-radius: 0 !important; }

/* For Internet Explorer 10 ===================== */
html.ie10 .sidebar .menu .list li {
  line-height: 30px; }

html.ie10 .sidebar .menu .list .ml-menu li.active a:not(.menu-toggle).toggled:before {
  top: 6px !important;
  line-height: 20px !important; }

html.ie10 .sidebar .user-info .info-container {
  top: 15px; }

html.ie10 .search-bar input[type="text"] {
  padding: 26px 60px 26px 56px; }

html.ie10 .dropdown-menu ul.menu li a {
  margin-top: -22px; }

html.ie10 .bs-searchbox .form-control {
  width: 90%; }

/* For Internet Explorer 11 ===================== */
html.ie11 .sidebar .menu .list .ml-menu li.active a:not(.menu-toggle).toggled:before {
  top: 6px !important;
  line-height: 20px !important; }

html.ie11 .sidebar .user-info .info-container {
  top: 15px; }

html.ie11 .search-bar input[type="text"] {
  padding: 26px 60px 26px 56px; }

html.ie11 .dropdown-menu ul.menu li a {
  margin-top: -22px; }

html.ie11 .bs-searchbox .form-control {
  width: 90%; }
