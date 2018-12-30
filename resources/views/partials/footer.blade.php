<!--==================================Footer Open=================================-->
<footer class="text-center fott">
	<div class="footer-upper-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="footer-menu">
						<li><a href="/">Home</a></li>
						<li><a href="/">About</a></li>
						<li><a href="/">Contact</a></li>
						<li><a href="/terms">Terms</a></li>
						@if(Auth::guest())
							<li><a href="/login">Join Us</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div><!-- ../footer-upper-bar -->
	<div class="footer-bottom-bar">
		<div class="container">
			<div class="row msg91">
				<div class="col-md-12">
					<a target="_blank" href="https://msg91.com/startups/?utm_source=startup-banner"><img src="https://msg91.com/images/startups/msg91Badge.png" width="120" height="90" title="MSG91 - SMS for Startups" alt="Bulk SMS - MSG91"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="footer-about-company">
						<li>Copyright © 2017 FindMeHome</li>
					</ul>
					<p class="credit-links">Follow us</p>
					<ul class="social-icons footer-social-icons">
						<li><a href="https://www.facebook.com/findmehome.xyz" target="_blank"><!-- Facebook icon by Icons8 -->
							<img class="icon icons8-Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAC10lEQVRoQ+1ai3HTQBTc7QAqgFQQqADoAFcAHZBUAFRAUgGkApIKCBUkqYCkA6hgmVXuPGf7ZF0snyTP6GY8ceyT7+17+z7Se0TLkvQBwFsAr8KrbesQn98C8OuS5FXuQK5/KOk9gG8AXg4h4Q5n3AM4JXmZXrsCRJIBnIQNDwDOAFyTtDZGW5LMCrPDsr0IgpyRPI1CLYFIstCfwhdG7P8ntyQZjBXudU6yUXwDJNDpZ/jy9dgW6NJesNBN2LcwzSKQP8EnJmuJjC9Hy9yTPKKkjwC+A3ggOVUHzxpJkh3fPrMwkB8AHGoPxhoRVeIvFwZirjkqTN43MvSy3Jb/1kDUeD25kVO6nG4K3y/lHwNIqBqceK3R1C+vAZj3zlu/S6LnKEBC2HSYLw0qTUTaZvnBgQQQvwA8s7YBOMi4dvqbOK+zt0H6rwNQJ+XHABKDygVJh/ytq5TygwJJKofiXDVVIE/OVVMF4mj0BsA7kn6/XJLsM58BOIptBIGutDA0tVpzVVJZZH3mkIA0IHPW6goIoXJ/VFIpF0t+tG3PtjP6nj8lavUqkaoDiQekVsrxPbdvzbLP06SZKRzrUmtfQEZ39j7cl+QSxeWMC0e/b12DUatLozkJJX0JuaWznJk6kFgJfCVpUAdrkdZK4FCd/Yikb7TGt0iP8PuPpOuwrau6j6Snz5m9yxyPT0nrJsTZIgVWyCqpTwYuPXP2kQJNzT5SoKSNLTO1CrQ2U6tASTO1eilJkh/hH9ds9NRy9qQpejdI660ikNgQbVpvflTpnkVnL2IX0/uaikBiN3oR29OxO1qlIVoDSNIIbZ7wDzIwsG8grQMDwfzpCMcJyfNdqdR6X51puD61aJXkMZM4XrI6whEPXptHMd18QVFTsui+ekcgwQJuS9i5Y+thCcJnt405GUCcwtmXYfb1O55aMmPax5zWblgczWIL2XlmzHWXDJ6tAIhC/QfJdOM+5ZDCYAAAAABJRU5ErkJggg==" alt="facebook"></a></li>
						<li><a href="https://twitter.com/_findmehome" target="_blank"><!-- Twitter icon by Icons8 -->
								<img class="icon icons8-Twitter" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEzklEQVRoQ+2Zj1EVQQzGkwrUCtQKxArUCtQKhAqUCtQK1AqUCsQK1ArECpQKxAri/M7kGfb+7d3tgMOwM294wN7ufsmXL9mcyhUZekVwyDWQ/82T1x5p4REzuyMi90Rkz9c7E5ETVf26dP1L8YiZPRORFwlAeW4AvRWRd6rK997wNfZ9zvE5IGb2UESei8jB2AJLLZXnmxmW/ygieILxW0S+4AX//aaIcAa8xADEoap+4Bcz4/+PReRVWuNIVfdLID98Ags/agnGzJ6IyHsR4TCneERVj0esDVAOi+cYAMEIQcH82H1VPdkB8Y2wVoxmYNwTnx1EZ8EazzpDAHsjzf8kIg98rU+qioH+5REzAzUWOHLkuLcJGDMLT1eDiIO7ETgsZ4GGb0QkDEEcQcWz7JHY7FF6KMAQM8HjGmPu5pgZFHkpIl9VlU1XDY8PGDO0xmkGYr7DLWLDH8RLBNe5oFtykuQNYg6LrhpmxrNQqhwIxsMeEFUtBQD3oWQMFsM7P2tO47T4RnCraihVzaO9OR7DQTEEAy8zOM+HDASrE1SdCuSVPOjwzm3/O99fzwFKtCIfkDc2DzPDqBh3B4IvGQjqAI2eDsmiUw2+h3d4HkDHqoqSDFkx4gPQfN80zCyzo/NELJiBYDEUYSdpI4crNZ5pUA1DQD2CusvGySOtgEQc9+ItA4F3HAh63a2gDYAAjxRmnQdDVzN5cmVeUyBlHJ+jVmFBCrf7tTzwGCIQc3mRH1+cP0bY0HlkEoiZRfnQZUr4r6oHtWDyPAeGh6OkII5W5aFi3Sogwb/8bJPMvsYY5TMuNr9qPBLyS4LJnB9UsRaHW7KGe5l6bbBCyMEemRM68R1aEKhQbPBOsOQgW+eaGaIC/QdVNQMJzZ+U360HWvt8Kmq5n0RC3C2XgWB9CkfGrPyuPdDa51LN1qs8huQ3SvkvqkoV/F+MVLP9VlXUsDfKApFJKBU11Wr5bY3ezKLqGM1HveaDoyfYUS48BCcvNdgTrUYVdLCLUoCJjgbWqCrfW3okXcEnrwJjQMjuFJDlHaJZOV4L1szIHZQ+g2oV64wBCU6W+zWpmRaAAABASNJ3pig+BiRL8aELAIXkhcaKmXG7JDHPVs+jncaUgIgLtPuiQUSCpge2N7f/FBCkGPWik8JPFONCwKS8AQurmhaTvd9Cvcgvq9tCC+ICAxIXUKo6Jmeb2N4x5xob/Vi8Q62DHG6+YwyU6/SuUM3vXZunkgWzQGIjv3+jZuW1tlmZ75c7qty/vaoFhqoGkgBFPRZ/agJkC4he0TjFYzOjVYRHomWJmuxv6R6yX9EKXeyJyYToG8TbJA4OZ/M7DWLkbS1/xwzkYsJlicBeDaLziJcALBSBy/ehUhkPQKsWAFifRl807QjsJ1tqOYAAIBQpG4/FSYaoFF2QJgWjvzLLb5zeAWirdwGCdeB+ViTklvvIYCu0NickgYCWvHtBkYKivPAEwOoOfT5H2Wkse7tk8twKrfaK8x+BIMbyOw0oCoBd33apYWZviElFCG48NEQ5LBgt0bwmls6fXuXsXm7igXLxuRKFg0UrFBGI1wo1RiTGOHT32RoDcxsuSohergTHw/qxB7Tjc7YkI88dsPb/i4DULnoZ866BXIbVp/b8A4aTMhceQ8y9AAAAAElFTkSuQmCC"></a></li>
						<li><a href="https://plus.google.com/b/117595236135368710066/117595236135368710066?hl=en" target="_blank"><!-- Google Plus icon by Icons8 -->
							<img class="icon icons8-Google-Plus" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEFElEQVRoQ+2a8VEVQQzGkwqUCoQKhArUCpQKhAqECoQK1AqECsQKlArUCsQKhAri/J7Jzd6+23t3B3dv/yAzzGOYPV6+TfbLl+ypFMzM9kXkrYjw+bK0bqG/fxeRnyJyqap8rpnmf3EAHypwvrRHgDrNAbWAmNkbEfksIk9F5E5ELkTkSlV5eGtmZmQEvh2JyBMRuRWRY1W9CqcaIGbGIkBglyJyoqo8UI2ZGRv80VMevw4DzAqIme2KyA+PBEiJRLWWbDobfaCqNwHkm58JDhORqd7MjLR67al/qB6N334mdmtLp9KOeprd+JnZAwg5905EPqnqSfWhSBxs+W5mMNILEXm1bXYau4nOZhyLayLy1w/52P9T0/pbgFhNHk31pQGiqmtVfuo/XfK5CMQjkCV3ve+7HiNSSyTCj3tHxMyQB8gZdBo9S8muReRsrho1GYgXIVQyMh9VgExIJTaAaH5OkdulRuihIjsJSKI6r1W11TV6Q4ZKoF/ALlT1+KEc7tFcqzo4mH4TcclznXLGzNBqdJdhs8ue0RFJZLP0FU8zI9WeOZKvqkrazWZTgDRSZgOQUNM4f6Oqe7Oh+N8UDk+tRGWGTzulvsX7/i+xcG7pc18gTa+c73YGeo0UHjo6o4Dw5ZlKLrbEGZBzVT0b4nyuwodGcgoQBhIM7MJo+teGZQlFU2cGt85LAmEUEz1yFD3otRkZeR/NNGaHYcaYYrgYEE8v5AjTi+ceFkCshnhJdf/D74xohqRUrFkUSPKl1AYqOxqLSAUwlnSm3CZQWwGSOjWFbqe2110EMPqwl3Y0G7WyjAEzRbFotQLh3MBeIRYB0CsYqwNiZszDMCKQ9ySAa7Fa6WBvOj99KmFSarkCppZw2HEchgp2ir4kjUwRTIciaI2l5iyI7+n03IFzT58WxXpPAh2nLDaoui/CWmZGRxhT+l569aJIg9XUGlWlQPba7EAyVho06HYwpFX0JXubCuQSQLhygJmwwR1ftgEbi+QSQNJDOAYIlZ9J+Z2qUv1nscGsZWboqWCiQQcXj5P+fdZbsBTIytES3ZlZKt9ZS1Q677qTOkEEiAZt7mApPzZkfha5FrljitJ70ZNdcfFdgIGG2em1W19vrJikAGKUlJ8AJNJ3ddGz8erN6wPropIHICITd/AUyJg6LnK9nV+94QDNELsLTRbv1n23qSc8kxY9KnyA4gWDUb3I2Ej4GSR9YVQ+D+J6OtJrkengFMc7JE0U6dWAI31hIBQsA2ckSLVmZiGXmAvsNy8MeKgQgjGPgqnoK2p8hQMiCbnUfoUjoU3AACJeXIl+/Ne2QDlrch5j4h8v/Bx1vlSTgIF5AJAyVE1pxn0LIFqEUrzJdcoNhoKl0j5jSWCcA84vP5BRZzH+B8zg25A0mqpxAAAAAElFTkSuQmCC" alt="google-plus"></a></li>
						<li><a href="https://plus.google.com/b/117595236135368710066/117595236135368710066?hl=en" target="_blank"><!-- Youtube Plus icon by Icons8 -->
								<img class="icon icons8-YouTube" width="50" height="50" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAE2ElEQVRoQ+2a/1UUQQzHkwqQCoQK1AqECsQKxAqECtQKlAqECoQKhArUCtQK1Ari+8xL9mXHPW9n7/bAe+w/7NzuZOabH99ksqhsyaVbgkPugdw1S95b5L+3iJk9EJFHDoT7xxWog5Egr6v3vojIL//tq6rG/ShxC13LzPZE5JmIsDE2PHaDsfDXtLH4LSth1AZFBMCA4u+Vqn4fmjgIxMzeiciJT/gtIqEt/nIhLAR+XyR87E5daSiOi79xj7XD6jv+/L2qntay/wJiZp9c+1ci8kZVY/Nj9zXLe2YGqDfuJeeq+jIv1ANiZrz4WkTOVDUsMsvGpgo1s/ci8kpE3qoq+y1XB8SD+KeI3KjqgZmdY1ZVPeJFM7vEV1X12Mef3WeLMDNjLsJZKMYvVfXSXeebiDzBwq5d5u/jlmZG/H308S8zY413qrrrslDqK1Xd9zHx8lREdoMUMhAmfxCR5754YRVApcl5bAHanzPutGRm3dg3issequr1wDg8IZ6XsaqW/YWnpDHKBTiKQuE9i9STl1mE2LkM85oZzEJMhUUYHzdYBIvvoWG3CEFNoAMEi5yoapAAv/UUly2CBRDUvTzVjzcxzxX3JTymBtK5ziY2s8oaZtZz/QyEYCWjtia+VfYzea4DeRSEkIH0fK51BWcmAprYgr6bSowJ6/ViOliBuIAee9zcIjwxEdPI+gT+RYuMlndTzisUHkBwJ7RZqLdFYLybgJyJCPT40EubUyh3isx/zTGzoOBC2TWQ8uOURQdyA3kJKqZGQiacP1jwrWO92YA4/5MHSg5wQMQP7rsyoFpxswJJbkcMEpwvvCTHUisRwiIgPX9bh6mHZHiNBQjqJFiNbD2JEBYB6dU6cwGpiAFAnDRxM+KnKTYTkMK0vaIsirq5gSRAUajyE+xW6rQx150B4vTJSZT44VhMgTn6EJeAlAp4I8GeNewb4PBG7vrhibOU4i3XrbCWUzGaBwDuRB8AN6JUn1TKbByInzwBEEdnMj/lyyQAA5XE7JmdZMjZGgDcQ7MAWDkZuoWjrBoE0h0dW/y1Fux1FpSOO904gCZ6Xba+nyI5mveAoLFoHnSdiWXCBoKYwhOXQR6BDBOtFUByrch9pQGxzvNImJpAJmM3M1Gj4v4+j7hrcLCiJVnaP1MuZxLO0SsF8pi1/YT4OBoUW3lmx5d3VPXJGI3c9jtmRoPv91AXpbQiUxOsNJAjWN1t6DSWMsJLDBrYeXwdbmVmUO9FGlPC47r0rSCDZ1H5+viFqpJjkF0/h/1wo+706n2trrWbXQu+p/aJtuaYTmMXU3XDzMelEBzRaazXXtZpRMlYpCs0M5B4WFDWfaOBcY8cFgApJfYIIK0t02hkF6VjxbobjxU4IxzGN4owpycgXKlYamCMVnGtcDU2R/u/ZHLvepTayl2H92OM60DZpYzxA9hBar9C7XRBz/0Z+arXg6uBYBU2SnKkozK6rN5E8DsImtd06QHa7W/oQw95hGRG94O/AEOrzd/1VgWXvldiMawSlfNRXTEs+vSWmwX1fkh2oYl8H+/lj5qLsAx9RI3PbMzJ91nGwsLzn9/ZXSMIzd/1cm+YJsI6LwrMuKJGK98rl9Vsa/uHAWemZlDLNjhW4NqAjF1wrvfugcyl2alyt8YifwDEsW1g/qaaogAAAABJRU5ErkJggg=="></a></li>

					</ul>
				</div>
			</div>
		</div>
	</div><!-- ../footer-bottom-bar -->
</footer>


<!--==================================Footer Close=================================-->