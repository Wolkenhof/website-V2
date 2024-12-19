<?php

// !!! WICHTIG - WICHTIG - WICHTIG !!!
// Die folgende Zeile darf unter keinen Umständen unkommentiert in der Produktion stehen!
// Bei Missachtung dieser Warnung kann jeder fremde Host diese API abfragen.
header("Access-Control-Allow-Origin: *");
// !!! WICHTIG - WICHTIG - WICHTIG !!!

// Uncomment to enable debugging on this script
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$version = "1.0-development2";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = "jgu@wolkenhof.com";
  $from = $_POST['mail'];
  $name = $_POST['name'];
  $tel = $_POST['phone'];
  $datenschutz = $_POST['datenschutz'];
  $comment = $_POST['comment'];
  $subject = "wolkenhof Kontaktformular: Von " . $name . "";
  $message = '
  <!DOCTYPE html>
	<html
	  lang="de"
	  xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:v="urn:schemas-microsoft-com:vml"
	  xmlns:o="urn:schemas-microsoft-com:office:office"
	>
	  <head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="x-apple-disable-message-reformatting" />
		<title>wolkenhof: Neue Nachricht vom Kontaktformular</title>
		<!-- The title tag shows in email notifications -->

		<link
		  href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700"
		  rel="stylesheet"
		/>

		<!-- CSS Reset : BEGIN -->
		<style>
		  /* What it does: Remove spaces around the email design added by some email clients. */
		  /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
		  html,
		  body {
			margin: 0 auto !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
			background: #f1f1f1;
		  }

		  /* What it does: Stops email clients resizing small text. */
		  * {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		  }

		  /* What it does: Centers email on Android 4.4 */
		  div[style*="margin: 16px 0"] {
			margin: 0 !important;
		  }

		  /* What it does: Stops Outlook from adding extra spacing to tables. */
		  table,
		  td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
		  }

		  /* What it does: Fixes webkit padding issue. */
		  table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			margin: 0 auto !important;
		  }

		  /* What it does: Uses a better rendering method when resizing images in IE. */
		  img {
			-ms-interpolation-mode: bicubic;
		  }

		  /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
		  a {
			text-decoration: none;
		  }

		  /* What it does: A work-around for email clients meddling in triggered links. */
		  *[x-apple-data-detectors],  /* iOS */
		.unstyle-auto-detected-links *,
		.aBn {
			border-bottom: 0 !important;
			cursor: default !important;
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		  }

		  /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
		  .a6S {
			display: none !important;
			opacity: 0.01 !important;
		  }

		  /* What it does: Prevents Gmail from changing the text color in conversation threads. */
		  .im {
			color: inherit !important;
		  }

		  /* If the above doesnt work, add a .g-img class to any image in question. */
		  img.g-img + div {
			display: none !important;
		  }

		  /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */

		  /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
		  @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
			u ~ div .email-container {
			  min-width: 320px !important;
			}
		  }
		  /* iPhone 6, 6S, 7, 8, and X */
		  @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
			u ~ div .email-container {
			  min-width: 375px !important;
			}
		  }
		  /* iPhone 6+, 7+, and 8+ */
		  @media only screen and (min-device-width: 414px) {
			u ~ div .email-container {
			  min-width: 414px !important;
			}
		  }
		</style>

		<!-- CSS Reset : END -->

		<!-- Progressive Enhancements : BEGIN -->
		<style>
		  .primary {
			background: #17bebb;
		  }
		  .bg_white {
			background: #ffffff;
		  }
		  .bg_light {
			background: #f7fafa;
		  }
		  .bg_wh {
			background: #056598;
			color: #fff
		  }
		  .bg_black {
			background: #000000;
		  }
		  .bg_dark {
			background: rgba(0, 0, 0, 0.8);
		  }
		  .email-section {
			padding: 2em;
		  }

		  /*BUTTON*/
		  .btn {
			padding: 10px 15px;
			display: inline-block;
		  }
		  .btn.btn-primary {
			border-radius: 5px;
			background: #17bebb;
			color: #ffffff;
		  }
		  .btn.btn-white {
			border-radius: 5px;
			background: #ffffff;
			color: #000000;
		  }
		  .btn.btn-white-outline {
			border-radius: 5px;
			background: transparent;
			border: 1px solid #fff;
			color: #fff;
		  }
		  .btn.btn-black-outline {
			border-radius: 0px;
			background: transparent;
			border: 2px solid #000;
			color: #000;
			font-weight: 700;
		  }
		  .btn-custom {
			color: rgba(0, 0, 0, 0.3);
			text-decoration: underline;
		  }

		  h1,
		  h2,
		  h3,
		  h4,
		  h5,
		  h6 {
			font-family: "Poppins", sans-serif;
			color: #000000;
			margin-top: 0;
			font-weight: 400;
		  }

		  body {
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-size: 15px;
			line-height: 1.8;
			color: rgba(0, 0, 0, 0.4);
		  }

		  a {
			color: #17bebb;
		  }

		  /*LOGO*/
		  .logo h1 {
			margin: 0;
		  }
		  .logo h1 a {
			color: #17bebb;
			font-size: 24px;
			font-weight: 700;
			font-family: "Poppins", sans-serif;
		  }

		  /*HERO*/
		  .hero {
			position: relative;
			z-index: 0;
		  }

		  .hero .text {
			color: rgba(0, 0, 0, 0.3);
		  }
		  .hero .text h2 {
			color: #000;
			font-size: 34px;
			margin-bottom: 0;
			font-weight: 200;
			line-height: 1.4;
		  }
		  .hero .text h3 {
			font-size: 24px;
			font-weight: 300;
		  }
		  .hero .text h2 span {
			font-weight: 600;
			color: #000;
		  }

		  .text-author {
			border: 1px solid rgba(0, 0, 0, 0.05);
			max-width: 50%;
			margin: 0 auto;
			padding: 2em;
		  }
		  .text-author img {
			border-radius: 50%;
			padding-bottom: 20px;
		  }
		  .text-author h3 {
			margin-bottom: 0;
		  }
		  ul.social {
			padding: 0;
		  }
		  ul.social li {
			display: inline-block;
			margin-right: 10px;
		  }

		  /*FOOTER*/
		  .footer {
			border-top: 1px solid rgba(0, 0, 0, 0.05);
			color: rgba(0, 0, 0, 0.5);
		  }
		  .footer .heading {
			color: #000;
			font-size: 20px;
		  }
		  .footer ul {
			margin: 0;
			padding: 0;
		  }
		  .footer ul li {
			list-style: none;
			margin-bottom: 10px;
		  }
		  .footer ul li a {
			color: rgba(0, 0, 0, 1);
		  }
		</style>
	  </head>

	  <body
		width="100%"
		style="
		  margin: 0;
		  padding: 0 !important;
		  mso-line-height-rule: exactly;
		  background-color: #f1f1f1;
		"
	  >
		<center style="width: 100%; background-color: #f1f1f1">
		  <div
			style="
			  display: none;
			  font-size: 1px;
			  max-height: 0px;
			  max-width: 0px;
			  opacity: 0;
			  overflow: hidden;
			  mso-hide: all;
			  font-family: sans-serif;
			"
		  >
			&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
		  </div>
		  <div style="max-width: 600px; margin: 0 auto" class="email-container">
			<!-- BEGIN BODY -->
			<table
			  align="center"
			  role="presentation"
			  cellspacing="0"
			  cellpadding="0"
			  border="0"
			  width="100%"
			  style="margin: auto"
			>
			  <tr>
				<td
				  valign="top"
				  class="bg_white"
				  style="padding: 1em 2.5em 0 2.5em"
				>
				  <table
					role="presentation"
					border="0"
					cellpadding="0"
					cellspacing="0"
					width="100%"
				  >
					<tr>
					  <td class="logo" style="text-align: center">
						<img width="250"
						  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA3NTUuOTEgMzAyLjM2IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj48bWV0YWRhdGE+PHJkZjpSREY+PGNjOldvcmsgcmRmOmFib3V0PSIiPjxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PjxkYzp0eXBlIHJkZjpyZXNvdXJjZT0iaHR0cDovL3B1cmwub3JnL2RjL2RjbWl0eXBlL1N0aWxsSW1hZ2UiLz48L2NjOldvcms+PC9yZGY6UkRGPjwvbWV0YWRhdGE+PGRlZnM+PGNsaXBQYXRoIGlkPSJvIj48cGF0aCBkPSJtNzI4LjggNTQ4Yy02OS43NjYgMC0xNDMuNTEgMTUuNDYxLTIxMC45NCA0Ni42NzItMTM0LjkxIDYyLjQxOC0yMTkuMzMgMTc3LjE0LTIzMS42NSAzMTQuNjgtMzMuMTk1IDM3MC43OSAyMjMuOTMgNDc5LjgxIDMzMy44OCA1MDkuMjUtOC44NjcgNDEuMi0xNC42OTEgMTA1LjY5IDYuMTcyIDE4Mi44NiAzMy4wMTUgMTIyLjEgMTgyLjI1IDI5Mi4xMSA0MTEuNTUgMjkyLjExIDIuMjQgMCA0LjQzLTAuMDIgNi42Ni0wLjAzIDE4MS4xNi0yLjYgMjg2Ljc0LTEyMS43IDMzMi41OC0xOTAuMTkgMzYuOTMgMjguMTkgOTYuMTEgNjMuNzIgMTY2LjEgNzAuNiA5NS4xNyA5LjQzIDIzMy43MS0zNS41OSAzMDIuOTktMTM3LjM0IDY1LjIxLTk1LjgyIDczLjc0LTIyNC4xMSAyNS41OC0zMjcuNzYtNy4yNy0xNS42NS05NC4xNyAyLjA0LTk0LjE3IDIuMDQgNTUuMjUgODAuMzQgNTUuMjIgMTk3LjY1LTAuMTIgMjc4Ljk1LTQ4LjczIDcxLjU0LTE1NS4yIDEwOC4xMy0yMjYuMTcgMTAxLjM5LTg1LjA2LTguMzUtMTUzLjgyLTc5Ljk5LTE1NC40OS04MC43bC00Mi4yLTQ0LjU0LTI1LjggNTUuNjJjLTMuNTEgNy40OS04OS40NSAxODYtMjg1LjQ4IDE4OC44LTEuNzYgMC4wMi0zLjUzIDAuMDQtNS4yOSAwLjA0LTE4My41NyAwLTMwNi4xOC0xMzYuOTctMzMxLjUtMjMwLjY2LTI3LjUzOS0xMDEuOTEgMi44ODMtMTcyLjM1IDQuMTk5LTE3NS4yOWwyMy4wNzEtNTItNTYuNDM0LTYuNDZjLTEzLjg5OC0xLjYxLTM0Mi44My00My45OC0zMDguMzItNDI5LjI2IDEzLjEyNS0xNDYuNzIgMTIwLjc2LTIxNy41MiAxODMuNzUtMjQ2LjY4IDExNC43NS01My4wNjMgMjU0LjIzLTUyLjAxMiAzMzEuNjQgMi42NiAwIDAgMTYuMjg2LTg3LjY5Mi0xLjQ4NC05NS4zNjQtNDUuMzUyLTE5LjU0Ni05OC40NzMtMjkuMzk4LTE1NC4xMi0yOS4zOTh6Ii8+PC9jbGlwUGF0aD48bGluZWFyR3JhZGllbnQgaWQ9ImQiIHgyPSIxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDc5OC4xNiAxMzgyLjUgMTM4Mi41IC03OTguMTYgNjY5LjcgNTA0Ljc4KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiM0MGI5M2MiIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iLjk5ODk1Ii8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIxIi8+PC9saW5lYXJHcmFkaWVudD48Y2xpcFBhdGggaWQ9Im4iPjxwYXRoIGQ9Im0xNTEzLjkgNjk2LjQyaC04NS40OWwtMTA3Ljk2IDMzMS43MWMtMi43MiA4LjQ2LTUuNjcgMTguMDYtOC44NSAyOC43N2wtOS4yMyAzMS4zMWMtMC45MiAzLjAxLTEuODMgNi4wMy0yLjcyIDkuMDUtMC44Ni0zLTEuNzEtNS45OS0yLjU0LTguOTctMy4zOS0xMC40NS02LjY4LTIwLjkyLTkuOTYtMzEuNjctMy4zMy0xMC44Ni02LjUyLTIwLjgyLTkuNS0yOS45bC0xMDkuODEtMzMwLjNoLTg0LjE1bC0xNjQuNTggNDg5LjU0aDgwLjQ0MmwxMTAuMjMtMzQzLjljMi40My03LjYyOSA1LjAxLTE2LjU5OCA3Ljc1LTI2LjkzIDIuNjgtMTAuMTE3IDUuMzUtMTkuNjQxIDguMDMtMjguNTcgMC41MS0xLjc4OSAxLjAyLTMuNTcxIDEuNTEtNS4zNiAwLjY3IDIuMzUyIDEuMzIgNC43MTEgMS45NyA3LjAyIDIuNzMgOS40MDIgNS42IDE5LjA0MyA4LjYyIDI4Ljk2MSAyLjk0IDkuODIgNS4zNCAxOC4wMTkgNy4xNCAyNC41NWwxMTUuMzIgMzQ0LjIzaDgxLjA1bDExOS4yNS0zNzEuOTNjMi43Ni0xMC4zNTkgNS40NC0xOS44ODMgOC4xMS0yOC44MTIgMC41MS0xLjUzOSAxLTMuMTEgMS40OS00LjY0OSAwLjUyIDEuODA5IDEuMDMgMy42MjkgMS41NiA1LjQ0MiAyLjc2IDguODY3IDUuNiAxOC4yMTggOC41OCAyOC4yMjYgMi45NiAxMCA1LjY4IDE5LjE5MiA4LjA4IDI3LjU4MmwxMTQuMzkgMzQ0LjE0aDc5LjF6Ii8+PC9jbGlwUGF0aD48bGluZWFyR3JhZGllbnQgaWQ9ImMiIHgyPSIxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDM2MS40OSA2MjYuMTIgNjI2LjEyIC0zNjEuNDkgMTA3Ny4zIDcwMC4xKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iLjk5ODk1Ii8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIxIi8+PC9saW5lYXJHcmFkaWVudD48Y2xpcFBhdGggaWQ9Im0iPjxwYXRoIGQ9Im0xOTY0LjEgMTEzMC4zYy01Mi4wNSAwLTkyLjQxLTE1LjYzLTExOS45OS00Ni40Ny0yNy44LTMxLjA5LTQxLjktNzkuMTYtNDEuOS0xNDIuODggMC0zMi42NDkgMy45LTYxLjIzMSAxMS41NS04NC45MyA3LjU1LTIzLjQxOCAxOC4zNi00My4wNTkgMzIuMTQtNTguNDE4IDEzLjctMTUuMjQyIDMwLjEzLTI2Ljc1IDQ4Ljg0LTM0LjE3MiAxOC45NC03LjU1MSA0MC4zMS0xMS4zOSA2My41Mi0xMS4zOSA1MS44MSAwIDkyLjI3IDE1LjIyMiAxMjAuMzIgNDUuMjQyIDI4LjE4IDMwLjE0OCA0Mi40NyA3OC40ODggNDIuNDcgMTQzLjY3IDAgNjUuMjYxLTEzLjM3IDExMy43NC0zOS43NCAxNDQuMS0yNi4wOSAzMC4wMy02NS41MiA0NS4yNS0xMTcuMjEgNDUuMjV6bS00LjUtNDQzLjM2Yy0zOC4wNSAwLTcyLjM3IDYuMjUtMTAyLjA0IDE4LjU5LTI5Ljc5IDEyLjQzNy01NS4wNSAzMC4yMzgtNzUuMDYgNTIuOTE4LTE5Ljk2IDIyLjU5LTM1LjMzIDQ5Ljc2MS00NS42NSA4MC43OTMtMTAuMjcgMzAuNzU4LTE1LjQ5IDY0Ljk3Ni0xNS40OSAxMDEuNzEgMCAzNi4wNDMgNC44OSA2OS43MDEgMTQuNTUgMTAwLjAyIDkuNzIgMzAuNTggMjQuNyA1Ny41NyA0NC41NSA4MC4yIDE5LjkgMjIuNjkgNDUuMjEgNDAuNzIgNzUuMjYgNTMuNTcgMjkuOTUgMTIuOCA2NS42NyAxOS4zIDEwNi4xMyAxOS4zIDQyLjU0IDAgNzkuNTktNi40MSAxMTAuMTEtMTkuMDQgMzAuNy0xMi43NCA1Ni4wMS0zMC42NiA3NS4yLTUzLjI0IDE5LjA4LTIyLjUxIDMzLjM3LTQ5LjUgNDIuNDgtODAuMjYgOS4wMy0zMC40OCAxMy42MS02NC4zMDkgMTMuNjEtMTAwLjU1IDAtMzYuNjY4LTUuMTMtNzAuNzk3LTE1LjI0LTEwMS40Ny0xMC4yLTMwLjg5OC0yNS43NS01Ny45NjktNDYuMi04MC40NjEtMjAuNDgtMjIuNDgtNDYuMjUtNDAuMzItNzYuNTktNTMtMzAuMTktMTIuNjY4LTY1Ljc1LTE5LjA3OC0xMDUuNjItMTkuMDc4eiIvPjwvY2xpcFBhdGg+PGxpbmVhckdyYWRpZW50IGlkPSJiIiB4Mj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyNTguNzggNDQ4LjIzIDQ0OC4yMyAtMjU4Ljc4IDE4MzMuMSA3MTcuNTYpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIuOTk4OTUiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxjbGlwUGF0aCBpZD0ibCI+PHBhdGggZD0ibTIzODUuOCA2OTYuNDJoLTc5LjUxdjY5MC43Mmg3OS41MXoiLz48L2NsaXBQYXRoPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMzE4Ljk3IDU1Mi40NyA1NTIuNDcgLTMxOC45NyAyMTg2LjYgNzY1LjU1KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iLjk5ODk1Ii8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIxIi8+PC9saW5lYXJHcmFkaWVudD48Y2xpcFBhdGggaWQ9ImsiPjxwYXRoIGQ9Im0yOTQxLjYgNjk2LjQyaC05Ni4xN2wtMi4zNSAyLjg0LTE4Ny44OSAyMjguNjQtNTcuMDktNTEuNjA5di0xNzkuODdoLTc5LjV2NjkwLjcyaDc5LjV2LTQyNC4zNmwyMzMuNDkgMjIzLjE4aDk5LjhsLTIyMC42Mi0yMDYuNTR6Ii8+PC9jbGlwUGF0aD48bGluZWFyR3JhZGllbnQgaWQ9ImoiIHgyPSIxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDMxOC45NyA1NTIuNDcgNTUyLjQ3IC0zMTguOTcgMjUyNy43IDY5MS4xOCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9Ii45OTg5NSIvPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iMSIvPjwvbGluZWFyR3JhZGllbnQ+PGNsaXBQYXRoIGlkPSJ0Ij48cGF0aCBkPSJtMzA0OS44IDk4Mi41MWgyOTYuMTFjLTIuMDMgMjEuMTM4LTUuOTYgNDAuNTE4LTExLjcyIDU3LjcwOC02LjQgMTkuMDEtMTUuNTcgMzUuMzctMjcuMjggNDguNjItMTEuNjEgMTMuMTMtMjYuMTggMjMuNDQtNDMuMjkgMzAuNi0xNy4yOSA3LjIzLTM4LjIzIDEwLjg4LTYyLjI1IDEwLjg4LTE5LjI2IDAtMzguMDktMi44NC01NS45Ny04LjQyLTE3LjYtNS41LTMzLjQ0LTE0LjQ5LTQ3LjEtMjYuNzMtMTMuNjUtMTIuMjUtMjUuMDYtMjguNDEtMzMuODctNDguMDEtOC4wMS0xNy44NC0xMi45Mi0zOS41NS0xNC42My02NC42NDh6bTE1My4zNS0yOTUuNTVjLTM1LjU3IDAtNjguMyA1LjUzOS05Ny4yOCAxNi41LTI5LjIgMTEtNTQuMzQgMjcuNzE5LTc0LjcyIDQ5LjY4Ny0yMC4yOSAyMS44MDEtMzYuMjIgNDguOTkzLTQ3LjM0IDgwLjgyMS0xMS4wNCAzMS41OS0xNi42NCA2OC42NC0xNi42NCAxMTAuMTQgMCA0Ni4xOTIgNi44IDg1LjY4MSAyMC4xOSAxMTcuMzcgMTMuNDUgMzEuODMgMzEuNDYgNTcuOTggNTMuNTEgNzcuNyAyMi4wOCAxOS43NSA0Ny41MyAzNC4wMiA3NS42NiA0Mi40IDI3Ljc5IDguMjggNTYuMzMgMTIuNDggODQuODQgMTIuNDggMzguMzkgMCA3Mi4xNi02LjI3IDEwMC4zMy0xOC42NSAyOC4zNS0xMi40OCA1MS45OC0zMC4yNiA3MC4yMy01Mi44OSAxOC4xNi0yMi41MiAzMS43NC00OS40IDQwLjM4LTc5Ljk3IDguNTUtMzAuMjUgMTIuODktNjMuOTggMTIuODktMTAwLjI1di0yMi4xNzJoLTM3Ny4wOGMwLjU4LTIyLjM5MSAzLjY5LTQzLjY0MSA5LjI3LTYzLjIzOCA2LjE1LTIxLjUxMiAxNS43MS00MC4yNjIgMjguNDUtNTUuNjYxIDEyLjY4LTE1LjM3OCAyOS4wNC0yNy43ODEgNDguNTgtMzYuODUxIDE5LjU3LTkuMDUxIDQzLjQ1LTEzLjY2IDcwLjk5LTEzLjY2IDM0Ljk0IDAgNjQuNjcgNy42MTMgODguMzEgMjIuNjMzIDIzLjQ4IDE0LjkxIDQwLjA2IDM1LjA5NyA0OS4zMSA2MC4wMzlsMi4yNSA2LjA4OSA3NS4xNy0xMy4wODktMy40My04Ljg3MWMtNS4yOS0xMy42OTItMTMuMTUtMjguMzYtMjMuMjgtNDMuNTc5LTEwLjM2LTE1LjU1LTI0LjE2LTI5LjgzMi00MC45OS00Mi40NDEtMTYuNzYtMTIuNTUxLTM3LjU0LTIzLjIzLTYxLjczLTMxLjcxMS0yNC4zMy04LjUyNy01My44Ny0xMi44MjgtODcuODctMTIuODI4eiIvPjwvY2xpcFBhdGg+PGxpbmVhckdyYWRpZW50IGlkPSJpIiB4Mj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyNTUuMzEgNDQyLjIyIDQ0Mi4yMiAtMjU1LjMxIDMwNzQuNiA3MTguMzEpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIuOTk4OTUiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxjbGlwUGF0aCBpZD0icyI+PHBhdGggZD0ibTM5NTQuOCA2OTYuNDJoLTc4LjE1djI4NS41YzAgMjEuNDQ4LTIuMjcgNDEuNjU4LTYuNzYgNjAuMDM4LTQuNCAxNy45NC0xMS41OCAzMy42NS0yMS4zOCA0Ni42OC05LjY5IDEyLjg0LTIyLjQ3IDIyLjkzLTM3Ljk3IDMwLjAxLTE1LjY5IDcuMTUtMzUuMzUgMTAuNzUtNTguNDIgMTAuNzUtMjAuOTcgMC00MC40Ny00LjEzLTU3LjkyLTEyLjMxLTE3LjU3LTguMjItMzIuOTMtMTkuNTctNDUuNjgtMzMuNzEtMTIuNzctMTQuMjItMjIuODctMzEuMjMtMjkuOTktNTAuNTktNy4xNS0xOS40Ni0xMC43Ni00MC42NjktMTAuNzYtNjMuMDI4di0yNzMuMzRoLTc5LjUxdjM3NS41MmMwIDEwLjE4LTAuMDcgMjEuMTYtMC4yMiAzMi45OS0wLjE2IDExLjc5LTAuMzggMjIuNzktMC42NyAzMi45Ni0wLjMgMTAuMjEtMC41MyAxOS4wMS0wLjY3IDI2LjQtMC4xNiA3LjQtMC4yNCAxMi4wNS0wLjI0IDEzLjg4djcuNzloNzMuNjZ2LTcuNzljMC0xLjE2IDAuMjktNS43OCAwLjg3LTEzLjg0IDAuMzMtOC45OSAwLjctMTguNjMgMS4xNi0yOS4yNmwxLjM0LTMxLjk2YzAtMC4yIDAuMDItMC40MyAwLjAyLTAuNjMgMTguMDIgMjcuNTcgMzkuMjMgNDkgNjMuMjUgNjMuODYgMjkuNzcgMTguMzggNjUuODkgMjcuNzIgMTA3LjQxIDI3LjcyIDMzLjA2IDAgNjEuNDctNS4zMiA4NC40Ni0xNS43OSAyMy4xMy0xMC41NSA0Mi4wNS0yNS4wOCA1Ni4yMy00My4yMiAxNC4xMS0xOC4wMiAyNC40My0zOS4zNSAzMC42OS02My40IDYuMTMtMjMuNjQgOS4yNS00OC45NiA5LjI1LTc1LjMzeiIvPjwvY2xpcFBhdGg+PGxpbmVhckdyYWRpZW50IGlkPSJoIiB4Mj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyOTEuNjQgNTA1LjEzIDUwNS4xMyAtMjkxLjY0IDM1ODEuNiA2NjUuNjUpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIuOTk4OTUiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxjbGlwUGF0aCBpZD0iciI+PHBhdGggZD0ibTQ1MTAuNSA2OTYuNDJoLTc4LjE1djI5Mi43YzAgMjEuMzg5LTIuMzMgNDEuMDk5LTYuOTQgNTguNTQ5LTQuNTEgMTYuOTgtMTEuNzkgMzEuNzMtMjEuNjkgNDMuODctOS44IDEyLjAxLTIyLjczIDIxLjM5LTM4LjM2IDI3Ljg4LTE1Ljk0IDYuNjQtMzUuMzEgOS45OC01Ny41NSA5Ljk4LTIwLjk2IDAtNDAuNDYtNC4xMy01Ny45MS0xMi4zMS0xNy41Ny04LjIyLTMyLjk0LTE5LjU3LTQ1LjY4LTMzLjcxLTEyLjc2LTE0LjIyLTIyLjg3LTMxLjIzLTMwLTUwLjU5LTcuMTQtMTkuNDYtMTAuNzUtNDAuNjY5LTEwLjc1LTYzLjAyOHYtMjczLjM0aC03OS41djY5MC43Mmg3OS41di0yMTIuMTJjMC0xMC41Ny0wLjE2LTIxLjMtMC40NS0zMi4xNi0wLjYtMTEuMjYtMS4wNS0yMS4yNy0xLjM1LTMwLjIyLTAuMDktMi4zNy0wLjE3LTQuNjQtMC4yNS02LjgzIDE3LjU0IDI1Ljk5IDM3Ljk5IDQ2LjI4IDYxLjA0IDYwLjUzIDI5Ljc3IDE4LjM4IDY1Ljg5IDI3LjcyIDEwNy40MSAyNy43MiAzMS40NyAwIDU4Ljg3LTQuNTkgODEuNDMtMTMuNiAyMi44LTkuMTMgNDEuNzktMjIuMTggNTYuNS0zOC43NiAxNC42MS0xNi40OSAyNS41NS0zNi42NSAzMi40Ny01OS44OCA2Ljc4LTIyLjg1IDEwLjIzLTQ4Ljc0IDEwLjIzLTc2Ljk1eiIvPjwvY2xpcFBhdGg+PGxpbmVhckdyYWRpZW50IGlkPSJnIiB4Mj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgzMTguOTcgNTUyLjQ3IDU1Mi40NyAtMzE4Ljk3IDQwOTQuNCA2OTAuNDEpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIuOTk4OTUiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxjbGlwUGF0aCBpZD0icSI+PHBhdGggZD0ibTQ4NTQuMSAxMTMwLjNjLTUyLjA1IDAtOTIuNDEtMTUuNjMtMTE5Ljk5LTQ2LjQ3LTI3Ljc5LTMxLjA5LTQxLjktNzkuMTYtNDEuOS0xNDIuODggMC0zMi42NDkgMy45LTYxLjIzMSAxMS41NS04NC45MyA3LjU1LTIzLjQxOCAxOC4zNi00My4wNTkgMzIuMTQtNTguNDE4IDEzLjctMTUuMjQyIDMwLjE0LTI2Ljc1IDQ4Ljg0LTM0LjE3MiAxOC45NC03LjU1MSA0MC4zMS0xMS4zOSA2My41Mi0xMS4zOSA1MS44MSAwIDkyLjI3IDE1LjIyMiAxMjAuMzIgNDUuMjQyIDI4LjE4IDMwLjE0OCA0Mi40NyA3OC40ODggNDIuNDcgMTQzLjY3IDAgNjUuMjYxLTEzLjM3IDExMy43NC0zOS43MyAxNDQuMS0yNi4xIDMwLjAzLTY1LjUzIDQ1LjI1LTExNy4yMiA0NS4yNXptLTQuNS00NDMuMzZjLTM4LjA1IDAtNzIuMzYgNi4yNS0xMDIuMDMgMTguNTktMjkuNzkgMTIuNDM3LTU1LjA2IDMwLjIzOC03NS4wNiA1Mi45MTgtMTkuOTcgMjIuNTktMzUuMzMgNDkuNzYxLTQ1LjY2IDgwLjc5My0xMC4yNyAzMC43NTgtMTUuNDkgNjQuOTc2LTE1LjQ5IDEwMS43MSAwIDM2LjA0MyA0Ljg5IDY5LjcwMSAxNC41NiAxMDAuMDIgOS43MSAzMC41OCAyNC42OSA1Ny41NyA0NC41NCA4MC4yIDE5LjkgMjIuNjkgNDUuMjEgNDAuNzIgNzUuMjYgNTMuNTcgMjkuOTYgMTIuOCA2NS42NyAxOS4zIDEwNi4xMyAxOS4zIDQyLjU0IDAgNzkuNTktNi40MSAxMTAuMTEtMTkuMDQgMzAuNy0xMi43NCA1Ni4wMS0zMC42NiA3NS4yMS01My4yNCAxOS4wNy0yMi41MSAzMy4zNi00OS41IDQyLjQ3LTgwLjI2IDkuMDMtMzAuNDggMTMuNjItNjQuMzA5IDEzLjYyLTEwMC41NSAwLTM2LjY2OC01LjE0LTcwLjc5Ny0xNS4yNS0xMDEuNDctMTAuMi0zMC44OTgtMjUuNzUtNTcuOTY5LTQ2LjItODAuNDYxLTIwLjQ3LTIyLjQ4LTQ2LjI1LTQwLjMyLTc2LjU4LTUzLTMwLjItMTIuNjY4LTY1Ljc2LTE5LjA3OC0xMDUuNjMtMTkuMDc4eiIvPjwvY2xpcFBhdGg+PGxpbmVhckdyYWRpZW50IGlkPSJmIiB4Mj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyNTguNzggNDQ4LjIzIDQ0OC4yMyAtMjU4Ljc4IDQ3MjMgNzE3LjU2KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiMyZDYyOTciIG9mZnNldD0iLjk5ODk1Ii8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIxIi8+PC9saW5lYXJHcmFkaWVudD48Y2xpcFBhdGggaWQ9InAiPjxwYXRoIGQ9Im01Mjg3LjUgNjk2LjQyaC03OC41OXY0MjRoLTY5Ljc3djY1LjU0aDY5Ljc3djY1LjEyYzAgMTguNDEgMS41NiAzNS44IDQuNjQgNTEuNjcgMy4yMSAxNi40OSA5LjI0IDMxLjEzIDE3Ljk0IDQzLjUgOC44NyAxMi42NyAyMS4zNyAyMi43MSAzNy4xMiAyOS44NiAyMS4zNSA5LjY2IDUyLjg0IDEyLjU2IDg2LjU5IDkuMjEgOS4yNS0wLjkzIDE3LjI1LTIuMDMgMjQuMDMtMy4yNWw2LjQxLTEuMTZ2LTY0LjgzbC05LjEzIDEuNmMtNC45NyAwLjg3LTEwLjc0IDEuNjctMTcuMzEgMi40LTE5LjE2IDIuMTctMzUuNDEgMS4wNS00NS42Ni0zLjk4LTYuNjgtMy4yNy0xMi4wMi03LjgzLTE1Ljg5LTEzLjU4LTMuOTYtNS44OC02LjY2LTEzLjUxLTcuOTgtMjIuNjItMS40NC05Ljk0LTIuMTctMjEuMTUtMi4xNy0zMy4zMnYtNjAuNjJoOTguMTR2LTY1LjU0aC05OC4xNHoiLz48L2NsaXBQYXRoPjxsaW5lYXJHcmFkaWVudCBpZD0iZSIgeDI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMzQwLjU4IDU4OS45IDU4OS45IC0zNDAuNTggNTEwNiA3NTUuODQpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzJkNjI5NyIgb2Zmc2V0PSIuOTk4OTUiLz48c3RvcCBzdG9wLWNvbG9yPSIjMmQ2Mjk3IiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48ZyB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMgMCAwIC0xLjMzMzMgMCAzMDIuMzYpIj48ZyB0cmFuc2Zvcm09InNjYWxlKC4xKSI+PGcgY2xpcC1wYXRoPSJ1cmwoI28pIj48cGF0aCBkPSJtNzI4LjggNTQ4Yy02OS43NjYgMC0xNDMuNTEgMTUuNDYxLTIxMC45NCA0Ni42NzItMTM0LjkxIDYyLjQxOC0yMTkuMzMgMTc3LjE0LTIzMS42NSAzMTQuNjgtMzMuMTk1IDM3MC43OSAyMjMuOTMgNDc5LjgxIDMzMy44OCA1MDkuMjUtOC44NjcgNDEuMi0xNC42OTEgMTA1LjY5IDYuMTcyIDE4Mi44NiAzMy4wMTUgMTIyLjEgMTgyLjI1IDI5Mi4xMSA0MTEuNTUgMjkyLjExIDIuMjQgMCA0LjQzLTAuMDIgNi42Ni0wLjAzIDE4MS4xNi0yLjYgMjg2Ljc0LTEyMS43IDMzMi41OC0xOTAuMTkgMzYuOTMgMjguMTkgOTYuMTEgNjMuNzIgMTY2LjEgNzAuNiA5NS4xNyA5LjQzIDIzMy43MS0zNS41OSAzMDIuOTktMTM3LjM0IDY1LjIxLTk1LjgyIDczLjc0LTIyNC4xMSAyNS41OC0zMjcuNzYtNy4yNy0xNS42NS05NC4xNyAyLjA0LTk0LjE3IDIuMDQgNTUuMjUgODAuMzQgNTUuMjIgMTk3LjY1LTAuMTIgMjc4Ljk1LTQ4LjczIDcxLjU0LTE1NS4yIDEwOC4xMy0yMjYuMTcgMTAxLjM5LTg1LjA2LTguMzUtMTUzLjgyLTc5Ljk5LTE1NC40OS04MC43bC00Mi4yLTQ0LjU0LTI1LjggNTUuNjJjLTMuNTEgNy40OS04OS40NSAxODYtMjg1LjQ4IDE4OC44LTEuNzYgMC4wMi0zLjUzIDAuMDQtNS4yOSAwLjA0LTE4My41NyAwLTMwNi4xOC0xMzYuOTctMzMxLjUtMjMwLjY2LTI3LjUzOS0xMDEuOTEgMi44ODMtMTcyLjM1IDQuMTk5LTE3NS4yOWwyMy4wNzEtNTItNTYuNDM0LTYuNDZjLTEzLjg5OC0xLjYxLTM0Mi44My00My45OC0zMDguMzItNDI5LjI2IDEzLjEyNS0xNDYuNzIgMTIwLjc2LTIxNy41MiAxODMuNzUtMjQ2LjY4IDExNC43NS01My4wNjMgMjU0LjIzLTUyLjAxMiAzMzEuNjQgMi42NiAwIDAgMTYuMjg2LTg3LjY5Mi0xLjQ4NC05NS4zNjQtNDUuMzUyLTE5LjU0Ni05OC40NzMtMjkuMzk4LTE1NC4xMi0yOS4zOTgiIGZpbGw9InVybCgjZCkiLz48L2c+PGcgY2xpcC1wYXRoPSJ1cmwoI24pIj48cGF0aCBkPSJtMTUxMy45IDY5Ni40MmgtODUuNDlsLTEwNy45NiAzMzEuNzFjLTIuNzIgOC40Ni01LjY3IDE4LjA2LTguODUgMjguNzdsLTkuMjMgMzEuMzFjLTAuOTIgMy4wMS0xLjgzIDYuMDMtMi43MiA5LjA1LTAuODYtMy0xLjcxLTUuOTktMi41NC04Ljk3LTMuMzktMTAuNDUtNi42OC0yMC45Mi05Ljk2LTMxLjY3LTMuMzMtMTAuODYtNi41Mi0yMC44Mi05LjUtMjkuOWwtMTA5LjgxLTMzMC4zaC04NC4xNWwtMTY0LjU4IDQ4OS41NGg4MC40NDJsMTEwLjIzLTM0My45YzIuNDMtNy42MjkgNS4wMS0xNi41OTggNy43NS0yNi45MyAyLjY4LTEwLjExNyA1LjM1LTE5LjY0MSA4LjAzLTI4LjU3IDAuNTEtMS43ODkgMS4wMi0zLjU3MSAxLjUxLTUuMzYgMC42NyAyLjM1MiAxLjMyIDQuNzExIDEuOTcgNy4wMiAyLjczIDkuNDAyIDUuNiAxOS4wNDMgOC42MiAyOC45NjEgMi45NCA5LjgyIDUuMzQgMTguMDE5IDcuMTQgMjQuNTVsMTE1LjMyIDM0NC4yM2g4MS4wNWwxMTkuMjUtMzcxLjkzYzIuNzYtMTAuMzU5IDUuNDQtMTkuODgzIDguMTEtMjguODEyIDAuNTEtMS41MzkgMS0zLjExIDEuNDktNC42NDkgMC41MiAxLjgwOSAxLjAzIDMuNjI5IDEuNTYgNS40NDIgMi43NiA4Ljg2NyA1LjYgMTguMjE4IDguNTggMjguMjI2IDIuOTYgMTAgNS42OCAxOS4xOTIgOC4wOCAyNy41ODJsMTE0LjM5IDM0NC4xNGg3OS4xbC0xNjcuODQtNDg5LjU0IiBmaWxsPSJ1cmwoI2MpIi8+PC9nPjxnIGNsaXAtcGF0aD0idXJsKCNtKSI+PHBhdGggZD0ibTE5NjQuMSAxMTMwLjNjLTUyLjA1IDAtOTIuNDEtMTUuNjMtMTE5Ljk5LTQ2LjQ3LTI3LjgtMzEuMDktNDEuOS03OS4xNi00MS45LTE0Mi44OCAwLTMyLjY0OSAzLjktNjEuMjMxIDExLjU1LTg0LjkzIDcuNTUtMjMuNDE4IDE4LjM2LTQzLjA1OSAzMi4xNC01OC40MTggMTMuNy0xNS4yNDIgMzAuMTMtMjYuNzUgNDguODQtMzQuMTcyIDE4Ljk0LTcuNTUxIDQwLjMxLTExLjM5IDYzLjUyLTExLjM5IDUxLjgxIDAgOTIuMjcgMTUuMjIyIDEyMC4zMiA0NS4yNDIgMjguMTggMzAuMTQ4IDQyLjQ3IDc4LjQ4OCA0Mi40NyAxNDMuNjcgMCA2NS4yNjEtMTMuMzcgMTEzLjc0LTM5Ljc0IDE0NC4xLTI2LjA5IDMwLjAzLTY1LjUyIDQ1LjI1LTExNy4yMSA0NS4yNXptLTQuNS00NDMuMzZjLTM4LjA1IDAtNzIuMzcgNi4yNS0xMDIuMDQgMTguNTktMjkuNzkgMTIuNDM3LTU1LjA1IDMwLjIzOC03NS4wNiA1Mi45MTgtMTkuOTYgMjIuNTktMzUuMzMgNDkuNzYxLTQ1LjY1IDgwLjc5My0xMC4yNyAzMC43NTgtMTUuNDkgNjQuOTc2LTE1LjQ5IDEwMS43MSAwIDM2LjA0MyA0Ljg5IDY5LjcwMSAxNC41NSAxMDAuMDIgOS43MiAzMC41OCAyNC43IDU3LjU3IDQ0LjU1IDgwLjIgMTkuOSAyMi42OSA0NS4yMSA0MC43MiA3NS4yNiA1My41NyAyOS45NSAxMi44IDY1LjY3IDE5LjMgMTA2LjEzIDE5LjMgNDIuNTQgMCA3OS41OS02LjQxIDExMC4xMS0xOS4wNCAzMC43LTEyLjc0IDU2LjAxLTMwLjY2IDc1LjItNTMuMjQgMTkuMDgtMjIuNTEgMzMuMzctNDkuNSA0Mi40OC04MC4yNiA5LjAzLTMwLjQ4IDEzLjYxLTY0LjMwOSAxMy42MS0xMDAuNTUgMC0zNi42NjgtNS4xMy03MC43OTctMTUuMjQtMTAxLjQ3LTEwLjItMzAuODk4LTI1Ljc1LTU3Ljk2OS00Ni4yLTgwLjQ2MS0yMC40OC0yMi40OC00Ni4yNS00MC4zMi03Ni41OS01My0zMC4xOS0xMi42NjgtNjUuNzUtMTkuMDc4LTEwNS42Mi0xOS4wNzgiIGZpbGw9InVybCgjYikiLz48L2c+PGcgY2xpcC1wYXRoPSJ1cmwoI2wpIj48cGF0aCBkPSJtMjM4NS44IDY5Ni40MmgtNzkuNTF2NjkwLjcyaDc5LjUxdi02OTAuNzIiIGZpbGw9InVybCgjYSkiLz48L2c+PGcgY2xpcC1wYXRoPSJ1cmwoI2spIj48cGF0aCBkPSJtMjk0MS42IDY5Ni40MmgtOTYuMTdsLTIuMzUgMi44NC0xODcuODkgMjI4LjY0LTU3LjA5LTUxLjYwOXYtMTc5Ljg3aC03OS41djY5MC43Mmg3OS41di00MjQuMzZsMjMzLjQ5IDIyMy4xOGg5OS44bC0yMjAuNjItMjA2LjU0IDIzMC44My0yODMiIGZpbGw9InVybCgjaikiLz48L2c+PGcgY2xpcC1wYXRoPSJ1cmwoI3QpIj48cGF0aCBkPSJtMzA0OS44IDk4Mi41MWgyOTYuMTFjLTIuMDMgMjEuMTM4LTUuOTYgNDAuNTE4LTExLjcyIDU3LjcwOC02LjQgMTkuMDEtMTUuNTcgMzUuMzctMjcuMjggNDguNjItMTEuNjEgMTMuMTMtMjYuMTggMjMuNDQtNDMuMjkgMzAuNi0xNy4yOSA3LjIzLTM4LjIzIDEwLjg4LTYyLjI1IDEwLjg4LTE5LjI2IDAtMzguMDktMi44NC01NS45Ny04LjQyLTE3LjYtNS41LTMzLjQ0LTE0LjQ5LTQ3LjEtMjYuNzMtMTMuNjUtMTIuMjUtMjUuMDYtMjguNDEtMzMuODctNDguMDEtOC4wMS0xNy44NC0xMi45Mi0zOS41NS0xNC42My02NC42NDh6bTE1My4zNS0yOTUuNTVjLTM1LjU3IDAtNjguMyA1LjUzOS05Ny4yOCAxNi41LTI5LjIgMTEtNTQuMzQgMjcuNzE5LTc0LjcyIDQ5LjY4Ny0yMC4yOSAyMS44MDEtMzYuMjIgNDguOTkzLTQ3LjM0IDgwLjgyMS0xMS4wNCAzMS41OS0xNi42NCA2OC42NC0xNi42NCAxMTAuMTQgMCA0Ni4xOTIgNi44IDg1LjY4MSAyMC4xOSAxMTcuMzcgMTMuNDUgMzEuODMgMzEuNDYgNTcuOTggNTMuNTEgNzcuNyAyMi4wOCAxOS43NSA0Ny41MyAzNC4wMiA3NS42NiA0Mi40IDI3Ljc5IDguMjggNTYuMzMgMTIuNDggODQuODQgMTIuNDggMzguMzkgMCA3Mi4xNi02LjI3IDEwMC4zMy0xOC42NSAyOC4zNS0xMi40OCA1MS45OC0zMC4yNiA3MC4yMy01Mi44OSAxOC4xNi0yMi41MiAzMS43NC00OS40IDQwLjM4LTc5Ljk3IDguNTUtMzAuMjUgMTIuODktNjMuOTggMTIuODktMTAwLjI1di0yMi4xNzJoLTM3Ny4wOGMwLjU4LTIyLjM5MSAzLjY5LTQzLjY0MSA5LjI3LTYzLjIzOCA2LjE1LTIxLjUxMiAxNS43MS00MC4yNjIgMjguNDUtNTUuNjYxIDEyLjY4LTE1LjM3OCAyOS4wNC0yNy43ODEgNDguNTgtMzYuODUxIDE5LjU3LTkuMDUxIDQzLjQ1LTEzLjY2IDcwLjk5LTEzLjY2IDM0Ljk0IDAgNjQuNjcgNy42MTMgODguMzEgMjIuNjMzIDIzLjQ4IDE0LjkxIDQwLjA2IDM1LjA5NyA0OS4zMSA2MC4wMzlsMi4yNSA2LjA4OSA3NS4xNy0xMy4wODktMy40My04Ljg3MWMtNS4yOS0xMy42OTItMTMuMTUtMjguMzYtMjMuMjgtNDMuNTc5LTEwLjM2LTE1LjU1LTI0LjE2LTI5LjgzMi00MC45OS00Mi40NDEtMTYuNzYtMTIuNTUxLTM3LjU0LTIzLjIzLTYxLjczLTMxLjcxMS0yNC4zMy04LjUyNy01My44Ny0xMi44MjgtODcuODctMTIuODI4IiBmaWxsPSJ1cmwoI2kpIi8+PC9nPjxnIGNsaXAtcGF0aD0idXJsKCNzKSI+PHBhdGggZD0ibTM5NTQuOCA2OTYuNDJoLTc4LjE1djI4NS41YzAgMjEuNDQ4LTIuMjcgNDEuNjU4LTYuNzYgNjAuMDM4LTQuNCAxNy45NC0xMS41OCAzMy42NS0yMS4zOCA0Ni42OC05LjY5IDEyLjg0LTIyLjQ3IDIyLjkzLTM3Ljk3IDMwLjAxLTE1LjY5IDcuMTUtMzUuMzUgMTAuNzUtNTguNDIgMTAuNzUtMjAuOTcgMC00MC40Ny00LjEzLTU3LjkyLTEyLjMxLTE3LjU3LTguMjItMzIuOTMtMTkuNTctNDUuNjgtMzMuNzEtMTIuNzctMTQuMjItMjIuODctMzEuMjMtMjkuOTktNTAuNTktNy4xNS0xOS40Ni0xMC43Ni00MC42NjktMTAuNzYtNjMuMDI4di0yNzMuMzRoLTc5LjUxdjM3NS41MmMwIDEwLjE4LTAuMDcgMjEuMTYtMC4yMiAzMi45OS0wLjE2IDExLjc5LTAuMzggMjIuNzktMC42NyAzMi45Ni0wLjMgMTAuMjEtMC41MyAxOS4wMS0wLjY3IDI2LjQtMC4xNiA3LjQtMC4yNCAxMi4wNS0wLjI0IDEzLjg4djcuNzloNzMuNjZ2LTcuNzljMC0xLjE2IDAuMjktNS43OCAwLjg3LTEzLjg0IDAuMzMtOC45OSAwLjctMTguNjMgMS4xNi0yOS4yNmwxLjM0LTMxLjk2YzAtMC4yIDAuMDItMC40MyAwLjAyLTAuNjMgMTguMDIgMjcuNTcgMzkuMjMgNDkgNjMuMjUgNjMuODYgMjkuNzcgMTguMzggNjUuODkgMjcuNzIgMTA3LjQxIDI3LjcyIDMzLjA2IDAgNjEuNDctNS4zMiA4NC40Ni0xNS43OSAyMy4xMy0xMC41NSA0Mi4wNS0yNS4wOCA1Ni4yMy00My4yMiAxNC4xMS0xOC4wMiAyNC40My0zOS4zNSAzMC42OS02My40IDYuMTMtMjMuNjQgOS4yNS00OC45NiA5LjI1LTc1LjMzdi0yOTkuOSIgZmlsbD0idXJsKCNoKSIvPjwvZz48ZyBjbGlwLXBhdGg9InVybCgjcikiPjxwYXRoIGQ9Im00NTEwLjUgNjk2LjQyaC03OC4xNXYyOTIuN2MwIDIxLjM4OS0yLjMzIDQxLjA5OS02Ljk0IDU4LjU0OS00LjUxIDE2Ljk4LTExLjc5IDMxLjczLTIxLjY5IDQzLjg3LTkuOCAxMi4wMS0yMi43MyAyMS4zOS0zOC4zNiAyNy44OC0xNS45NCA2LjY0LTM1LjMxIDkuOTgtNTcuNTUgOS45OC0yMC45NiAwLTQwLjQ2LTQuMTMtNTcuOTEtMTIuMzEtMTcuNTctOC4yMi0zMi45NC0xOS41Ny00NS42OC0zMy43MS0xMi43Ni0xNC4yMi0yMi44Ny0zMS4yMy0zMC01MC41OS03LjE0LTE5LjQ2LTEwLjc1LTQwLjY2OS0xMC43NS02My4wMjh2LTI3My4zNGgtNzkuNXY2OTAuNzJoNzkuNXYtMjEyLjEyYzAtMTAuNTctMC4xNi0yMS4zLTAuNDUtMzIuMTYtMC42LTExLjI2LTEuMDUtMjEuMjctMS4zNS0zMC4yMi0wLjA5LTIuMzctMC4xNy00LjY0LTAuMjUtNi44MyAxNy41NCAyNS45OSAzNy45OSA0Ni4yOCA2MS4wNCA2MC41MyAyOS43NyAxOC4zOCA2NS44OSAyNy43MiAxMDcuNDEgMjcuNzIgMzEuNDcgMCA1OC44Ny00LjU5IDgxLjQzLTEzLjYgMjIuOC05LjEzIDQxLjc5LTIyLjE4IDU2LjUtMzguNzYgMTQuNjEtMTYuNDkgMjUuNTUtMzYuNjUgMzIuNDctNTkuODggNi43OC0yMi44NSAxMC4yMy00OC43NCAxMC4yMy03Ni45NXYtMzA4LjQ1IiBmaWxsPSJ1cmwoI2cpIi8+PC9nPjxnIGNsaXAtcGF0aD0idXJsKCNxKSI+PHBhdGggZD0ibTQ4NTQuMSAxMTMwLjNjLTUyLjA1IDAtOTIuNDEtMTUuNjMtMTE5Ljk5LTQ2LjQ3LTI3Ljc5LTMxLjA5LTQxLjktNzkuMTYtNDEuOS0xNDIuODggMC0zMi42NDkgMy45LTYxLjIzMSAxMS41NS04NC45MyA3LjU1LTIzLjQxOCAxOC4zNi00My4wNTkgMzIuMTQtNTguNDE4IDEzLjctMTUuMjQyIDMwLjE0LTI2Ljc1IDQ4Ljg0LTM0LjE3MiAxOC45NC03LjU1MSA0MC4zMS0xMS4zOSA2My41Mi0xMS4zOSA1MS44MSAwIDkyLjI3IDE1LjIyMiAxMjAuMzIgNDUuMjQyIDI4LjE4IDMwLjE0OCA0Mi40NyA3OC40ODggNDIuNDcgMTQzLjY3IDAgNjUuMjYxLTEzLjM3IDExMy43NC0zOS43MyAxNDQuMS0yNi4xIDMwLjAzLTY1LjUzIDQ1LjI1LTExNy4yMiA0NS4yNXptLTQuNS00NDMuMzZjLTM4LjA1IDAtNzIuMzYgNi4yNS0xMDIuMDMgMTguNTktMjkuNzkgMTIuNDM3LTU1LjA2IDMwLjIzOC03NS4wNiA1Mi45MTgtMTkuOTcgMjIuNTktMzUuMzMgNDkuNzYxLTQ1LjY2IDgwLjc5My0xMC4yNyAzMC43NTgtMTUuNDkgNjQuOTc2LTE1LjQ5IDEwMS43MSAwIDM2LjA0MyA0Ljg5IDY5LjcwMSAxNC41NiAxMDAuMDIgOS43MSAzMC41OCAyNC42OSA1Ny41NyA0NC41NCA4MC4yIDE5LjkgMjIuNjkgNDUuMjEgNDAuNzIgNzUuMjYgNTMuNTcgMjkuOTYgMTIuOCA2NS42NyAxOS4zIDEwNi4xMyAxOS4zIDQyLjU0IDAgNzkuNTktNi40MSAxMTAuMTEtMTkuMDQgMzAuNy0xMi43NCA1Ni4wMS0zMC42NiA3NS4yMS01My4yNCAxOS4wNy0yMi41MSAzMy4zNi00OS41IDQyLjQ3LTgwLjI2IDkuMDMtMzAuNDggMTMuNjItNjQuMzA5IDEzLjYyLTEwMC41NSAwLTM2LjY2OC01LjE0LTcwLjc5Ny0xNS4yNS0xMDEuNDctMTAuMi0zMC44OTgtMjUuNzUtNTcuOTY5LTQ2LjItODAuNDYxLTIwLjQ3LTIyLjQ4LTQ2LjI1LTQwLjMyLTc2LjU4LTUzLTMwLjItMTIuNjY4LTY1Ljc2LTE5LjA3OC0xMDUuNjMtMTkuMDc4IiBmaWxsPSJ1cmwoI2YpIi8+PC9nPjxnIGNsaXAtcGF0aD0idXJsKCNwKSI+PHBhdGggZD0ibTUyODcuNSA2OTYuNDJoLTc4LjU5djQyNGgtNjkuNzd2NjUuNTRoNjkuNzd2NjUuMTJjMCAxOC40MSAxLjU2IDM1LjggNC42NCA1MS42NyAzLjIxIDE2LjQ5IDkuMjQgMzEuMTMgMTcuOTQgNDMuNSA4Ljg3IDEyLjY3IDIxLjM3IDIyLjcxIDM3LjEyIDI5Ljg2IDIxLjM1IDkuNjYgNTIuODQgMTIuNTYgODYuNTkgOS4yMSA5LjI1LTAuOTMgMTcuMjUtMi4wMyAyNC4wMy0zLjI1bDYuNDEtMS4xNnYtNjQuODNsLTkuMTMgMS42Yy00Ljk3IDAuODctMTAuNzQgMS42Ny0xNy4zMSAyLjQtMTkuMTYgMi4xNy0zNS40MSAxLjA1LTQ1LjY2LTMuOTgtNi42OC0zLjI3LTEyLjAyLTcuODMtMTUuODktMTMuNTgtMy45Ni01Ljg4LTYuNjYtMTMuNTEtNy45OC0yMi42Mi0xLjQ0LTkuOTQtMi4xNy0yMS4xNS0yLjE3LTMzLjMydi02MC42Mmg5OC4xNHYtNjUuNTRoLTk4LjE0di00MjQiIGZpbGw9InVybCgjZSkiLz48L2c+PC9nPjwvZz48L3N2Zz4K"
						/>
					  </td>
					</tr>
				  </table>
				</td>
			  </tr>
			  <!-- end tr -->
			  <tr>
				<td
				  valign="middle"
				  class="hero bg_white"
				  style="padding: 2em 0 4em 0"
				>
				  <table
					role="presentation"
					border="0"
					cellpadding="0"
					cellspacing="0"
					width="100%"
				  >
					<tr>
					  <td
						style="
						  padding: 0 2.5em;
						  text-align: center;
						  padding-bottom: 3em;
						"
					  >
						<div class="text">
						  <h2>Neue Nachricht vom Kontaktformular</h2>
						</div>
					  </td>
					</tr>
					<tr>
					  <td style="text-align: center">
						<div class="text-author">
						  <h3 class="name">'. $name .'</h3>
						  <span class="datenschutz">Datenschutzerklärung: '. $datenschutz .'</span>
						  <br/>
						  <span class="telephone">Tel.: '. $tel .'</span>
						  <br/>
						  <span class="email">E-Mail: '. $from .'</span>
						  <br/>
						  <span class="message">Nachricht: '. $comment .'</span>
						</div>
					  </td>
					</tr>
				  </table>
				</td>
			  </tr>
			  <!-- end tr -->
			  <!-- 1 Column Text + Button : END -->
			  <tr>
				<td class="bg_light" style="text-align: center">
				  <p>
					© 2024 Wolkenhof GmbH. Alle Rechte vorbehalten.<br/>Version '. $version .'
				  </p>
				</td>
			  </tr>
			</table>
		  </div>
		</center>
	  </body>
	</html>

  ';
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: wolkenhof Kontaktformular <jgu@wolkenhof.com>' . "\r\n";
  //$headers .= 'From: ' . $from . "\r\n";

  if (empty($name)) {
    $errors[] = "Bitte geben Sie Ihren Namen an.";
  }

  if (empty($from)) {
    $errors[] = "Bitte geben Sie Ihre E-Mail-Adresse an.";
  } else if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Bitte geben Sie eine gültige E-Mail-Adresse an.";
  }

  if (empty($_POST['comment'])) {
    $errors[] = "Bitte geben Sie Ihre Nachricht ein.";
  }

  if ($datenschutz != "gelesen") {
    $errors[] = "Bitte akzeptieren Sie die Datenschutzerklärung.";
  }

  if (empty($errors)) {
    $mail = mail($to, $subject, $message, $headers);
    if ($mail) {
      $errorMessage = "<p style='color: #fff; font-size: 14px;'>Vielen Dank, " . $name . "! Wir werden uns in Kürze bei Ihnen melden.</p>";
    } else {
      $errorMessage = "<p style='color: red; font-size: 14px;'>Oops, etwas ist schief gelaufen. Bitte versuchen Sie es später noch einmal.</p>";
    }
  } else {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red; font-size: 14px;'>{$allErrors}</p>";
  }
  echo "$errorMessage";
}
?>