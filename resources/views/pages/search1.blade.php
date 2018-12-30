@extends('layouts.master')
@section('nav')
    @include('partials.fixednav')
@endsection
@section('content')

	<div id="wrapper">
		<div id="sidebar-wrapper" class="col-md-4">
			<div id="sidebar">
				<form action="/search" method="get" id="searchform" onsubmit="">
					<div class="primaryfilters">
						<div class="row">
							<div class="col-md-12">
								<label class="labelpos">Location</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" class="form-control locinput" value="{{ $address }}" name="address" id="address">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label class="labelpos">Type of Property</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="white">
									<label class="checkbox-inline">
										<input type="checkbox" name="type[flat]" id="type-property" value="flat"> Flat/Apartments
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="type[house]" id="type-property" value="house"> House
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="type[pg]" id="type-property" value="pg"> PG
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label class="labelpos">Price Ranging from to</label>
								<div class="col-md-12 ">
									{{--<span>Min age</span>
									<span class="rightmax">Max age</span>--}}

									<input name="age" id="range_01" />

									<div class="demo-big__extra">
										<b id="result_48"></b>
									</div>

									<script>
                                        $(document).ready(function () {
                                            var $range = $("#range_01"),
                                                $result = $("#result_01");


                                            $range.ionRangeSlider({
                                                type: "double",
                                                min: 0,
                                                max: 5000,
                                                from: 10,
                                                to: 5000,
                                                step: 2
                                            });

                                            $range.on("change", track);
                                        });
									</script>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="white">

								</div>
							</div>
						</div>
					</div>
					<div id='map' class="mapSidebar"></div>
					<div class="secondaryfilters">
						<div class="row">
							<div class="col-md-12">
								<label class="labelpos">Amenities</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[internet]" value="internet"> Internet <i class="aicon fa fa-wifi" aria-hidden="true"></i>
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[ac]" value="ac"> AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[tv]" value="tv"> TV <i class="aicon fa fa-television" aria-hidden="true"></i>
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[garden]" value="garden"> Garden <img class="aiicon icon icons8-Leaf" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADbUlEQVRoQ82Zj5UOMRTF71aACtgKUAEqYCtABagAFaACtgJUgApQASpABZzfd/LmZPLNJHnJbHZyzp79M7PJve/d9yfvO9G+1yNJNyS9WIN5smP8gH8r6Y+k0/D9CO5eCTxPrP5Y0rslY++NwC1JryTdTcD+DF7YrQfQOVZHNmvrTNKH9OFle+B+AP2gIhbPlwiOJnBVEqCRCKD53bOupcE8ggC6BjSA+blnHQXzRREwwC1WzhH8GAwxvbMlAaz7pFEaHq/MMG9BAD2TQdLU5wHlefeepM/2Dz0ESH1UylHADfPLuMi1EiBfU3C8WcRj6bV3v8RGayGA1XMFZwuQpT0m3B4CWBvwNUWnBKD0/Lukm5mXbkv6xnMPgfeDwIMLnZMYim1FLYHRsqFgcebamgK5hgCSwfqjFsWKpi1HYOqLSgTQ/Y/B2QbrW1EsZqISAS4RD0eZXtKvcIX8WuibplSaI4D1fw8Ez1FYnyqL13OLDEQmymahp6FYjeLwN0jV7sKlcw/Gz3kAS9wp7bLhc8ssJfnYkUUC/zYEV9rKtE/wQqBm7YqA3Xc9SSNLYGQAW0ahuy0Fb+yZ3XjA+hqP9U1ylx7EFrjcKT7VCD+8U1UHmEfmGirHeYuv0nHaJb8289hGVQS8mvQQIucDnolbS72pbuY8uvQQsPEIRsL63pvdM0mvS4WM52xM2b7uQVd4N77TeqVjW08X+1Izxz94AyyHP57r9MSY+0pZ25/kwBO0GIN5f49Rmi/1XGyIiSsNcorBt+rejp30XxMDKVYOh4SnyYvBE1Pk+54ZKZ/WkL0OqyYGlgyOpNBwKbhj8OzTOxiYyaeHgJFCVnzhmdQrKfgtBgMXMp1GDoCLZZF+GNGTccxYceWeVNEqIduAaTTg4kI0C7IwxctNGGpzwmyo2xsDXPQBjnRs0SESG9PkeEPwb0LLcUTW4wHAAtw+fI43o0Dxd3K8rS1qB3sdBW58cIkAuiY4AbOU+mjKeHb06WFIt70jGcCTJGLDzLwQE0DHDFSpkoDle67JIlDpJFc37ySxKps1D9Re4rEKwA/T4YqFBekcSzXDtmJ/4iuOpdVjYg8AKDfSdm28cCJEzLtxzSD4qazIkK+pylYYZ1aJ1y4WSIX2ocoiNYdu+U4axLiaoMQbWAPgOY1viaVpr/8/LqgxjPf0UAAAAABJRU5ErkJggg==" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[terrace]" value="terrace"> Terrace <img class="icon icons8-Balcony aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAC4ElEQVRoQ+1a7VXVQBC9VKBUoFQgVKBWAFSAVKBWoFSgViBUAFagVIBWIFYgVKDn7tnlDDdLJnM28byY7J/3kt2ZN3c+7kxy3hbi609cpEliKyIdOpwVr4AiHq6cDTk9dHgpEfKcoik69vl7QfWU17JlagOj+ldAGqWoB6c+v0ZocRFqbDOueIi4QoeX0odcFzceCDk9dHgpEfKcstK2pKjnsLUPLa4PeSmx1tBaQ8YDXrrM9nnoHYA3AG4AnAI46enuU9fEUP2PAdDuAwD8/pF2M0Lv84bF8CkD3OQIEcBrMTAB+p0R2r1rADsPRGmoB4v4VOdrdt8QUO09220F5NQGRvWzPB6p0x8C1JdyjcPzaOK1lAMBfQfwzPwMkTPd+LnJi0TwUzLpkoBeAfi8yZYHbDsufUijFNCxMUd/ANgtgBg+ssac1zbLpAB6mvNxzoBY99cFELvtuUHzJXfgcovFR9Bl7WUy4bU2Zk4ZvDeEhvtkXwD4avRcAuC9si4A7JvrQwAXBRDHnSOzOZZRVNnXWFsAqewZCa4A0q5rI6Ce+iXRUk8d53lwSIQ4P34wjkxG5Wv9XZ1edgFcGVm2mW0C0nRTg5XWNfTfADw3il8C4L0hgLy08sYmgnxi046AtOPqlODVyJSA1GCbOcTRsZ2APIN0PxWf8Yon3+dlL0KqW9O5I1+b5RKfBwzuY0CPFNQgNnhGoSwvOzr9swZIn2KVMHTfy/OWfa1vrd+Ow4YAajHIi5C376VkFZA+V6SOO5ClPIPG3k/UbGzTCee2RgpaeC1FPzYg6rMp32kpNdrWscdjGo9aIyynPdBzCEcjOw6ldwracanEpl11xAiwYASQFn3flFIbqPdK+NTLb3PTot3KNEqtLSnpFb2ORhaw7t17HtJNE4DZfE1BKBFST80Ghc6QljH+9d/GxnZawvJfA6q+uBvbjRPpu6N7bVIcxztvIycyYiy1BMMGm57B/gJY2gbOcmmknwAAAABJRU5ErkJggg==" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[fridge]" value="fridge"> Fridge <img class=" aiicon icon icons8-Fridge-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABVUlEQVRoQ+1aQRECMQzcUwAOAAk4QAIScIAEQAFIQAoOsAAKwAFMhmOGB21o0twwneV73TSb3Vw7Rzrovz2AJYCpvjRkxQXAEcAuF71Ttj4AWIekVx5UiGxTMI3IDcC4fM8QhCgzsxJ5hKRkD5osvKYIidiLnkVWV2Teb3cOSri4FazWeuOGtl51RUjEaUUqkuoBWovWelWgeo80c444HWKGV1fEnIkTSCLOAg4H1+5aw2Xi3EkjMvSlUKPDHmlekWYORF4atW5WnldvdipCRYKu8bTWv1mrmXPEWVgzvPrr15yJE0gizV8anQ4xw2ktWstsnjyQ1qK1aK2gHrkDGAVVtzTsNTcPo32gk9mPTemOQetdsyiSk5BZAZgEJaiFFSVkOig5UJP9B+hL9NwbTFNWS9YduySBVL9kvasx6J+7Y5cQWfQSf1pMSIjtTj8mnFrmjv0EZ0xTMx+eAtgAAAAASUVORK5CYII=" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[oven]" value="oven"> Oven <img class="aiicon icon icons8-Toaster-Oven" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABs0lEQVRoQ+2Z4VHDMAyFv07ACMAElAlgBNgAJoANgA1gAhihnQA2ACYANmCDcuKsO5+bxK1sN27O+ZVcKuk9PUm20xkTuWYT4UEjUpuSTZGmSKEMtNIqlFizW1HkHZibPdRhuBAiqzqwpKHwiexrv/wLMWkiNfXMArh0RXcOPLv7a+DN3fcqUlvPaMl/AUcO/DdwvCmRsXtGE6o4foEDB/7HIxVVpDYiUlovjsjVNqVVG5G++bx3ikyGiHlq1VZabWppTfqLUtqGKG79CkgJ+ZdWhnlqdTkLZ3up567YSc1eCqhmech/+C6JiK6mp8CHt+XfBIgE3iYRciaSfZ6u2qFt0tS6B+7ipZ31Fw+AxA2JJE8tcSpbgsOscNediRKyBZF4XWq2vVZtC2JSsxeupkH3WadWI5IhA02RvkUuQ3JNLrIpYopewCg2PXtPiPKZ5awAIIvLJXARMZz+BzpL5sa0WVNkTDDJsaWRauoJK6GlToRH4AZ4Am6B8NkaIKfdIEYlooeaMLAeqHICsvoaxOjPaDkBnnhRPiv8J6sXY2yxsWZv53aNyM5THgnYFGmKFMrAH1QPsXSQG8aBAAAAAElFTkSuQmCC" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[microwave]" value="microwave"> Microwave <img class="aiicon icon icons8-Microwave" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAB7ElEQVRoQ+2Z7TEEQRCGn4sAESACRIAMZMBFQAaIABEgEkTgLgJE4DKgXrWjRtfWTs3d1ez2mvl3N7s7/czbH7O9E0Y2JiPjoQINXdGqUFWo8A5Ulyu84dnLVYWyt6zwDVWhwhuevVxVKHvLCt8weoVOgQtgv/DGLrvcDLgFHsMDgkKbwJMjELsBAjsGFgHo1TFMgBPUgYDkYjfLaj6w+6YCsuq8AGfA+8CMtebsAA/AYTQxE9CXuXLXAUwwWVBvsf1tQN5S+R9B/iXQEXAPSN4SQ7E7BZ6bxVRSLoGT5rfi5joyJFsh+WgpmGCnoBTLGiqc52Yn75rsrL+zgWzSKKGS1gix/AlIpXjEwO6AFsCGAfqIvMYd0FUTQzGTYkj/u3S5EEdxUggwboG64tady6WSkDsgWwdtnXIH1FYHa9qO/bbvwiqX03FnuzFKNUivN+Fo5M7lRpcURgdUs5wNevvG2nY4TLnBqvPx4XPth1ObZVY1NnW/zWJrz3IpA/qez07bfRucWj8JtKWWauopA5lvbWOphboXGagKrCaFh0ajmjeKsTDmo2wFi86qNBCPyjJjrg8O8ecUuVrsellP6/liwcj1fj+nBHt0itXXCC9gAlHfTqfxn9HVx05V6FKiZNnRBZSq0KWAsuz4Bi+akHwDmhvnAAAAAElFTkSuQmCC" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[washing]" value="washing"> Washing  <img class="aiicon icon icons8-Washing-Machine" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADoElEQVRoQ+2ajZENQRSFz0ZgRYAIlggQASKwIkAEiAARIAJEgAisCBABIqC+qj5bvb0z3T3b3U8ve6u2tt7rmZ577rl/fd/saVluSXoiif8zyTtJLyV9TJXaW9DyaQAxE4BUl2eS0PNYUiAw8EHSr3Dha0k/J0G0L+kw6HVJ0u2YmRQIlN2U9FjSi0kApGo8kvRc0ntJd72YAvkdFi5PxEQK5Kqkr+HLY/3XgCzFzkwE2eBTACEeXwXrPEgyUW6NW6YCgnvgJsg3SdciynNr0wEhG5J9kO8RKD7n1qYDgvuQ3hHSalzkcmvTAWlJHlPFyAWQXWWt65LuhIaTtoLPyFEIYmKBqszns8pQ17of+iCn1JKSpFxaITrarTIECIpT2Nzyk0pRDstjdRRGuA52uI4e6Ur4nusoiL6uBlR3IChGt4wLAYDW2im1pJA7WQBRN+hma92tKxBAfA7a4vMotrXlxwAAJ6aQG5VgugHBTQCBIm8CiBIDuXXAEGMYAjAlN+sGBHfC10+cCVqQhLiCGWIGN8tJFyC4EMHNKRJmtrrTmoKwCxP0X/cK2awLEHemZJrawK4ly0ZKu+H0/mYgDnDYwIIjxJ1vLvCbgXjCwkiGs/MIYVbwUNKpSUn0sGYg8XACX6awuQVhjUJIFquJG7cxvh89uZ/jK8OFT5m5WjMQUm784DVGUIi/L1FdIDEcBPAYoOSaFEfca0magXgDNsfyuAEPRCnSMcHq4lZyO0CSLLgfNjEQ7ko9sawNQboByQUilsfiADMLKEYLQzZCaQCsFb24YxgGBOvhHrWtRImVpXUDgbE1N25mxMF+Ylx5Fm0z98Dm29HB7tTYo79aw+K+a2j6Ne2kV8aqI+RHSB5DCyKKE6ScIUa2KOmcKzVYc4ywofshWGE6WFP8apgjhdPH8X8nTSNKOegpejy0hxDgBHquovs5XRhhM+oDqZg2heDEzVqEYwFM04wShzs7WKF0XLhgBjBb3Qw3AoR/sKmtT90YsfUBg5vBDFakOyY110g8PoIJOoG/MnywsrgZ7sVPds5qHgeRfawcoMl2Hgd5/kVM4FYld4qN052ReHPcg4LpeVWJFUDSJE4zoEsVxvJuGokBejOE3okY8rml1o2WDDKUkRIDPdcvgPS0Zo+9/j9Gzv0LA6RCztzn/hUOv1RDmnSV3tp29IiBpT1I5XQDfkcm+1ING/wTrznZEjBD1a0d7YxiId2X6T+MnHrx7A+8iRRChia3pgAAAABJRU5ErkJggg==" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[dryer]" value="dryer"> Dryer <img class="aiicon icon icons8-Hair-Dryer" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD6UlEQVRoQ92ajbENMRTHz6sAFaACVIAKUAEqQAWoABWgAlSAClABKvBeBczP5G9inSRnb5JdczOz8+5HNnt+5zu578SOZJwcCYdFQa6a2S0zu2Fm582M94xv6fpgZlwf91JMC+SumT0xs0srBBTUpmAlEAR/mSwAw3cze5u0jhU+JzDmYR0urHXdAd4EzANBqPfJhQDAIq9WWAQgXZuBLUGA+JSEfmdm98zsdAWEN3UTsBwENwGCYH6dIDoZ3NujYMiAG4dGDoI78RAscTt095hJJTA84UL0EQLBhQhuYgL38twJSz1IkEq/BD1J4MUAF5TMgKFURiur/uHUxK8pxd4vBDagz5LbeUoCnHuBGjF+ZiCSjY/IgDwDt/tL2YAowLGGVy9kLRbC7Z6nBXmP9h6mYsn7O4NgchCsfmWhHWKHbEoB/h1HgPDB4+QeCJUP3AmN8LdkLeYLFi1dHuBmOYjkQckoDnkvLuQ8BQRzke89bQoykgC0ztP0sB4X80Dy9VAcl+rUGSCkXNzrWlaxdZO+u5m5U0lABSmuwFo9owXyz9qA1G5au+Da+SXYg4L9fwcJB7smeq6l79a41peszT/UvaYFO7mbZFAb6gx2C3bqAhWb6uylX/L0uUb6JX2T4c5SLeptNFfHWl4QEZgasBz0XW/Sh1gGcO0ESX8AkLEYMwpiuLIjABAUmVLRA4Y9CZbxBpYgr89oUcLBnldmgAj6UtOI6wGlloHAlpV63UkKwsoUV8Zym1Gt7FpAlRnNY5mtBoLnrbyei5VpjbzhVnZNpLoDg/vMhCkJLjmIP+RAhoM2ViyU7wVwGSzT6zJRwXVIcZAneBsXNYpKAryn/4+OTQRfCuOB4Jc/FhMxsY6D2Lfkx0EEvo6DlIbz2+UqXRpvabG0lVTgYwmEW/b/tXUJUvxb4C0ZhnxfAlG1V7uBxkm7QPFa9QTrYC3iiCNVIJgjiw0RMrJICURxEu2b1Gc9SpU/8uyhc0aAaM9fy/tDhfYWi7pWTZBa0zkdQA9oBXukCVyzHZ4G1gJpbag42aA73dWt0E4JRPsBjixrlZ0mkoO7mWfFISu2CmLryJJaQdqtnXmFBOmd5AmqfouK7FXq/Jl0AHQCbMjCDV6v0NGsFXWX1lHrDHmLa3oWWVb10s06Jo2cQk6H8kDUZ7Uy1trqPxXGA4n6vSwSbWM2B4kexYw86+2GrLlWpKpTY+iEW27YLWhrAQ8k/62DDFbbHSpOiCtgdhulgsfGiP96YOT/pqHXHANhjfzn7FbxnApZezjW4IrsDndPwREt0hjqZy+91i9F7BBxK4B7T1u6LBYB6XrAVjcfDcgvOFok3yMS3dcAAAAASUVORK5CYII=" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[storage]" value="storage"> Storage <img class="aiicon icon icons8-Box" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABK0lEQVRoQ+2a2w3CMBRD3YlgA2ADNmEEYCJWgAlgI9CV2ko8IiWyQ9TI+elPr2/sk8dHO6CTMXTiA90ZeS6czDAR6c7I0pbaBOCLiI002mMm0ij4ZFsTMZFKCSSXVqV+1WX7u9mnyGZU1TPkGnzN8/MmtxEu4OJqE0lFtgdwALAtzvS94ArgDCCeOUNKJExccroWvLPLNCM1cgewHpM8FUz216tRfwRwy6QrNaI+4Ur0pEYeAFYAIs1Y38wIGqHThEg3eyQIxGkVSW4YHCOJ0GlyapFzp8qle4SaCVlsI2SA8nITkUdKCpoIGaC83ETkkZKCJkIGKC83EXmkpKCJkAHKy01EHikpaCJkgPLybCLyzpUE568Jqc8KlfrKZZNG5J3+Jbi0XzaSubwA3a5oM76yk2cAAAAASUVORK5CYII=" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[parking]" value="parking"> Parking <img class="aiicon icon icons8-Garage" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADwUlEQVRoQ+2ZgXEUMQxFlQqACiAVABVAKoBUAFQAVECoAFIBpAJIBUAFhAqACiAVwLyM/o3G7J7ttfYSBjSTSe5uz9azZH3Z2bP17JaZvTCzxz7FWzN7aWbf1phyb4VBS4ByilWAMkFKgHMze+0/wDzzn2trRCgD5LqnEI7KTszsaCKNgOX9R+FZYEm5nyPZMQICwFNfZf7G5gBKH0sgIAA6Xgq0BGQEYAoIgAf+wWKgXhAiQGooAp/89ceRtDCz+z7OvQDEPESoyVpByGkGJiWwLIDSyRKIUs28pOxWq4GUAF98T4xGoOYXQKTcbX+wCjQH8tDMXoUIfPeVQQN2aYgpEbkZgJ6Y2R8LWYKwEqgxv7HLAigXqwQChJK9ARLIHY+AABAzdGHXEahFGyBSTqIKyHMzOwMEiA9eiaIaDwlUzaOBz6mYsUvAzwNA3nsdpzLwwFUFKNkBIjoUpFNAfvkTN/4iCEEhB195EUFqpXggG1b96kUgRkDUZ0kkR72tasXMBEMg5CYgaxhtSeyka3MsBqFEU+UwSh9QGYbziDB2MCV62RFhc5FOCBKqm2mMhyCTZvuNAy+KCIL0xhVfe4NV5H11xI3zbx6j3CO8RBcDgpaEVqRFkLtBcJRo8FuTxHToBSifP3RN02IBSFRqutYNorDTwrNPpsCWwEw5TuvB2aQlfbtASKPP7rw24jszo0s+9d9LIPQdOU6XQWRUUIjG3coVUhcIuXrRCrjTmojejF5t9K6KhTrzZlALFVsn3Y1NLVYzCI4SDUw5y2smX6P8qmJt2g+PCqBdIKw2lalUbAmV9gqnRSAzDWc5FWpvTAkvoPFwNRsR6UR0kBQCjA1e7pVMkHJvsEdwXOcPzRV1ZhZE3fBUE6m9Qsu/LW9H4GpzlP4tAtEgI472fHdqMZtBCGcMpYQKB5TDPc4sfTbuQco85V7GXYL28GxEyFPCq5uLq3DgYm/+cAogSGtdPFTL77a9snSVR74358+/DUJe0u1KP9gziGKGstfGTYtI7LdiirT0Q9tSqnXcNBD1PnS/VBGM9+hSRxrH1nHTQKgaVI9YxVRNek50ZXRax00Dkb5EEDV2sa73VqbWcdNAlALUb0QSQ6TQnYzUqo2bBhLPDFMNZe1IOhep1nHTQHCESWmtY/lFZZdCCK5l3FSQ3vzPfP4/yNYVyFzqmbHKFj49Irs6k+wMZK1/Q9QyYRKQNyVI3B/Fm4reAbOyrWde3fCcA7Lmvwiy4GrjHANCv8QVD3pQ3lbUBrjsz7nd4TR79Bu351yRKzWhTgAAAABJRU5ErkJggg==" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[s_pool]" value="s_pool"> Swimming Pool <img class="aiicon icon icons8-Swimming" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADmElEQVRoQ+3YjZENQRAH8L4InAgQASJABFwEiAARIAJEgAgQASJABIjAiYD6XU2rubndffP2bl+dq52qq31v9U73/6N79tmLC7L2LgiOWIGcNyVXRVZFFmJgtdZCxM7edlVkNnULPbgqsoHY+xFxLyL2I+JTRLyKiMOFxDja9qwVAeBZRFxtigbmzv8ApAXwswCiwsuIuBIRT8rnRfCcVpHbEfEiIm6U6hLAm6paMR+LtW5GxI8lkMwForinEeFqDQGo630fEXcjwvXgPADh/dcVgN/FLvoilxhWAi7Zd+9rRFwqQAAaW2KRlMOCPcU/n1KzVxHTh4UelOwJgP9zGlFHr2SM+xocAOtx2QM4FhuaYvZ4V6ZdC1Q8NQ2OE6sHCP/zODCWUUqBGkBtMzHfIuJ6SVpPK6Dctwdg9aLEl5LnQ8khXn75WFPOwT7rAQIEpj4XttMubZ9QiQUkFSMpKwGSLCpKsVZ933cDgqJAsFW7ss/eVqr/i9kEhAq/it/zbMAMNrPRh2wmAUCUahPnfWCvVdXKIx/G0441mHr6XW5RbgIi/k95CCMYTUBjADKHuO/li4LrseuzgaCBc1BknqmaRmN6gGhekyqXacQGdaMPOOHo1pgdkl0xqUBacZMiCMx+7bZWzW4qMTg1BhrXlEuvD/keEY+qgZA9MnbWmGb2m9UjY0xP3dcXeghr2GMdRbfLv7OYgeD1BYA8a/Lc8P1W2Q8I+7H3ibeDHmv1gmEXFkzlMAfQ1Fuv4jAtRh8pEgjg2gWE+NnnyCYgCq9t5AwBoMeC9haH9Wx8+1FR0QC1Y32wntMowho8nlNnykZTZKQqbKTRZ625QCSnwjY2miqwZ/ROAgREQRZpN/2Ka18at7XRUDE5io319gdZtzqA5Pw2CR6OePusbFQXpi/yPao9F9hMXWry2evR0Gl/7ByxmRnuZS6bz3dTxzoLGylU4dj3lz/EuhkvoIxxdZ1wTt0jmta0ydGXjGTSbWzkGcS4jhVuPxMrWQcqlfAc8K7+coKJUReij7VC2+we9hBAqVCyJmEmbRnJpGLzZbJlOwt3TvSO5nqPrIuyCQj5fhJM/i9Ksqkwb7zbLKMYuwrO66ZB0ru/gUCRBCTHwTbj1wb+xhhPxfLaW9jcOAoBpBUOtwEyN+GSz7E0q+7/70COjd8lGdvZ3qsiO6O6M9GqSCdROwtbFdkZ1Z2JVkU6idpZ2KrIzqjuTPQXYHfjAglwBGgAAAAASUVORK5CYII=" width="18" height="18">
									</label>
								</div>
								<div class="col-md-4 whitebac">
									<label class="checkbox-inline">
										<input type="checkbox" id="amenities-id" name="am[e_backup]" value="e_backup"> 24hr Backup <img class="aiicon icon icons8-Car-Battery" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABv0lEQVRoQ+2a8THFQBDGf68CVEAHqAAVUAIV0AE6oAJKoAJUgAo8FaAC5stcTObJZC/J3XtJ7P2VmWx29/u+u9tkLzMmMmYTwYEDGZqSliLrwDlwDOh6cXwCt8AloOsuI0kMC8gVcBqR3TVwFmFXZ5IkhgXkIyixC7zUZLEDPAc1NjoCSRLDAvIdkmuyi7FpwhjzvGnjQCoUm2wZUy7medPGUqTjtF/+Y1Ug2maPAC3gMQxtPndh6/+t7A/A/hiyr8nxETiQIheh6H2FWiCUXYvbsrhQEdXsUQ1akyoC8gZsASehSi8rmRRx9MZxA8wFpNwRVNCGrsQieCmjglqsEXNrS0FdRh9F/g4kI8NtXbsibRnLbe+K5Ga4rf/BKlKWg3JXtYA5EIuhvvddkaZXlCo7FtNdP9L6xohaI32DWOB1v2+M/wUkhtHUNr7Yh/Y94ooMTZG2ay5q12rrdBX2DmQVrDfFdEVckUwM/Jlao+80zoHNkfd+36vdePV9dTJ7P4IesHq+h6Ebr+uiG6+hM4a9THM4t9snne1Uv+p0TqIzh+3ckRP5fw0nVsrb/0VJRGo6N10bBukySORpMkB+AKHwgteM8EQZAAAAAElFTkSuQmCC" width="18" height="18">
									</label>
								</div>

							</div>
						</div>
						<div class="actionbutton">
							<button class="btn btn-xs showfilter" type="button"> More Filters</button>
							<button class="btn btn-xs hidefilter" type="button"> Hide Filters</button>
							<button class="btn btn-xs searchbtn" id="sbutton" type="submit"> Search</button>

						</div>
					</div>
				</form>
			</div>
		</div>
		<div id="main-wrapper" class="col-md-8 pull-right">
			<div id="main">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
				<div class="listings">

				</div>

			</div>
		</div>
	</div>
	<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
	<script>
		$("#searchform").submit(function (e){
			e.preventDefault();
			showMarkers();
			initMap();
		});

		var map, autocomplete;
		var markers = [];
		function initMap() {

			map = new google.maps.Map(document.getElementById('map'), {
				//center: {lat: 30.900965, lng: 75.8572758},
				//center: {lat: 52.52321320000002, lng: 13.38801060000002},
				zoom: 11
			});
			initAutocomplete();
			var geocoder = new google.maps.Geocoder();
			geocodeAddress(geocoder, map);

			google.maps.event.addListener(map, 'idle', showMarkers);
		}

		function initAutocomplete() {
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(document.getElementById('address')),
				{types: ['geocode']});

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			//autocomplete.addListener('place_changed', fillInAddress);
		  }

		function geocodeAddress(geocoder, resultsMap) {
			var address = document.getElementById('address').value;
			geocoder.geocode({'address': address}, function(results, status) {
			  if (status === google.maps.GeocoderStatus.OK) {
				resultsMap.setCenter(results[0].geometry.location);
			  } else {
					alert('Geocode was not successful for the following reason: ' + status);
			  }
			});
		  }

		  /*function geolocate() {
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
				var circle = new google.maps.Circle({
				  center: geolocation,
				  radius: position.coords.accuracy
				});
				autocomplete.setBounds(circle.getBounds());
			  });
			}
		  }*/


		function showMarkers() {
			var properties = [];
			var bounds = map.getBounds();
			var southWest = bounds.getSouthWest();
			var northEast = bounds.getNorthEast();
			var amenities = $('#amenities-id:checked').map(function() {return this.value;}).get().join(',');
			var type = $('#type-property:checked').map(function() {return this.value;}).get().join(',');

			// Call you server with ajax passing it the bounds
			$.ajax({

				url: '/search',
				cache: false,
				data: {
					'fromlat': southWest.lat(),
					'tolat': northEast.lat(),
					'fromlng': southWest.lng(),
					'tolng': northEast.lng(),
					'amenities': amenities,
					'type': type
				},

				dataType: 'json',
				type: 'GET',
				success : function(response){
					properties = response;
					location1(properties);
					pp(properties);
				}

			});
			var address = document.getElementById('address');
			window.history.pushState("jj", "Title", "/search?address="+address.value+"&fromlat="+southWest.lat()+"&tolat="+northEast.lat()+"&fromlng="+southWest.lng()+"&tolng="+northEast.lng()+"&amenities="+amenities+"&type="+type);

			// In the ajax callback delete the current markers and add new markers
		  }


		  function location1(properties) {
			  setMapOnAll(null);
			  markers = [];

			  var i;

			for (i = 0; i < properties.length; i++) {
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(properties[i].lat, properties[i].long),
					map: map,
				});
				markers.push(marker);
			}
		  }

		  function setMapOnAll(map) {
			for (var i = 0; i < markers.length; i++) {
			  markers[i].setMap(map);
			}
		  }
		  function pp(properties) {
			  var rent = [];
              $.ajax({
                  url: '/searchrent',
                  cache: false,
                  data: {
                      'properties': properties,
                      '_token': $('#csrf-token').val()
                  },

                  dataType: 'json',
                  type: 'POST',
                  success : function(response){
                      rent = response;
                      addcards(properties, rent);
                  },
				  error: function (error) {
                      $('.listings').empty();
                  }
              });

			}

			function addcards(properties, rent) {
                var card = "";
                $('.listings').empty();
                for (var i = 0; i < properties.length; i++) {

                    //console.log(properties[i].long);
                    card = '<div class="col-md-3 col-lg-3 col-sm-6 lp-grid-box-contianer card10" data-title="Buy now 10 shots" data-reviews="3" data-number="+001-587-4567-89" data-email="russel@example.com" data-website="www.example.com" data-price="$50" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="51.516576" data-longitute="-0.137508" data-id="10"  data-posturl="post-detail.html" data-authorurl="author.html">'+
                        '<div class="lp-grid-box lp-border lp-border-radius-8">'+
                        '<div class="lp-grid-box-thumb-container">'+
                        '<div class="lp-grid-box-thumb">'+
                        '<img class="img-responsive" src="/images/icon_size/'+properties[i].main_pic+'" alt="grid-11" />'+
                        '</div>'+
                        '<div class="lp-grid-box-quick">'+
                        '<ul class="lp-post-quick-links">'+
                        '<li>'+
                        '<a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>'+
                        '</li>'+
                        '</ul>'+
                        '</div>'+
                        '</div>'+
                        '<div class="lp-grid-box-description ">'+
                        '<h4 class="lp-h4">'+
                        '<a href="/listing/'+properties[i].id+'">'+
                        properties[i].type+
                        '</a>'+
                        '</h4>'+
                        '<p>'+
                        '<i class="fa fa-map-marker"></i> '+
                        '<span>'+properties[i].city+' '+properties[i].zip+'</span>'+
                        '</p>'+
                        '<ul class="lp-grid-box-price">'+
                        '<li><span>'+rent[i]+'</span></li>'+
                        '</ul>'+
                        '</div>'+
                        '</div>'+
                        '</div>'
                    ;
                    $(".listings").append(card);
                }
			}

	</script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initMap">
    </script>
@endsection