<html>
	<head>
		<script>
			function elements(el,i,ex,en){
				switch(el.value){
					case '1':
						i.style.display='block';
						ex.style.display='none';
						en.style.display='none';
						break;
					case '2':
						i.style.display='none';
						ex.style.display='block';
						en.style.display='none';
						break;
					case '3':
						i.style.display='none';
						ex.style.display='none';
						en.style.display='block';
						break;
					default:
						i.style.display='none';
						ex.style.display='none';
						en.style.display='none';
						break;
				}
			}
		</script>
	</head>
	
	<body>
		<table width= "100%" cellspacing="0" cellpadding="10" >
			<tr><td/><td/><td align="right">
				<a href="cart.php" target="contentFrame">
					<abbr title="CART">
						<img height="20" width="20" src="resources/images/cart.png">
						CART
					</abbr>
				</a>
			</td></tr>
			<tr>	
				<td width="100">
					<select onchange="elements(this,I,Ex,En)" name="Elements">
						<option value="0">Select Option</option>
						<option value="1">Interior</option> 
						<option value="2">Exterior</option>
						<option value="3">Engine</option>
					</select>
				</td>
				<td valign="left">
					<select id="I" style="display:none;" name="Interior">
						<option value="0">Select Option</option>
						<option value="1">Seat</option>
						<option value="2">DVD Player</option>
						<option value="3">Steering Wheel</option>
						<option value="4">Others</option>
					</select>
				

					<select id="Ex" style="display:none;" name="Exterior">
						<option value="0">Select Option</option>
						<option value="1">Light</option>
						<option value="2">Bumper</option>
						<option value="3">Rim</option>
						<option value="4">Others</option>
					</select>
					
					<select id="En" style="display:none;" name="Engine">
						<option value="0">Select Option</option>
						<option value="1">Engine Machineries</option>
						<option value="2">Air Filter</option>
						<option value="3">Carburator</option>
						<option value="4">Griffin Radiator</option>
						<option value="5">Others</option>
					</select>
					
					<!--<input type="button" value="Search">-->
				
				</td>
				
				<td align="right">
					Logged in as <a href="account_user/profile.php" target="contentFrame">Bob</a>&nbsp;|
					<a href="../index.php">Logout</a>
				</td>
			</tr>
			<tr>
				<td/>
				<td/>
				         <td align="right">
					<input type="text"> 
					<input type="button" value="Search">
				</td>
			</tr>
		</table>
		<hr/>
		<table width= "100%" cellspacing="0" cellpadding="10" >
			
			<!--<td>
				<a href="product_details/k.php">
					<img src="../resources/products/k.jpg" alt="../resources/products/k.jpg" height="200" width="180" >
				</a>
			</td>-->
			<tr>
				<td align="center">
					<a href="product_details/red_sports_seat.php">
					<img src="resources/products/red_sports_seat.jpg" alt="resources/products/red_sports_seat.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Red Sports Seat<h3/>
					<h3 align="center">2500 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/red_sports_seat1.php">
					<img src="resources/products/red_sports_seat1.jpg" alt="resources/products/red_sports_seat1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Orange Sports Seat<h3/>
					<h3 align="center">2800 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/stearing_wheel.php">
					<img src="resources/products/stearing_wheel.jpg" alt="resources/products/stearing_wheel.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">MK Steering Wheel<h3/>
					<h3 align="center">1500 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/steering_wheel1.php">
					<img src="resources/products/steering_wheel1.jpg" alt="resources/products/steering_wheel1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Grant Steering Wheel<h3/>
					<h3 align="center">3000 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/steering_wheel2.php">
					<img src="resources/products/steering_wheel2.jpg" alt="resources/products/steering_wheel2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">GT Steering Wheel<h3/>
					<h3 align="center">4000 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/headlights1.php">
					<img src="resources/products/headlights1.jpg" alt="resources/products/headlights1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Head Lights<h3/>
					<h3 align="center">2000 TK<h3/>
				</td>
			
			</tr>
			
			<tr>
			
				<td align="center">
					<a href="product_details/headlights2.php">
					<img src="resources/products/headlights2.jpg" alt="resources/products/headlights2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Head Lights XP<h3/>
					<h3 align="center">2100 TK<h3/>
				</td>
			
				<td align="center">
					<a href="product_details/headlights3.php">
					<img src="resources/products/headlights3.jpg" alt="resources/products/headlights3.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">SUV Head Lights<h3/>
					<h3 align="center">2200 TK<h3/>
				</td>
			
				<td>
					<a href="product_details/headlights4.php">
					<img src="resources/products/headlights4.jpg" alt="resources/products/headlights4.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">SUV Head Lights XP<h3/>
					<h3 align="center">2300 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/headlights5.php">
					<img src="resources/products/headlights5.jpg" alt="resources/products/headlights5.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Head Lights GX<h3/>
					<h3 align="center">2400 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/bumper1.php">
					<img src="resources/products/bumper1.jpg" alt="resources/products/bumper1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Bumpers (Front + Back + Side)<h3/>
					<h3 align="center">5000 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/bumper2.php">
					<img src="resources/products/bumper2.jpeg" alt="resources/products/bumper2.jpeg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Bumpers (Front + Back + Side)<h3/>
					<h3 align="center">2900 TK<h3/>
				</td>
				
			</tr>
				
			<tr>
				<td>
					<a href="product_details/bumper3.php">
					<img src="resources/products/bumper3.jpg" alt="resources/products/bumper3.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Sedan Bumpers (Front + Back + Side)</<h3/>
					<h3 align="center">3700 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/crankshaft.php">
					<img src="resources/products/crankshaft.jpg" alt="resources/products/crankshaft.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car Engine CRANKSHAFT<h3/>
					<h3 align="center">4700 TK<h3/>
				</td>
			
				<td>
					<a href="product_details/sparkplug.php">
					<img src="resources/products/sparkplug.jpg" alt="resources/products/sparkplug.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car Engine CRANKSHAFT<h3/>
					<h3 align="center">700 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/airfilter.php">
					<img src="resources/products/airfilter.jpg" alt="resources/products/airfilter.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car Engine AIRFILTER<h3/>
					<h3 align="center">1100 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/gearbox.php">
					<img src="resources/products/gearbox.jpg" alt="resources/products/gearbox.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car Engine GearBox<h3/>
					<h3 align="center">11000 TK<h3/>
				</td>
				
				<td>
					<a href="product_details/wiper.php">
					<img src="resources/products/wiper.jpg" alt="resources/products/wiper.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car WindShield Wiper<h3/>
					<h3 align="center">550 TK<h3/>
				</td>
				
			</tr>
				
			<tr>
				<td>
					<a href="product_details/cardvd.php">
					<img src="resources/products/cardvd.jpg" alt="resources/products/cardvd.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Car DVD Player<h3/>
					<h3 align="center">5550 TK<h3/>
				</td>
				
				<td align="center">
					<a href="product_details/brake_speed_sensor.php">
					<img src="resources/products/brake_speed_sensor.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Brake Speed Sensor<h3/>
					<h3 align="center">2200 TK</h3>
				</td>
			
				<td align="center">
					<a href="product_details/fog_light.php">
					<img src="resources/products/fog_light.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Fog Light<h3/>
					<h3 align="center">2810 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/wheel1.php">
					<img src="resources/products/wheel1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Polished Aluminum Alloy Wheel<h3/>
					<h3 align="center">8000 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/wheel2.php">
					<img src="resources/products/wheel2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">JK Alloy Wheel<h3/>
					<h3 align="center">5000 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/door_handle1.php">
					<img src="resources/products/door_handle1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Dorman Door Handle<h3/>
					<h3 align="center">850 TK</h3>
				</td>
			</tr>
				
			<tr>
				<td align="center">
					<a href="product_details/door_handle2.php">
					<img src="resources/products/door_handle2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">URO Door Handle<h3/>
					<h3 align="center">750 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/bulb_socket.php">
					<img src="resources/products/bulb_socket.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Bulb Socket<h3/>
					<h3 align="center">670 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/window_switch1.php">
					<img src="resources/products/window_switch1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Standard Window Switch<h3/>
					<h3 align="center">2100 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/window_switch2.php">
					<img src="resources/products/window_switch2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Standard Window Switch XP<h3/>
					<h3 align="center">2900 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/carburator1.php">
					<img src="resources/products/carburator1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Crown Carburator<h3/>
					<h3 align="center">15000 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/carburator2.php">
					<img src="resources/products/carburator2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Holley Carburator<h3/>
					<h3 align="center">20000 TK</h3>
				</td>
			</tr>
				
			<tr>
				<td align="center">
					<a href="product_details/radiator1.php">
					<img src="resources/products/radiator1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Replacement Radiator<h3/>
					<h3 align="center">6600 TK</h3>
				</td>
				  
				<td align="center">
					<a href="product_details/radiator2.php">
					<img src="resources/products/radiator2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Griffin Radiator<h3/>
					<h3 align="center">8500 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/seat_belt.php">
					<img src="resources/products/seat_belt.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Retro Seat Belt<h3/>
					<h3 align="center">1500 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/mirror_glass1.php">
					<img src="resources/products/mirror_glass1.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">Kool Vue Mirror Glass<h3/>
					<h3 align="center">850 TK</h3>
				</td>
				
				<td align="center">
					<a href="product_details/mirror_glass2.php">
					<img src="resources/products/mirror_glass2.jpg" height="200" width="180" >
					</a><br/>
					<h3 align="center">ULO Mirror Glass<h3/>
					<h3 align="center">1100 TK</h3>
				</td>
				
				<td align="center">
						<a href="product_details/window_regulator.php">
						<img src="resources/products/window_regulator.jpg" height="200" width="180" >
						</a><br/>
						<h3 align="center">Dorman Window Regulator<h3/>
						<h3 align="center">2200 TK</h3>
				</td>
				
			</tr>

			
		</table>
		<!--<a valign="bottom" href="checkout.php">
			<h3>Checkout</h3>
		</a>-->
	</body>
</html>
