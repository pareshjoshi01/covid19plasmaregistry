<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>{{ config('app.name') }} - Contact</title>
</head>

<body>
	<div style="margin:0;padding:0;width:100%" align="center">
		<table border="0" cellspacing="0" cellpadding="0" style="max-width:600px;border:1px solid #dddddd;margin:10px 0;" >
			<td align="center" style="margin:0;border-collapse:collapse;text-align:left">
				<table width="600px" border="0" cellspacing="0" cellpadding="0" >
					<tbody>
						<tr>
							<td align="left" style="margin:0;border-collapse:collapse;padding:32px 7% 32px 5%; border-bottom:1px solid #dddddd;">
								<img width="100" src="https://covidplasma.life/images/logo.png" alt="{{ config('app.name') }} Logo" title="{{ config('app.name') }} Logo" border="0" style="outline:none;text-decoration:none;max-width:100%;min-height:auto;border-style:none" >
							</td>
						</tr>
						<tr>
							<td style="border-collapse:collapse;font-family:HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:32px;margin:0;padding:10px 7% 10px 7%; ">
								<div>Hello,</div>
								<div>You got new contact details</div>
							</td>
						</tr>
						<tr>
							<td style="border-collapse:collapse;font-family:HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:32px;margin:0;padding:0 7% 25px 7%; ">
								<div><b>Name :</b> {{ $array_data['name'] }}</div>
								<div><b>Email :</b> {{ $array_data['email'] }}</div>
								<div><b>Subject :</b> {{ $array_data['subject'] }}</div>
								<div><b>Message :</b> {{ $array_data['msg'] }}</div>
							</td>
						</tr>
						<tr>
							<td style=" border-top:1px solid #dddddd; margin:0;border-collapse:collapse;font-family:Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;padding:24px 7%">
								<span style="font-size:11px;color:#999999;text-decoration:none"><?php echo date("Y"); ?> YEAR {{ config('app.name', 'Laravel') }}</span>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</table>
	</div>
</body>
</html>
