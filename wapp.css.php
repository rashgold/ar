/* 
 * abudrach - CSS
 */

#attentionGrabberWrap{
  display: none;
  margin: 0;
	padding: 0;
	position: fixed;
	left: 0;
	top: -35px;
	
	z-index: 99999;
	width: 100%;
	height: 35px;
}

#attentionGrabber{
	width: 100%;
	height: 35px;
	margin: 0;
	padding: 0;
	font: bold 16px/35px arial, sans-serif;
	color: #000000;
	text-align: center;
	background: #c1e6f7;
	border-bottom: 0px solid #ffffff;
	position: relative;
	z-index: 3;
}

#attentionGrabber a{
	font: bold 16px/35px arial, sans-serif;
	color: #fa6000;
	text-decoration: none;
	cursor: pointer;
	outline: none;
}

#attentionGrabber a:hover{
	color: #0048ad;
}

#attentionGrabberWrap #closeAttentionGrabber{
	display: block;
	position: absolute;
	top: 0;
	right: 22px;
	height: 35px;
	width: 21px;
	background: url(http://www.arageek.com/wp-content/plugins/attentionGrabber_v1.5/img/buttons/dark.png) no-repeat 0 center;
	cursor: pointer;
}

#attentionGrabberWrap #closeAttentionGrabber:hover{
	background-position: -21px 50%;
}

#attentionGrabberWrap.bottomPosition #closeAttentionGrabber{
	background-position: right 50%;
}

#attentionGrabberWrap.bottomPosition #closeAttentionGrabber:hover{
	background-position: -42px 50%;
}

#attentionGrabberWrap #openAttentionGrabber{
	display: block;
	position: absolute;
	top: -1px;
	right: 15px;
	padding: 0 7px;
	background: #c1e6f7;
	border-left: 0px solid #ffffff;
	border-right: 0px solid #ffffff;
	border-bottom: 0px solid #ffffff;
	cursor: pointer;
	z-index: 1;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
}

#attentionGrabberWrap #openAttentionGrabber span{
	display: block;
	width: 21px;
	height: 34px;
	background: url(http://www.arageek.com/wp-content/plugins/attentionGrabber_v1.5/img/buttons/dark.png) no-repeat right 50%;
}

#attentionGrabberWrap #openAttentionGrabber:hover span{
	background-position: -42px 50%;
}

#attentionGrabberWrap.bottomPosition #openAttentionGrabber span{
	background-position: left 50%;
}

#attentionGrabberWrap.bottomPosition #openAttentionGrabber:hover span{
	background-position: -21px 50%;
}

/* - Fix positioning issues with admin bar - */

#attentionGrabberWrap.admBar{
	margin-top: 28px;
}

/* - Like Buttons - */

#attentionGrabberWrap .facebookBtn,
#attentionGrabberWrap .twitterBtn,
#attentionGrabberWrap .plusoneBtn{
	padding-left: 8px;
}


#attentionGrabberWrap .twitterBtn iframe,
#attentionGrabberWrap .plusoneBtn iframe{
    vertical-align: text-bottom;
}

#attentionGrabberWrap .plusoneBtn > div{
	height: auto !important;
}

/* - -- --- Multiple Messages --- -- - */

#attentionGrabberWrap .multiMessages{
	position: relative;
}

#attentionGrabberWrap .multiMessages .singleMessage{
	display: none;
	position: relative;
	z-index: 1;
}

#attentionGrabberWrap .multiMessages .singleMessage.current{
	display: inline;
	z-index: 2;
}


/* - -- --- BY abudrach CSS --- -- - */

/* - -- --- تحياتي للجميع  --- -- - */
