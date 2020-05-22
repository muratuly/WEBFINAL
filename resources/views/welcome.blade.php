@extends('layouts.main')
@section('code')
@section('title','KÓRERMEN-movies and tvs online')
<!--login || registration -->
@include('layouts.log')
<!--                      -->
@if(session('successMsg'))
    <div class="alert alert-success text-center" role="alert">
        {{session('successMsg')}}
    </div>
@endif
<div class="container mt-4">
    <!--Start code-->
    <div class="row">
        <div class="col-12 pb-5">
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--dots navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class=""></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                        </ol>

                        <!--carousel inner-->
                        <div class="carousel">
                            <!--Item slider-->
                            <div class="carousel-item active">
                              <div id="onceinhollywood" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Once Upon a time in Hollywood</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://i.pinimg.com/originals/82/75/15/827515d171acb7b30f0a55f90f3ddc39.png" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R (for language throughout, some strong graphic violence, drug use, and sexual references)</dd>
                                      <dd><tag>Genre:</tag>	Comedy, Drama</dd>
                                      <dd><tag>Directed By:</tag>Quentin Tarantino</dd>
                                      <dd><tag>Written By:</tag>	Quentin Tarantino</dd>
                                      <dd><tag>In Theaters:</tag>	Jul 26, 2019  Wide</dd>
                                      <dd><tag>On Disc/Streaming:</tag>	Nov 22, 2019</dd>
                                      <dd><tag>Box Office:</tag>	$220,776,832</dd>
                                      <dd><tag>Runtime:</tag>	159 minutes</li>
                                      <dd><tag>Studio:</tag>Columbia Pictures</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                      Quentin Tarantino's ninth feature film is a story that takes place in Los Angeles in 1969, at the height of hippy Hollywood. The two lead characters are Rick Dalton (Leonardo DiCaprio), former star of a western TV series, and his longtime stunt double Cliff Booth (Brad Pitt). Both are struggling to make it in a Hollywood they don't recognize anymore. But Rick has a very famous next-door neighbor...Sharon Tate.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1047883" style="display: block;"><iframe src="https://voidboost.net/embed/1047883" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1047883" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--first slide-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="" data-toggle="modal" data-target="#onceinhollywood">
                                                <img class="img-fluid" style="width:550px; height:469px"
                                                     src="https://i2.wp.com/itc.ua/wp-content/uploads/2019/08/Once_Upon_a_Time_in_Hollywood_i01.jpg?fit=770%2C546&quality=100&strip=all&ssl=1"
                                                     alt="Bootstrap news template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">Once Upon a Time in Hollywood</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">A faded television actor and his stunt double strive to achieve fame and success in the film industry during the final years of Hollywood's Golden Age in 1969 Los Angeles.</span>
                                                <br>
                                                <span class="news-date"><a class="text-white font-weight-bold" href="../category/author.html">August 8, 2019</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                              <div id="irisman" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">IRISMAN</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://upload.wikimedia.org/wikipedia/ru/a/a2/The_Irishman_%28poster%29.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R (for pervasive language and strong violence)</dd>
                                      <dd><tag>Genre:</tag>	Drama, Mystery & Suspense</dd>
                                      <dd><tag>Directed By:</tag>	Martin Scorsese</dd>
                                      <dd><tag>Written By:</tag>Steven Zaillian</dd>
                                      <dd><tag>In Theaters:</tag>Nov 1, 2019  Limited</dd>
                                      <dd><tag>On Disc/Streaming:</tag>	Nov 27, 2019</dd>
                                      <dd><tag>Box Office:</tag>-</dd>
                                      <dd><tag>Runtime:</tag>209 minutes</li>
                                      <dd><tag>Studio:</tag>Netflix</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                        This biographical crime thriller follows Frank Sheeran (Robert De Niro) as he recalls his past years working for the Bufalino crime family. Now older, the WWII veteran once again reflects on his most prolific hits and, in particular, considers his involvement with his good friend Jimmy Hoffa's disappearance in 1975.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/462305" style="display: block;"><iframe src="https://voidboost.net/embed/462305" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/462305" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="" data-toggle="modal" data-target="#irisman">
                                              <img class="img-fluid" style="width:550px; height:469px"
                                                   src="https://sun9-30.userapi.com/c857420/v857420821/1d7a9b/xiAUl0Q5HyI.jpg"
                                                     alt="Bootstrap news theme">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">The Irishman</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">An aging hitman recalls his time with the mob and the intersecting events with his friend, Jimmy Hoffa, through the 1950-70s.</span>
                                                <br>
                                                <span class="news-date"><a class="text-white font-weight-bold" href="../category/author.html">November 27, 2019</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                              <div id="shindler" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Schindler's List</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://images-na.ssl-images-amazon.com/images/I/819Ur3dNziL._AC_SL1416_.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R</dd>
                                      <dd><tag>Genre:</tag>	Drama</dd>
                                      <dd><tag>Directed By:</tag>Steven Spielberg</dd>
                                      <dd><tag>Written By:</tag>Steven Zaillian</dd>
                                      <dd><tag>In Theaters:</tag>Dec 15, 1993  Wide</dd>
                                      <dd><tag>On Disc/Streaming:</tag>Mar 9, 2004</dd>
                                      <dd><tag>Box Office:</tag>-</dd>
                                      <dd><tag>Runtime:</tag>196 minutes</li>
                                      <dd><tag>Studio:</tag>Universal Pictures</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                        Based on a true story, Steven Spielberg's Schindler's List stars Liam Neeson as Oskar Schindler, a German businessman in Poland who sees an opportunity to make money from the Nazis' rise to power. He starts a company to make cookware and utensils, using flattery and bribes to win military contracts, and brings in accountant and financier Itzhak Stern (Ben Kingsley) to help run the factory. By staffing his plant with Jews who've been herded into Krakow's ghetto by Nazi troops, Schindler has a dependable unpaid labor force. For Stern, a job in a war-related plant could mean survival for himself and the other Jews working for Schindler. However, in 1942, all of Krakow's Jews are assigned to the Plaszow Forced Labor Camp, overseen by Commandant Amon Goeth (Ralph Fiennes), an embittered alcoholic who occasionally shoots prisoners from his balcony. Schindler arranges to continue using Polish Jews in his plant, but, as he sees what is happening to his employees, he begins to develop a conscience. He realizes that his factory (now refitted to manufacture ammunition) is the only thing preventing his staff from being shipped to the death camps. Soon Schindler demands more workers and starts bribing Nazi leaders to keep Jews on his employee lists and out of the camps. By the time Germany falls to the allies, Schindler has lost his entire fortune -- and saved 1,100 people from likely death. Schindler's List was nominated for 12 Academy Awards and won seven, including Best Picture and a long-coveted Best Director for Spielberg, and it quickly gained praise as one of the finest American movies about the Holocaust. ~ Mark Deming, Rovi
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/329" style="display: block;"><iframe src="https://voidboost.net/embed/329" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/329" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#" data-toggle="modal" data-target="#shindler">
                                              <img class="img-fluid" style="width:550px; height:469px"
                                                   src="https://sun9-55.userapi.com/c853428/v853428667/21dac9/P01GBC8LmiY.jpg"
                                                     alt="Bootstrap blog template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">Schindler's List</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.</span>
                                                <br>
                                                <span class="news-date"><a class="text-white font-weight-bold" href="../category/author.html">May 21, 1994</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                              <div id="it" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">IT</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://www.film.ru/sites/default/files/movies/posters/16607995-946826.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R (for violence/horror, bloody images, and for language)</dd>
                                      <dd><tag>Genre:</tag>Drama, Horror, Mystery & Suspense</dd>
                                      <dd><tag>Directed By:</tag>Andy Muschietti</dd>
                                      <dd><tag>Written By:</tag>Gary Dauberman, Chase Palmer, Cary Joji Fukunaga</dd>
                                      <dd><tag>In Theaters:</tag>Sep 8, 2017  Wide</dd>
                                      <dd><tag>On Disc/Streaming:</tag>Jan 9, 2018</dd>
                                      <dd><tag>Box Office:</tag>$326,898,358</dd>
                                      <dd><tag>Runtime:</tag>135 minutes</li>
                                      <dd><tag>Studio:</tag>Warner Bros. Pictures</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                      New Line Cinema's horror thriller "IT," directed by Andy Muschietti ("Mama"), is based on the hugely popular Stephen King novel of the same name, which has been terrifying readers for decades. When children begin to disappear in the town of Derry, Maine, a group of young kids are faced with their biggest fears when they square off against an evil clown named Pennywise, whose history of murder and violence dates back for centuries.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/453397" style="display: block;"><iframe src="https://voidboost.net/embed/453397" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/453397" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="" data-toggle="modal" data-target="#it">
                                              <img class="img-fluid" style="width:550px; height:469px"
                                                   src="https://sun9-15.userapi.com/c853428/v853428667/21dadc/CxOV6rjipF0.jpg"
                                                     alt="Bootstrap portal template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">IT</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.</span>
                                                <br>
                                                <span class="news-date"><a class="text-white font-weight-bold" href="../category/author.html">September 7, 2017</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>

                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End slider news-->
