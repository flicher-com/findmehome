@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Contact Us | FindMeHome @endsection

@section('content')
    <div class="about-page-heading about-page">
        <div class="page-heading-inner-container text-center">
            <h1>Contact</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><span>Contact</span></li>
            </ul>
        </div>
        <div class="page-header-overlay"></div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h3 class=" lp-border-bottom padding-bottom-20 margin-bottom-20">Address</h3>
                <div class="address-box mr-bottom-30">
                    {{--<p>
                        <i class="fa fa-map-marker"></i>
                        <span>Your Address at Lutaco Tower 007A Nguyen Van Troi</span>
                    </p>--}}
                    <p>
                        <i class="fa fa-phone"></i>
                        <span>+91-9780524400</span>
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        <span>contact@findmehome.xyz</span>
                    </p>

                    <ul class="social-icons post-socials contact-social">
                        <li><a target="_blank" href="https://www.facebook.com/findmehome.xyz"><!-- Facebook icon by Icons8 -->
                                <img class="icon icons8-Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADEklEQVRoQ+1a7XHbMAwFNEE6QZIJmk5Qd4N4gmaDOAtQEBaoM0HTCepOEGeCuhPU3aBdgOiBJX10LFmMYsl0T7zLj9i0xAc8fEgPCA3LGPMREScAcOX/mrYO8fkKAFYismDmb3U3xOcfEtG1iHwCgIshTtjhHmtEvCOiRfzbLSBlWSqAmW4QkV9FUcwBYElEapGjLSJSVkystTNEPPcHmVdVdRcOtQFijJkj4q1+4REriOwWEc08Y9TY98zsDO+AeDp99SDeHdsDbdZTD4nId3/eqdLMASnL8qfGRM6eqInl4Jl1VVWXSEQ3IvJZY4KZcw3wWicZYzTwzxFxisaYB0TUVKuZIMu4aKJaiBcR+YJlWSrXrhAx+9iooVeIlZUCEd1QVdVOTWkLuhy+D+c/ChDfNVz7jiGOyyUArEVkVRTFU0r2PAoQnzY1zacmFZeR9nl+cCAexCMAnInIU1EUDwCwIKLf4aBEpL3dhbV2ogkohfKDAwlJRTMMM9+0xVdq7A4KJHQOL6lVWQLpUqtyBbJExPeI+IGINDNtFhFpzJQAoFlsJwm0lYVBqbXPusFbTTFzMkA2Fq3xVltC8A2vK+iDFMR9HkmNhSZQ2VAreyDhgLEl6/hety/+DSK+iYvmc8/07pFDATl6sL+GMtqqiMijtjLMrG1L4xrMI20WrTuhMYYQsUxpZ3IH4p5aRaRiZjpljzR2AicZ7Ih4SUTrLDzSNf2KyB9mPmur7r3HSHyAsbK3uePfy8Wx10qw0/aWkVoJJhuplWCknS0jtRKsNlIrwUgjtV5jpP/n5YMxZoWIb/sUevrKWkEUFZEfg0hvPQJxgqiT3iJpulWL6MLh+CXavrcoXR6JIzV66uS2SB3tRRDtwyOREOrU6EEGBg4NpHFgwHtlM8IhIjNmvu9Kpabn6kNQyxhzi4hORt8Z4Qg3judRvCg5TxUlU56ruwJRD1hrVZbQuRMnPcQg9P/aMSdrrXonTOEcyjEHuY6fWprtHXOK76TZzFrrJGStMwc5RceLaJ3QwbOiKFQ83ZrTCpf8CzG2NErUDo89AAAAAElFTkSuQmCC" alt="facebook"></a></li>
                        <li><a target="_blank" href="https://plus.google.com/b/117595236135368710066/117595236135368710066?hl=en"><!-- Google Plus icon by Icons8 -->
                                <img class="icon icons8-Google-Plus" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEh0lEQVRoQ+1a4VnUQBDdWQpQKhAqECsQKxAqACsQC2Azuw2oFXhUIFagViBWAFQAFkDG762z+fZCcknOSy5+n/kDHLlk3s7szHszS6blYuYDETkxxhwYYw7b7pvo82/GmCsiumDmq6Z3Uv1DBfB+Bsa3rdE3InpXB7QEhJmPROSTMeapiPwyxiystZfMjBXZ2sXMh2VZHhljTonoiTHmnojeMPNlMqoCwsynCsKIyIW19oyZ77dmfcOLmflpWZYfiAghb4joOIGJQJh5T0R+wBOKdDEnAA3hnxYdnnnBzDcRSFEUX7En4IkQwumcQSTbnHOXRPTaGHPpvT8m9cY19oS1dm9u4bQiqyLMbrBniGifnHOIubci8jGEcPYveCPzSmU7gCCdvSSiV9vOTkMXEdlMRL6KyHcqiuIOm3zoQ2Z2/z2AyMyMWsucCoj3/lGVX+uJE38pOeI/kIkXvvV1/z0yF08kO/7aI86510QEOrOnmqURI3K8tZbHqlFrA9Ei9EkpzQdjzE2NYgMQRNA70O02IbQpz64FJFF9rHIIYUk1QpCVZQmWAL2Aa+G9f7Mpg9ueMxhIIpeqAxrpDDOfiQjUZbymoD2DgWS02awqns45MNJnACIiX0IIUHajXYOB5FSmA0hkpGr5jfd+fzQUf7RUpFi9KntimVnI7LbpFtX9n9O9Y1OfvwVSaeX6auegm5LCpr0zCAhenofWKklcA+JDCNzH+DoL7+vJwUCcc4vUvdCMBNH/qFmWpehB0nkyINqKiRpZVxhFD2m4ahnhHnRjRGTXWns4pBhOBgTGo5aUZYnuxXMFAxALfGatjQ00EbnF72jR9AmpdM+kQNJLkZnKskRlR18YvbAEDEWwMeS6QG0FSG7UOul2XXndlAAGb/a2Fc1brZoE0GAGmWy95goE+wYbPyUBAFhJGGcH5Pz8/CWsttbCA9gv+fUoq7Vt7K79s4olrBVamrVOiAgZCoOgW+gRfRF+HtU80wqmbvxkm905VxBRrNIi4q21i3qKVU2CwlllMdzbp7pPAqQoCgx/Ype+K71q4YTAqmqN9363K3xGB1IbAPVqdCsYhFXUJeiWdxXI0YEURXGtDYZBii9fgC4v1kkp/t44acxXaoh0zTrlv0IIozXJe2ct5xzGW7FG9N24ysuifh97ClYBSYa2ubJG3wEKjLdx1p1xMbBgzC32x5yCKdu+Q2uqc9DTQN/vRYSttRjeP5r6akjBEwAxiMp3Zbb6/5cGPX1Gb1of0FSIlVwvgLgSkTiDJyJU9th1nGq8nduOYShejNE0wgZpsnW2roN71JODWtFDhb+y1gIUDhgM0iJDPaF7EOGLjAoZ8SIOd9IcsYvsrfPCsb6TinRqcFQHBhKDRfyHEPxYBmziuYkuaf/5oDowoK7COZTUjwJfgq6Y3REObckmurR8hCNLm5CwABEPriQ9vrOz83NboJA1Hx4enqeeQDrwY609bTxUk4GBUAKYPENtIiI28gydtwDEUkJpneRqyo0ZSrNUrgA3YlSfh+hxKxRgZEVIh8Zi/BvU1cKW0t95DwAAAABJRU5ErkJggg==" alt="google-plus"></a></li>
                        <li><a target="_blank" href="#"><!-- LinkedIn icon by Icons8 -->
                                <img class="icon icons8-LinkedIn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEBUlEQVRoQ+1a7VEbMRDVqgHoAKgAUwFOBTEVBCoAGtCt1EBMBZgKMBUEKohTAaSCkAa0mXeRPPL5PmQP3MGMb4Y/Rnfa1dt9+yVSDY8x5hsRjZVSo/DXtLSP3xdKqYWIPDrn7uo2pOqPzDwRke9KqcM+JNxijxciumbmefruiiJFUUCBKywQkV9a65lS6pGZcSKDPcwMqxh778+J6DgIMrXWXkehlooYY6ZEdCkif7XWzMzTwSRv2ZiZr7z3TER7InLjnCsPvlQkmNN9UGI8NAJdBwiERORnqQDRGcysVKQoimf4RLC9D4lEjS9fBV9+sdYeETOfi8gtfMI5B1v8NI8xZgGfASpkjJkREagWTPAp0IgnDX8BKiJyR0VRwNZGRHTS5BshpsCpImLg9GkTp/cFaeIrCygi2NhauxZTgv/cKqXOG4SbWWsv+hK8bp8of6siCXSgZCASg9DEew+63iOiC2ZGvBnkyVIkMbuS4lJJI0kgdbDWngyixX/GLS2qFZE2s2PmfRH502aWfSiXpYgx5jWYzxEzv1QQORSRZwRR59x+H0Jv7SORmuEb1tqz9ENFUdwrpZBg3jnnmsjg3fXLQoSZD733CDp7SikgsnR2ZAIhpRlV0Xp36ZMNshQJedjIez8nooNUQBH5rbWeDJ2XZSuSRFGk0Si0lNZ6UWWxPlGomHgWa5VRv0PI0n8iVeesZeaxiHxFjZF8/zVUgXOt9UOuuWYhEhd1nTaygty1wc8mHd98DSmQ7dp7I0Va0pdlepOR6pRr8YAklFJTrfU8+hjiUqgCJ0hiw1IQzRdmBlq1z2CKhBIaxVujcEgGvfePgS3XqH8bH+lKKLMRQe0QiKJViYRcltTfls/1jkiXrdf9P8nnyipw68iea/epszf5UxTCGFMQETIBtJteRGSmtb5pMjVjDNo/B7E2ryozCCItFN3o1MYYdEyKtGMyqI8ktc0yIwgpELKGYxGxzjmunniIOT9E5Mk5VwbkQRVJapuVQiy2oprqmqRcqPWT3k2rzd828cWPgEgjle8UeYtSFxCnJ/kWp5qTCu1MCyeQc1I7RCom2paG1B3ojn7rompOrrWLIx2mtzOtnWm1jC/egroxsYrjq7VBT25nZJMuShuFdlWR1XfjoAd9gNbRmzEGDYDTtg1E5ME5N9lkbfV72767Mnr7KHOOLjQaAmUcG56V47akLv40A9G04nTOHa5cGFBKYR6ChtigVza60Gm8MBBQKa9wQBkRYefcTdcHh/i/MeaSiMox+toVjqRVE5XBTxhBo1XzNDRCofN4GtpIZVO92lWpveYUJrYr85AhTr9uzzCXuWq95pS+CDYL8xBcJohXiwbRB3ECFqK1xpWr2lH4PxVzvVlIavAKAAAAAElFTkSuQmCC" alt="linkedin"></a></li>

                    </ul><!-- ../social-icons-->
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="margin-bottom-30 lp-border-bottom padding-bottom-20">Contact us</h3>

                <form class="form-horizontal" id="contact" name="contact" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input class="form-control nameform" id="name" name="name" placeholder="Name:" type="text" value="" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" id="email" name="email" placeholder="Email:" type="email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input class="form-control" id="subject" name="subject" placeholder="Sunject:" type="text">
                        </div>
                    </div>
                    <div class="form-group mr-bottom-20">
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message:"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="submit" value="Submit" class="lp-review-btn btn-second-hover">

                        </div>
                    </div>

                    <div id="success">
				<span class="green textcenter">
					<p>Your message was sent successfully! I will be in touch as soon as I can.</p>
				</span>
                    </div>

                    <div id="error">
				<span>
					<p>Something went wrong, try refreshing and submitting the form again.</p>
				</span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection