@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') About Us | FindMeHome @endsection

@section('content')
    <div class="about-page-heading about-page">
        <div class="page-heading-inner-container text-center">
            <h1>Contact</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Home </a></li>
                <li><span>About</span></li>
            </ul>
        </div>
        <div class="page-header-overlay"></div>
    </div>

    <div class="about-box-container aliceblue">
        <div class="container  lp-section-content-container clearfix">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-box text-center">
                    <div class="about-box-inner lp-border-radius-5 lp-border">
                        <div class="about-box-slide">
                            <div class="about-box-icon">
                                <!-- Inspection icon by Icons8 -->
                                <img class="icon icons8-Inspection" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACgElEQVRoQ+1a0XHVMBDcrQA6IFQQqADogFQAVECoAFIBUAGPCkgqgFQAVEBSAVDBMsvIM86zbJ+t2C+ekf7es06+vduT7s4iCoek7wAeFS5zTvKkZA2WCFtWkkrXsDzJIl16hSW9B/AcwFFE0bmKTDDEFYAdybOcPlkgkj4AeB0B0MxZAUjzqjOS7/Z16wPyG8B9AI9J/hgC1Fi0FMiYvCTHoePxiuTDKJD/vB9bvB0jkbk5g0wxxNDcPo/cABLhcSmQIa83a1cgEUtEvBXZNHIe3ffArXmk52XfADyJKDsw54Kkt/obY1UghQAGxSuQxjxTLFE9ErDAFINOOkfmnhUBnbNTKpAaI3O5MyK3KWpJOiLpWqMztgbEqbnHyT6gzQCR5ALpLYCfJDt1/yaAtAole+MZSeds28u1Wt2XjyRPNxkjkqy4mxvXbiWR/LM5IN6lUu3tnkCWUnPOs9VTFElfATwF8Jnky6GjZPVgl2TrulmRpUjLwlb8E4C/7pcF5md7B7mcr9gjCYSt3Ow+fXw32F+pzeQz43wsIVjVIwmIt85jAAZh3nd6YZK+pM5ltqy9E8E+BkaS63EDCVHqoMGewLjV+iJ55g3JXfq/oZT/85zQWJVamdN4l8D40av0ycF95EuS3q3C46BArGUrh2qUNqV88GWz3D5kBweSwDRbrX9OotRBY6Rn1zGY01xmG+HXnfBIRNGxORXIHG6OWbXkefVI9UgJfwZkK7UqtbZGrYX0HV028i1zUoU4+saFJtwakIX0m7zsnK+6LlnvRa5wTNZmpkCrM3lNsnPRp49aTU925msXFYtfqmkVR07DHyyqVnxxdyV9zalzM8hL/AMDhk9gHow7uAAAAABJRU5ErkJggg==" alt="Inspection">
                            </div>
                            <div class="about-box-title clearfix">
                                <h4>PLANNING</h4>
                            </div>
                            <div class="about-box-description">
                                <p class="paragraph-small">
                                    Sed ut perspiciatis unde omnis iste natus error sit v oluptatem accusantium or sit v oluptatem accusantiumor sit v oluptatem .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 about-box text-center">
                    <div class="about-box-inner lp-border-radius-5 lp-border">
                        <div class="about-box-icon">
                            <!-- Rocket icon by Icons8 -->
                            <img class="icon icons8-Rocket" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAE70lEQVRoQ92ajXHUQAyFpQqACoAKgAoIFQAVECoAKiCpAKgAUgGhAkgFQAWECoAKxHwe6Ua3Xttr3/kS2JmbJGN7b59+np7kqPwnS/8FHGZ2R0Tuich9/9xMP0VZ1xWImT0TkSP/AGRwXTsgZsbBAfBERLB6rD8i8kVEvvnnt3vkjYj8UdWb18Ijbv2Xfrg4/HcR+SAi56p6WbrDQX8WkQtVPbpSIH4YrErss7D8WwDUDp/BmNmxiLwXkU+q+uRKgJgZYfNaRPBCAHipqnigaZnZie9xqqonBwdiZlgfS4YX3onIiaoS983LzMiZhyLyVFXPDwrEQRDXeOQnSa2qJPDsZWa/fJ9bGOFgQAoQJPLRXC8EWt/rK8ZQ1Y6aDwKkAHGmqiTq4mVm5BYk8U5VuzxbHcgYCGctkp76wTr3wxH/g8vM8AY51uXH6kBcWvCl5MSWJxLr1A7cMVHtgu/5Iwph3LOaR5xiSWws1xWtFOP8zjXqBgcO2iXk+PuGiDxS1Z5nkgG2DLMKkAJEL7ETdb5SVQrgZqX47wpd6ZXEVg8y460FhDqBdaHY+yU7mZn5ATvqLIDAQoROp2qLa1HNtzy8So6YGRZ+4WEDxfbqxBIg7mUAkm+bJF8lR5L+Yf9qjHPBzGCaxyLSHFrJQD1v7NUjqUix7/Mx3ZSUK2FFcp+5ZZHwkTMbQxR7b+XGXj1S0OymSE3UghB9o/TrIQWFkzuDe48me8E+Y+eKa1WmGXrQPUNlJsxYn/BIpt1U/L6ragjN3pZTQD56t9YCYif9NFD8gv2oN7Bfr8GaDK2CfaqbtNzTYoEGEFX2y89VPVKwTzW5WhlqCRAzy56YBFFlrRb2KYTgKEPNAVLkJOHUBKIHpIV9ChbZWZIH0F1A1ICEPA5+p/hsVWYzQ+wh+kZZZKYnYKPoHBeRRqllODQTvbxgClQoHwAMaqg5h0+eQBiSE0iPC29/Z/XvYzkSEz5+IqnzmhW7Y+AKwtgpTCfVryc2RQv5wNpLcidmYs/BRqrVy5NA2Cj1D03yY8ILhBCFFm/j3VnzrKG9W4EECfTUaqvF3CB5prW3EK3mSHmwIo5JwrtLxjiuq/BEDKd7TdUco5T3TmktvjSaGSxI4jNUfjrnS82MRmurpd33K40pICG1oUVoF3oGDEPm5y1giqRmPAqoXhvbstfYPVNAorfu9FZqiCbZq1Kpu6SONvfQHokCuUnyImeqnhmb8V4VEKouCcraqOACDP03taWrxsW12iio8/JBPOIWfayqp6nn4KD00Z328jADBDkT2gx6jblutVIfxCOufpnFxmG6sYuZMQmkspdg6KNjJFrmYlUBrA7EzACQ561bsiGB4cBIFpiMiXiMQgkjgCIyAd3zSJrbrhNaaUzJIRnN8Aap9gIyhm/Z+lsyIzVml6p6N24s34+MDRKWULE6TfL2h9Wb4KWD8HaJMIMA8Bxy/9SnHuXYk7/JHVTAZUEATEqOl6iD0ToyNTT2xI7C2CQa8yRRRG6nl55Nzy/1SIwvh5Izy5TBMWj+8mQcPBPaai/yfwgkoRVvR4feR0ReVGeutY2LAcZeVe4YkHg72gOyy8jHzKLXJ7cGB2tLwqj2DB4JPYUIDKVLYSOpY0S5cwe3rwOPeSSA1O7pXo2Vb5XWPtSS/bNHeJ4ix4r/wqH3mD3RWHKQXZ/5C8V3y1F/Ng2NAAAAAElFTkSuQmCC" alt="PASSION">
                        </div>
                        <div class="about-box-title clearfix">
                            <h4>PASSION</h4>
                        </div>
                        <div class="about-box-description">
                            <p class="paragraph-small">
                                Sed ut perspiciatis unde omnis iste natus error sit v oluptatem accusantium or sit v oluptatem accusantiumor sit v oluptatem .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 about-box text-center">
                    <div class="about-box-inner lp-border-radius-5 lp-border">
                        <div class="about-box-icon">
                            <!-- Hearts icon by Icons8 -->
                            <img class="icon icons8-Hearts" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADpUlEQVRoQ+2YjXEUMQyFpQqACkgqACogVECoAFIBSQWECkgqgFQQqACogFABSQVABWK+G5nxbdY/6/VyTGY1c3M3t7aspydLWqncEdE7gkNWIP8bkysjKyMLeWANrYUc26x2MiNm9lxEDkVkT0QO/ORrEeHzRUQuVJXfSTEz9r70/fzmg7CfvR9V9dMUVNVAzIyDT6NDc+dg0NEQkAN4HzkgpwNAp6p6UQOoCMTM7ovIOxF55QpvRORMRK5UFYPFDcSrrIGteyLyS0ROVPWDr+EZetD3G6+LCM+uA2Azg+HHInIsIg/9PNagB31JyQJxEJ9dOYcfB8NSGn0PzL32NUf+DRPIuXs6a5iZARyH4ZQrEXmWA1MCwuEo/M63qqKwStyQYHzYQ7htGKoRM4Md1j/iW1WDU25tTwKJDIGJgykgwikDMJNARDoAQwjDTFJHDsgPv9hNBkSGEB6iqsR9k0QO4T7tjykZBWJmXNhLEblR1ZAaW43gcgMkeydKys2MLEYCeKGqJIotSQEhLkm3ZIuNR3ctZgajZD3qVMigf81KASEmn3qm2KTYXYunZjLoV1UNhbgIxDwcinXmXwI0s6RdKUZWIEsy1MIIhY8i9KSlfiwBpvWOhKw1q4b0BNSatbKprqeBtbrMLFsSUpedIkhlRx7MLWa1xqbWeSP605/vj73v5FqUUEveqird7M7EzDj/TaqGbEpFxgsUHQoQrQVemNVitHrB2SA6aHVo5UcLdKmND6ycz2n6WkGwz8xokXi3Ga3oQXcJCC30N1+c9MYcQ3N7o5TLsmwpKLYgUXwSWijLDhZ6gfLXZ5xISBXvaRGI0xtCrPjK2QPI4BU7G1JVoRUWuWLAUO0XBTMAwSs2b6fFRFPFiLNCbQFE1TCghZmRYcdeDYhs+h0zZDAMwEskgOqBROFik1hI99wJmDicch+rGUmE2dbsqoUFZzueeVWHU3zeZCB+MF6j92F8ipyp6kkLEDPj9TUMJpgqMjsr3onhWU1AInZCc8lfhBjdclWoeZgy9yKkkFnzgVlAnB1aGdhhwoEnmdcyTUyKmVGp6Z9glhEsw79Zs4HZQBKhVjvEZuIOiMmh1DW0hsp8HgY7YYhNqG1mUP6MUApDbADcmk+13LPJ6bfmEK8FW4nAjQ+zqG4szM5alYBIBNwD2EGqpvk1usfWdLkjqcOjAsqSSdP8qYAWBRIlgtmz3xKwxYGUDOj1fAXSy5O99KyM9PJkLz1/AOAWmEIQ8JAtAAAAAElFTkSuQmCC" alt="heart">
                        </div>
                        <div class="about-box-title clearfix">
                            <h4>CARING</h4>
                        </div>
                        <div class="about-box-description">
                            <p class="paragraph-small">
                                Sed ut perspiciatis unde omnis iste natus error sit v oluptatem accusantium or sit v oluptatem accusantiumor sit v oluptatem .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 about-box text-center">
                    <div class="about-box-inner lp-border-radius-5 lp-border">
                        <div class="about-box-icon">
                            <!-- Customer Support Filled icon by Icons8 -->
                            <img class="icon icons8-Customer-Support-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEL0lEQVRoQ+1ajVEWMRDdV4FSgVKBHxUIFQgViBWIFYgVCBUIFQgVCBUoFQgVCBWs8zKbz1y+3OXyc8o47Azj4F02edm/t3tAGkVVX4vIroi85A+AvZRKVf0mIj9E5Jb/Arhu3HqwHDXKVJUHfysi+yLyPNQBIKlTVTXa615ELvgD4LLmHIN9SxQYgI9mgeTSAiDhelrpAwACq5JZFlFV3voXs8DkRpVAvM4rA0QXLJIsEFVdichXi4Gs8kYg1E+XOwBAULNlEoiBYJAO4mBKewcgXv07AGdzkYwCqQHBTTsCobodALPcbCzD0ALf57pTZdaac9l0M4JhMpiOzdRTVT0Rkfe5xannnS3CLa7GatPgAuPDWIplXFTJAkB4jr1c8G+4llVgFrwqWQhI1ioDIKpKmvGzCoEtWghINvBjINWx4cEvCOQUwNHYJcdAaA1apVoWBHILYDsLxOoGU26TLAhkMujXFlFVmu1zE4r+BTE+Dokl3X9DQiCkA6TmTbKwRc4BHOaAkKSxSWqROwDJGFNVVucXLcqtIdvJAWkN9E8AjqcOqqp8zn6mRbZTlCV0rbiDK9lszVRVle7JeCP9p5D0nQA45y+qStdgb1Mr7CgP4sU9gLgAtOaL1MYDiPciIFKN+w6JZYOytAJZx4SqMnUTxJ1ZxNNv/h8zDeODQwfn440xs9bjbysEQsr8rNDezqWCGyaIFW891GPWIjCC8WtaXWyQikMgNVnLmTiwBlvUC2PQPg54cL7DiQtbZnebrSzbWmIGvru0EAgnGG8KLbJlPu8Thf89zICOWoSElLXGrPSrcL/49TX/aqrsvvgFMysPJHRTF0cxEIuTlkzpQbl2OATCHqS0oXJKVJX+/8qmH961/ODgMHKtGwCrXtxORFy1j9lvacD71Ot5Gqs3waWC3c8A4gTR6F1yD2CrtR9ZU+vAKgRDYDd2QlqK6ZfUxVnD3KqVSfgLuASw36NDDAsiMx8PnhIC27Xk0Jp6vf4H0/knRvwTVa1Jw+v5k1EQWsQDIgBSlMGwrQPvIuU59rwrNXyo7duPAJxOObyquhGTf88Cnmm/hBUPAGxU9qgS17JUxgfj4dpPCC3tsj7RSp7i0+oM+lurJ9xv1hxtrN+ZmjR6StGaVcbWM7MRjPuUYNbhRXDKyRhK0v0iIKa4V0DmLoJACChO2UmvKAZiYHyhyx2m9bljBJF7J2O1FsjfssriQOiv9NtSel9qoY02eSQ9PwBIfquZ88WqhhWXAuH7jAnXDts0J9X/Mxsm59JzgHSZd9UgS6zJz7XGNurQAHXCIKQj/I4/SAqTBTHKHiR5zaPUDmgmvylmXcvScI8GqAXL6IRxtkX+MRC6Ezlc9uvuY7EI/y6FBZDkkZMYpnxmy7OxmIjN+yiAjFXrEl98AlJyW7l3nywS3NB/41q/AQX0N1EALwUWAAAAAElFTkSuQmCC" alt="supportive">
                        </div>
                        <div class="about-box-title clearfix">
                            <h4>SUPPORTIVE</h4>
                        </div>
                        <div class="about-box-description">
                            <p class="paragraph-small">
                                Sed ut perspiciatis unde omnis iste natus error sit v oluptatem accusantium or sit v oluptatem accusantiumor sit v oluptatem .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.about')
@endsection