<!-- ------------------------------------------------------------------ -->
                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                          <div id="euphoria" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Euphoria</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://seasonpub.com/wp-content/uploads/2019/04/euphoria-400x650.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>TV Network:</tag>HBO</dd>
                                      <dd><tag>Genre:</tag>	Drama</dd>
                                      <dd><tag>Executive Producers:</tag>Sam Levinson, Drake, Ravi Nandan, Kevin Turen, Ron Leshem, Daphna Levin, Gary Lennon, Jim Kleverweis</dd>
                                      <dd><tag>Written By:</tag>Steven Zaillian</dd>
                                      <dd><tag>In Theaters:</tag>-</dd>
                                      <dd><tag>Premiere Date:</tag>-</dd>
                                      <dd><tag>Box Office:</tag>-</dd>
                                      <dd><tag>Runtime:</tag>1 season</li>
                                      <dd><tag>Studio:</tag>hbo</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                        Following a group of high school students as they navigate love and friendships in a world of drugs, sex, trauma and social media.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1178445" style="display: block;"><iframe src="https://voidboost.net/embed/1178445" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1178445" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">

                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#" data-toggle="modal" data-target="#euphoria">
                                            <img class="img-fluid" style="width:270px;height:230px "
                                                 src=" https://ostonline.net/uploads/posts/2019-07/1563826898_cover.jpg"
                                                 alt="simple blog template bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Drama</a>

                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Euphoria</h2>
                                            <a class="text-white font-weight-bold" href="../category/author.html">
                                                <span class="">2018</span>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                          <div id="uncut" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Uncut Gems</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://st.kp.yandex.net/images/film_iphone/iphone360_1076152.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R (for pervasive strong language, violence, some sexual content and brief drug use)</dd>
                                      <dd><tag>Genre:</tag>	Drama</dd>
                                      <dd><tag>Directed By:</tag>Josh Safdie, Benny Safdie</dd>
                                      <dd><tag>Written By:</tag>Benny Safdie, Josh Safdie, Ronald Bronstein</dd>
                                      <dd><tag>In Theaters:</tag>Dec 25, 2019  Wide</dd>
                                      <dd><tag>On Disc/Streaming:</tag>Feb 25, 2020</dd>
                                      <dd><tag>Box Office:</tag>-</dd>
                                      <dd><tag>Runtime:</tag>135 minutes</li>
                                      <dd><tag>Studio:</tag>A24</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                        From acclaimed filmmakers Josh and Benny Safdie comes an electrifying crime thriller about Howard Ratner (Adam Sandler), a charismatic New York City jeweler always on the lookout for the next big score. When he makes a series of high-stakes bets that could lead to the windfall of a lifetime, Howard must perform a precarious high-wire act, balancing business, family, and encroaching adversaries on all sides, in his relentless pursuit of the ultimate win.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1076152" style="display: block;"><iframe src="https://voidboost.net/embed/1076152" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1076152" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#" data-toggle="modal" data-target="#uncut">
                                          <img class="img-fluid" style="width:270px;height:230px "
                                               src=" https://images-na.ssl-images-amazon.com/images/I/71HStH8X%2BiL._AC_SX425_.jpg"
                                                 alt="bootstrap templates for blog">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://miro.medium.com/max/2880/1*hhmKylD6EVyiFj8Rsoyu7g.jpeg">Criminal</a>
                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Uncut gems</h2>
                                            <a class="text-white font-weight-bold" href="../category/author.html">
                                                <span class="">2019</span>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                          <div id="twilight" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Twilight: Breaking down</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://i.pinimg.com/originals/b4/c6/ae/b4c6ae7cc83ca1a17b9d4b18eaba05c4.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>PG-13 (for sequences of violence including disturbing images, some sensuality and partial nudity)</dd>
                                      <dd><tag>Genre:</tag>Action & Adventure, Drama, Science Fiction & Fantasy, Romance</dd>
                                      <dd><tag>Directed By:</tag>Bill Condon</dd>
                                      <dd><tag>Written By:</tag>Bill Condon, Melissa Rosenberg, Stephenie Meyer</dd>
                                      <dd><tag>In Theaters:</tag>Nov 15, 2012  Wide</dd>
                                      <dd><tag>On Disc/Streaming:</tag>Mar 2, 2013</dd>
                                      <dd><tag>Box Office:</tag>$292,298,923</dd>
                                      <dd><tag>Runtime:</tag>	115 minutes</li>
                                      <dd><tag>Studio:</tag>Lionsgate/Summit Entertainment</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                      The astonishing conclusion to the series, The Twilight Saga: Breaking Dawn, Part 2, illuminates the secrets and mysteries of this spellbinding romantic epic that has entranced millions. -- (C) Official Site
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/462305" style="display: block;"><iframe src="https://voidboost.net/embed/462305" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/462305" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#" data-toggle="modal" data-target="#twilight">
                                          <img class="img-fluid" style="width:270px;height:230px "
                                               src=" https://mobimg.b-cdn.net/pic/v2/gallery/preview/kino-umerki_twilight-43297.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Melodrama</a>
                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Twilight: Breaking down</h2>
                                            <a class="text-white font-weight-bold" href="../category/author.html">
                                                <span class="">2012</span>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                          <div id="himym" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                    <div class="modal-header">
                                      <h4 class="modal-title">How i met your mother?</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                      <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://www.film.ru/sites/default/files/movies/posters/1631512-902739.jpg" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                      <div style="margin-left:50px;">
                                      <dl style="margin-left:50px">
                                      <dd><tag>Rating:</tag>R</dd>
                                      <dd><tag>Genre:</tag>	Comedy</dd>
                                      <dd><tag>Directed By:</tag>Carter Bays, Craig Thomas</dd>
                                      <dd><tag>Written By:</tag>Josh Radnor, Jason Segel, Alyson Hannigan</dd>
                                      <dd><tag>Premiere Date:</tag>Sep 19, 2005</dd>
                                      <dd><tag>On Disc/Streaming:</tag>	-</dd>
                                      <dd><tag>Box Office:</tag>-</dd>
                                      <dd><tag>Runtime:</tag>9 seasons</li>
                                      <dd><tag>Studio:</tag>CBS</dd>
                                      </dl>
                                      </div>
                                      <div class="bg-light p-3 mt-5">
                                      <p>
                                        A man named Ted tells his kids how he met the love of his life, through flashbacks, years in the future. The bored kids sit on the couch and listen as dad regales them with tales of his pursuit of romance. The sitcom's secondary character, Ted's smarmy friend, Barney, is a real standout, often stealing the show.
                                      </p>
                                    </div>
                                    <div style="margin-left:150px; margin-top:20px">
                                      <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/401522" style="display: block;"><iframe src="https://voidboost.net/embed/401522" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/401522" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#" data-toggle="modal" data-target="#himym">
                                          <img class="img-fluid" style="width:270px;height:230px "
                                               src=" https://img3.goodfon.ru/original/1280x1024/e/67/kak-ya-vstretil-vashu-mamu-4380.jpg"
                                                 alt="blog website templates bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Comedy</a>
                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">How i met your mother?</h2>
                                            <a class="text-white font-weight-bold" href="../category/author.html">
                                                <span class="">2004-2015</span>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!--=========================
    Carousel
