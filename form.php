<div class="image-container" id="register">
	<article class="register">
		<h2>पंजीकरण</h2>
		<ul class="links">
			<li><a href="" class="new">नये सदस्यए </a></li>
			<li><a href="search" class="preregistered">पहले से सदस्यता प्राप्त,  यहाँ से ID प्रिंट करें</a></li>
		</ul>
		<div id="form-content">
			<form action="javascript:void(0)" name="registration-form" id ="register-form" >
				<label for="name">नाम
					<input type="text" name = "name" placeholder="पूरा नाम" required>
				</label>
				<label for="gaurdian">पिता/पती का नाम
					<input type="text" name = "gaurdian" Placeholder = "पिता/पती का नाम" required>
				</label>
				<label for="phone">फोन नंबर
					<input type="number" name="phone" placeholder="फोन नंबर" required>
				</label>
				<label for="adhaar">आधार कार्ड न.
					<input type="number" pattern= "^[0-9]{12,12}$" name="adhaar" placeholder="आधार कार्ड न." required>
				</label>
				<label for="city">शहर
					<input type="text" name = "city" placeholder="शहर" required>
				</label>
				<label for="address">पता
					<textarea name="address" placeholder="पता" required></textarea>
				</label>
				<input type="file" name="photo" id = "photo" accept="image/*" required>
				<label for="photo" id="image-upload">फोटो अपलोड करें
					<span>Browse</span>
				</label>
				
				<input type="submit" name="submit" value="ID प्रिंट करें">
			</form>
		</div>
	</article>
</div>