==========================-->
<hr style="width:82%">
@include('layouts.carousel')
<hr style="width:77.5%">

<div class="container border border-white" style="width:80%">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<h3 class="text-muted text-center latest-text">COUNTDOWN</h3>



<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="album ml-5">
    <div class="container">
      <div class="row">
<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 480px; width: 303px; display: block;" src="https://upload.wikimedia.org/wikipedia/ru/8/81/A_Quiet_Place_-_Part_II_%28poster%29.jpg" data-holder-rendered="true">
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        </div>
        <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
              <a class="p-1 badge badge-primary rounded-0" href="#">Horror</a>
              <h2 class="h5 text-white my-1">Quiet place 2</h2>
                <a class="text-white font-weight-bold">
                  <span class="">2020</span>
                  <h3 class="h3 text-danger my-1" id="time"></h3>
                </a>
          </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://st.kp.yandex.net/images/film_iphone/iphone360_1045056.jpg" data-holder-rendered="true" style="height: 480px; width: 303px; display: block;">
    <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
          <a class="p-1 badge badge-primary rounded-0" href="#">Adventure</a>
          <h2 class="h5 text-white my-1">The King's Man 2: The Beginning</a></h2>
            <a class="text-white font-weight-bold">
              <span class="">2020</span>
              <h3 class="h3 text-danger my-1" id="time2"></h3>
            </a>
      </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://images-na.ssl-images-amazon.com/images/I/91VMURZ9jSL.jpg" data-holder-rendered="true" style="height: 480px; width: 303px; display: block;">
    <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
          <a class="p-1 badge badge-primary rounded-0" href="#">Cartoon</a>
          <h2 class="h5 text-white my-1">The Spongebob movie: Sponge on the run</a></h2>
            <a class="text-white font-weight-bold">
              <span class="">2020</span>
              <h3 class="h3 text-danger my-1" id="time3"></h3>
            </a>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@include('layouts.tabs')
<br />
@endsection
