@extends('layouts.main')
@section('code')
@section('title','KÓRERMEN-movies and tvs online')
<!--login || registration -->
@include('layouts.log')
<!--                      -->

                  <!-- ================================================
                          First
                  =====================================================-->
                  <link rel="stylesheet"
                            href=
                  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
                  <style>
                  .btn {
                    background-color: #008CBA; /* blue */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    position: center;

                  }

                  </style>
                    <h3 class="text-muted text-center latest-text"> </h3>
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="album ml-5">
                                        <div class="container">
                                        <h4>Don't know what to watch?</h4>
                                        <h1>Random Movie Generator</h1>
                                        <script>
                 var a=Math.round(Math.random()*28)
                 // это число должно совпадать с максимальным индексом таблицы ссылок

                 words = new Array();
                 words[1] = "https://www.youtube.com/watch?v=kVrqfYjkTdQ"
                 words[2] = "https://www.youtube.com/watch?v=Q_2AbjYeSMI"
                 words[3] = "https://www.youtube.com/watch?v=vOUVVDWdXbo"
                 words[4] = "https://www.youtube.com/watch?v=D9YZw_X5UzQ"
                 words[5] = "https://www.youtube.com/watch?v=kVrqfYjkTdQ"
                 words[6] = "https://www.youtube.com/watch?v=34WIbmXkewU"
                 words[7] = "https://www.youtube.com/watch?v=Ify9S7hj480"
                 words[8] = "https://www.youtube.com/watch?v=jKCj3XuPG8M"
                 words[9] = "https://www.youtube.com/watch?v=gn5QmllRCn4"
                 words[10] = "https://www.youtube.com/watch?v=ej3ioOneTy8"
                 words[11] = "https://www.youtube.com/watch?v=7TavVZMewpY"
                 words[12] = "https://www.youtube.com/watch?v=-UaGUdNJdRQ"
                 words[13] = "https://www.youtube.com/watch?v=rBxcF-r9Ibs"
                 words[14] = "https://www.youtube.com/watch?v=Ohq6NmKMja8"
                 words[15] = "https://www.youtube.com/watch?v=FebPJlmgldE"
                 words[16] = "https://www.youtube.com/watch?v=DNHuK1rteF4"
                 words[17] = "https://www.youtube.com/watch?v=t433PEQGErc"
                 words[18] = "https://www.youtube.com/watch?v=qtRKdVHc-cE"
                 words[19] = "https://www.youtube.com/watch?v=XGk2EfbD_Ps"
                 words[20] = "https://www.youtube.com/watch?v=C2e6Oruy_fA"
                 words[21] = "https://www.youtube.com/watch?v=8Qn_spdM5Zg"
                 words[22] = "https://www.youtube.com/watch?v=gCcx85zbxz4"
                 words[23] = "https://www.youtube.com/watch?v=BfTYY_pac8o"
                 words[24] = "https://www.youtube.com/watch?v=m8e-FF8MsqU"
                 words[25] = "https://www.youtube.com/watch?v=6ziBFh3V1aM"
                 words[26] = "https://www.youtube.com/watch?v=8eBVxuQeyLA"
                 words[27] = "https://www.youtube.com/watch?v=p_PJbmrX4uk"
                 words[28] = "https://www.youtube.com/watch?v=Aw0I3XRihUE"
                 // с максимальным индексом link[..] совпадает число, на которое умножаем вверху


                 document.write ("<center><a target='_blank' rel='noopener noreferrer' href="+words[a]+" class='btn'>Trailer</a></center>");
                 </script>
                 </div></div></div>


                 <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                 <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <div class="album ml-5">
                 <div class="container">

                        <h3>Top Dramas</h3>
                        <br/>
                        <div class="row">
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#fitstdates">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://cdn.shopify.com/s/files/1/1416/8662/products/50_First_Dates_2004_original_film_art_a.jpg?v=1562541772" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Drama</a>
                                    <h2 class="h5 text-white my-1">50 FIRST DATES</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2017</span>
                                      </a>
                                      <div id="fitstdates" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">50 FIRST DATES</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                              <img style="height: 320px; width: auto; float:left; margin-right: 35px" src="https://cdn.shopify.com/s/files/1/1416/8662/products/50_First_Dates_2004_original_film_art_a.jpg?v=1562541772" data-holder-rendered="true" style="height: 500px; width: 333px;">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>	PG-13 (for crude sexual humor and drug references)</dd>
                                              <dd><tag>Genre:</tag>	Comedy</dd>
                                              <dd><tag>Directed By:</tag>	Peter Segal</dd>
                                              <dd><tag>Written By:</tag>	George Wing</dd>
                                              <dd><tag>In Theaters:</tag>	Feb 13, 2004  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Jun 15, 2004</dd>
                                              <dd><tag>Box Office:</tag>	$120,776,832</dd>
                                              <dd><tag>Runtime:</tag>	99 minutes</li>
                                              <dd><tag>Studio:</tag>	Sony Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                                Re-teaming Adam Sandler with Drew Barrymore, his co-star from The Wedding Singer, as well as Peter Segal, his director on Anger Management, Fifty First Dates finds the funnyman playing veterinarian Henry Roth. More than content with a life of one-night-stands, Henry decides to give up his noncommittal lifestyle when he meets and falls for Lucy (Barrymore). However, when he discovers that Lucy has no short term memory, Henry finds himself having to win her heart again with every new day. Sean Astin and Rob Schneider also star. ~ Matthew Tobey, Rovi
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1794" style="display: block;"><iframe src="https://voidboost.net/embed/1794" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1794" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#titanic">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: 190px; display: block;" src="https://www.kinofilms.ua/images/photos/w680/325187.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Drama</a>
                                    <h2 class="h5 text-white my-1">TITANIC</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">1998</span>
                                      </a>
                                      <div id="titanic" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">TITANIC</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <img style="height: 300px; width: 190px; float:left; margin-right: 35px" src="https://www.kinofilms.ua/images/photos/w680/325187.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>	PG-13</dd>
                                              <dd><tag>Genre:</tag>	Action & Adventure, Classics, Drama, Television</dd>
                                              <dd><tag>Directed By:</tag>Robert H. Lieberman</dd>
                                              <dd><tag>Written By:</tag>	Ross LaManna, Joyce Eliason</dd>
                                              <dd><tag>In Theaters:</tag>	Nov 17, 1996  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Sep 7, 1999</dd>
                                              <dd><tag>Box Office:</tag>	$890,872,852</dd>
                                              <dd><tag>Runtime:</tag>	165 minutes</li>
                                              <dd><tag>Studio:</tag>	Hallmark Entertainment</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-3">
                                              <p>
                                              In 1912, the H.M.S. Titanic was the largest ocean liner built to date, and its designers had incorporated several features they believed would make the ship virtually unsinkable. However, the Titanic never returned from its maiden voyage; after striking an iceberg, the ship slowly sank to the bottom on the ocean, with most of its passengers meeting a watery grave in the freezing ocean. The 1996 made-for-television movie Titanic tells the story of how this disaster came to befall the great ship, and what happened to the passengers on board -- both the wealthy socialites in first class and the poor immigrants in steerage. The cast includes George C. Scott as Capt. Smith, Peter Gallagher as Wynn Park, Eva Marie Saint as Hazel Foley, Tim Curry as Simon Doonan, Marilu Henner as Molly Brown, and Catherine Zeta-Jones (before she became a major star in The Mask Of Zorro and Entrapment) as Isabella Paradine.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/2213" style="display: block;"><iframe src="https://voidboost.net/embed/2213" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/2213" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140; cursor:pointer" data-toggle="modal" data-target="#notebook">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px;width: auto; display: block;" src="https://upload.wikimedia.org/wikipedia/en/8/86/Posternotebook.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Drama</a>
                                    <h2 class="h5 text-white my-1">The Notebook</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2004</span>
                                      </a>
                                      <div id="notebook" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">THE NOTEBOOK</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <img style="height: 310px;width: auto;float:left; margin-right: 35px" src="https://upload.wikimedia.org/wikipedia/en/8/86/Posternotebook.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>	PG-13(for some sexuality)</dd>
                                              <dd><tag>Genre:</tag>Drama, Romance</dd>
                                              <dd><tag>Directed By:</tag>Nick Cassavetes</dd>
                                              <dd><tag>Written By:</tag>	Jeremy Leven, Jan Sardi, Nick Cassavetes</dd>
                                              <dd><tag>In Theaters:</tag>	Jun 25, 2004  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Feb 8, 2005</dd>
                                              <dd><tag>Box Office:</tag>	$81,000,000</dd>
                                              <dd><tag>Runtime:</tag>	124 minutes</li>
                                              <dd><tag>Studio:</tag>	New Line Cinema</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                              Directed by Nick Cassavetes, this adaptation of author Nicholas Sparks' bestselling novel revolves around Noah Calhoun's (James Garner) regular visits to a female patron (Gena Rowlands) of an area nursing home. Rather than bore her with the inanities of everyday life, Calhoun reads from an old, faded notebook containing the sweeping account of a young couple (Ryan Gosling and Rachel McAdams) whose love affair was tragically put to a halt after their separation in the midst of World War II. Seven years later, the couple was reunited, and, despite having taken radically different paths, they found themselves unable to resist the call of a second chance. The Notebook also features Joan Allen, Sam Shepard, and Kevin Connolly. ~ Tracie Cooper, Rovi
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                <div class="inner">
                                                  <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/3561" style="display: block;"><iframe src="https://voidboost.net/embed/3561" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/3561" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                </div>
                                        </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#untochibles">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://thumbs.dfs.ivi.ru/storage2/contents/6/1/0ceca03c51c3d38f34bdf3fd0dd2c8.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Drama</a>
                                    <h2 class="h5 text-white my-1">The 1+1</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2011</span>
                                      </a>
                                      <div id="untochibles" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">The 1+1</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <img style="height: 300px; width: auto;float:left; margin-right: 35px" src="https://thumbs.dfs.ivi.ru/storage2/contents/6/1/0ceca03c51c3d38f34bdf3fd0dd2c8.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>	R (for language and some drug use)</dd>
                                              <dd><tag>Genre:</tag>Art House & International, Comedy, Drama, Special Interest</dd>
                                              <dd><tag>Directed By:</tag>Olivier Nakache, Eric Toledano</dd>
                                              <dd><tag>Written By:</tag>Olivier Nakache, Eric Toledano</dd>
                                              <dd><tag>In Theaters:</tag>	May 25, 2012  Limited</dd>
                                              <dd><tag>On Disc/Streaming:</tag>		Mar 5, 2013</dd>
                                              <dd><tag>Box Office:</tag>$13,179,837</dd>
                                              <dd><tag>Runtime:</tag>112 minutes</li>
                                              <dd><tag>Studio:</tag>The Weinstein Company</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-4">
                                              <p>
                                            An irreverent, uplifting comedy about friendship, trust and human possibility, The Intouchables has broken box office records in its native France and across Europe. Based on a true story of friendship between a handicap millionaire (Francois Cluzet) and his street smart ex-con caretaker (Omar Sy), The Intouchables depicts an unlikely camaraderie rooted in honesty and humor between two individuals who, on the surface, would seem to have nothing in common. -- (C) Weinstein
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                <div class="inner">
                                                  <div class="inner">
                                                              <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/535341" style="display: block;"><iframe src="https://voidboost.net/embed/535341" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/535341" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                            </div>
                                        </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                        </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#withloverosie">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px;width: auto; display: block;" src="https://is4-ssl.mzstatic.com/image/thumb/Video1/v4/e4/63/fe/e463fe15-b9c7-258b-825e-ab80f5da7e5c/ticket.kprranyz.jpg/268x0w.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Drama</a>
                                    <h2 class="h5 text-white my-1">With Love Rosie</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2014</span>
                                      </a>
                                      <div id="withloverosie" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">With love Rosie</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <img style="height: 310px;width: auto;float:left; margin-right: 35px" src="https://is4-ssl.mzstatic.com/image/thumb/Video1/v4/e4/63/fe/e463fe15-b9c7-258b-825e-ab80f5da7e5c/ticket.kprranyz.jpg/268x0w.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>R (for language and some sexual content)</dd>
                                              <dd><tag>Genre:</tag>Comedy, Romance</dd>
                                              <dd><tag>Directed By:</tag>Christian Ditter</dd>
                                              <dd><tag>Written By:</tag>Juliette Towhidi, Cecelia Ahern</dd>
                                              <dd><tag>In Theaters:</tag>	Feb 6, 2015  Limited</dd>
                                              <dd><tag>On Disc/Streaming:</tag>May 5, 2015</dd>
                                              <dd><tag>Box Office:</tag>$33,179,837</dd>
                                              <dd><tag>Runtime:</tag>102 minutes</li>
                                              <dd><tag>Studio:</tag>Film Arcade</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-4">
                                              <p>
                                            Since the moment they met at age 5, Rosie (Lily Collins) and Alex (Sam Claflin) have been best friends, facing the highs and lows of growing up side by side. A fleeting shared moment, one missed opportunity, and the decisions that follow send their lives in completely different directions. As each navigates the complexities of life, love, and everything in between, they always find their way back to each other - but is it just friendship, or something more? Based on Cecelia Ahern's bestselling novel, LOVE, ROSIE is a heart-warming, modern comedy-of-errors posing the ultimate question: do we really only get one shot at true love?(C) Film Arcade
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/512784" style="display: block;"><iframe src="https://voidboost.net/embed/512784" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/512784" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                          </div>
                                                        </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <h3>Top for Kids & Family</h3>
                          <br/>

                          <div class="row">
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#onward">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://www.film.ru/sites/default/files/movies/posters/46023629-1144583.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#"> Kids & Family</a>
                                    <h2 class="h5 text-white my-1">Onward</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2020</span>
                                      </a>
                                      <div id="onward" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Onward</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <img style="height: 310px; width: auto;float:left; margin-right: 35px" src="https://www.film.ru/sites/default/files/movies/posters/46023629-1144583.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG (for action/peril and some mild thematic elements)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Animation, Kids & Family, Science Fiction & Fantasy</dd>
                                              <dd><tag>Directed By:</tag>Dan Scanlon</dd>
                                              <dd><tag>Written By:</tag>Keith Bunin, Jason Headley, Dan Scanlon, H.G. Wells, Leigh Whannell</dd>
                                              <dd><tag>In Theaters:</tag>Mar 6, 2020  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>Mar 20, 2020</dd>
                                              <dd><tag>Box Office:</tag>$83,179,837</dd>
                                              <dd><tag>Runtime:</tag>114 minutes</li>
                                              <dd><tag>Studio:</tag>Disney/Pixar</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                          In "Onward," teenage elf brothers Ian and Barley Lightfoot (voices of Tom Holland and Chris Pratt) get an unexpected opportunity to spend one more day with their late dad, embarking on an extraordinary quest aboard Barley's epic van Guinevere. Like any good quest, their journey is filled with magic spells, cryptic maps, impossible obstacles and unimaginable discoveries. But when the boys' fearless mom Laurel (voice of Julia Louis-Dreyfus) realizes her sons are missing, she teams up with a part-lion, part-bat, part-scorpion, former warrior -- aka The Manticore (voice of Octavia Spencer) -- and heads off to find them. Perilous curses aside, this one magical day could mean more than any of them ever dreamed.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                              <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1080513" style="display: block;"><iframe src="https://voidboost.net/embed/1080513" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>
                                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#klaus">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://upload.wikimedia.org/wikipedia/ru/b/b9/Klaus_cartoon.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#"> Kids & Family</a>
                                    <h2 class="h5 text-white my-1">Klaus</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2020</span>
                                      </a>
                                      <div id="klaus" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Klaus</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                          <img style="height: 310px; width: auto; display: block; float:left; margin-right: 35px" src="https://upload.wikimedia.org/wikipedia/ru/b/b9/Klaus_cartoon.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG (for rude humor and mild action)</dd>
                                              <dd><tag>Genre:</tag>Animation, Comedy, Kids & Family, Science Fiction & Fantasy</dd>
                                              <dd><tag>Directed By:</tag>	Sergio Pablos</dd>
                                              <dd><tag>Written By:</tag>	Jim Mahoney, Zach Lewis</dd>
                                              <dd><tag>In Theaters:</tag>Nov 8, 2019  Limited</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Nov 15, 2019</dd>
                                              <dd><tag>Box Office:</tag>-</dd>
                                              <dd><tag>Runtime:</tag>	98 minutes</li>
                                              <dd><tag>Studio:</tag>Netflix</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                                When Jesper (Jason Schwartzman) distinguishes himself as the postal academy's worst student, he is stationed on a frozen island above the Arctic Circle, where the feuding locals hardly exchange words let alone letters. Jesper is about to give up when he finds an ally in local teacher Alva (Rashida Jones), and discovers Klaus (Oscar winner J.K. Simmons), a mysterious carpenter who lives alone in a cabin full of handmade toys. These unlikely friendships return laughter to Smeerensburg, forging a new legacy of generous neighbors, magical lore and stockings hung by the chimney with care.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div id="onward" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                                    <div class="modal-header">
                                                      <h4 class="text-center">Onward</h4>
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <img style="height: 310px; width: auto;float:left; margin-right: 35px" src="https://www.film.ru/sites/default/files/movies/posters/46023629-1144583.jpg">
                                                      <div style="margin-left:50px;">
                                                      <dl style="margin-left:50px">
                                                      <dd><tag>Rating:</tag>PG (for action/peril and some mild thematic elements)</dd>
                                                      <dd><tag>Genre:</tag>Action & Adventure, Animation, Kids & Family, Science Fiction & Fantasy</dd>
                                                      <dd><tag>Directed By:</tag>Dan Scanlon</dd>
                                                      <dd><tag>Written By:</tag>Keith Bunin, Jason Headley, Dan Scanlon, H.G. Wells, Leigh Whannell</dd>
                                                      <dd><tag>In Theaters:</tag>Mar 6, 2020  Wide</dd>
                                                      <dd><tag>On Disc/Streaming:</tag>Mar 20, 2020</dd>
                                                      <dd><tag>Box Office:</tag>$83,179,837</dd>
                                                      <dd><tag>Runtime:</tag>114 minutes</li>
                                                      <dd><tag>Studio:</tag>Disney/Pixar</dd>
                                                      </dl>
                                                      </div>
                                                      <div class="bg-light p-3 mt-5">
                                                      <p>
                                                  In "Onward," teenage elf brothers Ian and Barley Lightfoot (voices of Tom Holland and Chris Pratt) get an unexpected opportunity to spend one more day with their late dad, embarking on an extraordinary quest aboard Barley's epic van Guinevere. Like any good quest, their journey is filled with magic spells, cryptic maps, impossible obstacles and unimaginable discoveries. But when the boys' fearless mom Laurel (voice of Julia Louis-Dreyfus) realizes her sons are missing, she teams up with a part-lion, part-bat, part-scorpion, former warrior -- aka The Manticore (voice of Octavia Spencer) -- and heads off to find them. Perilous curses aside, this one magical day could mean more than any of them ever dreamed.
                                                      </p>
                                                    </div>
                                                    <div style="margin-left:150px; margin-top:20px">
                                                      <div class="inner">
                                                                      <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1080513" style="display: block;"><iframe src="https://voidboost.net/embed/1080513" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>
                                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#lionking">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://images-na.ssl-images-amazon.com/images/I/911l59CUDfL._AC_SY741_.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#"> Kids & Family</a>
                                    <h2 class="h5 text-white my-1">The Lion King</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2019</span>
                                      </a>
                                      <div id="lionking" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Lion King</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <img  style="height: 310px; width: auto; float:left; margin-right: 35px" src="https://images-na.ssl-images-amazon.com/images/I/911l59CUDfL._AC_SY741_.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>G</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Animation, Drama, Kids & Family, Musical & Performing Arts</dd>
                                              <dd><tag>Directed By:</tag>Roger Allers, Rob Minkoff</dd>
                                              <dd><tag>Written By:</tag>Linda Woolverton, Jonathan Roberts, Irene Mecchi</dd>
                                              <dd><tag>In Theaters:</tag>	Jun 15, 1994  Limited</dd>
                                              <dd><tag>On Disc/Streaming:</tag>Oct 7, 2003</dd>
                                              <dd><tag>Box Office:</tag>	$94,240,635</dd>
                                              <dd><tag>Runtime:</tag>87 minutes</li>
                                              <dd><tag>Studio:</tag>Buena Vista</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                              One of the most popular Disney animated musicals, The Lion King presents the story of a lion cub's journey to adulthood and acceptance of his royal destiny. Simba (voiced first by Jonathan Taylor Thomas, then by Matthew Broderick) begins life as an honored prince, the son of the powerful King Mufasa (voiced by James Earl Jones). The cub's happy childhood turns tragic when his evil uncle, Scar (voiced by Jeremy Irons), murders Mufasa and drives Simba away from the kingdom. In exile, the young lion befriends the comically bumbling pair of Pumbaa the warthog (voiced by Ernie Sabella) and Timon the meerkat (voiced by Nathan Lane), he and lives a carefree jungle life. As he approaches adulthood, however, he is visited by the spirit of his father, who instructs him to defeat the nefarious Scar and reclaim his rightful throne. Borrowing elements from Hamlet, classical mythology, and African folk tales, The Lion King tells its mythic coming-of-age tale with a combination of spectacular visuals and lively music, featuring light, rhythmic songs by Elton John and Tim Rice, and a score by Hans Zimmer. Embraced by children and adults alike, the film also spawned hit songs ("Can You Feel the Love Tonight," "The Circle of Life") and a hit Broadway musical. In late 2002, The Lion King was re-released in the large-screen IMAX format. ~ Judd Blaise, Rovi
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                <div class="inner">
                                                  <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/2360" style="display: block;"><iframe src="https://voidboost.net/embed/2360" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/2360" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                  </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#incredibles">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px; width: auto; display: block;" src="https://i.pinimg.com/originals/c1/16/bb/c116bba79d552ff20295af7258074f04.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#"> Kids & Family</a>
                                    <h2 class="h5 text-white my-1">The Incredibles</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2004</span>
                                      </a>
                                      <div id="incredibles" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">The incredibles</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <img style="height: 310px; width: auto;float:left; margin-right: 35px" src="https://i.pinimg.com/originals/c1/16/bb/c116bba79d552ff20295af7258074f04.jpg">
                                              <div style="margin-left:50px;">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG (for action violence)</dd>
                                              <dd><tag>Genre:</tag>Animation, Comedy, Kids & Family</dd>
                                              <dd><tag>Directed By:</tag>Brad Bird</dd>
                                              <dd><tag>Written By:</tag>Brad Bird</dd>
                                              <dd><tag>In Theaters:</tag>Nov 5, 2004  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Mar 15, 2005</dd>
                                              <dd><tag>Box Office:</tag>-</dd>
                                              <dd><tag>Runtime:</tag>115 minutes</li>
                                              <dd><tag>Studio:</tag>	Buena Vista Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-5">
                                              <p>
                                              Once one of the world's top masked crime fighters, Bob Parr--known to all as "Mr. Incredible"--fought evil and saved lives on a daily basis. But now fifteen years later, Bob and his wife--a famous superhero in her own right--have adopted civilian identities and retreated to the suburbs to live normal lives with their three kids. Now he's a clock-punching insurance claims adjuster fighting boredom and a bulging waistline. Itching to get back into action, Bob gets his chance when a mysterious communication summons him to a remote island for a top-secret assignment.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/38903" style="display: block;"><iframe src="https://voidboost.net/embed/38903" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/38903" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                        </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style="height:400; width:140;cursor:pointer" data-toggle="modal" data-target="#iceage">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 270px;  width: auto; display: block;" src="https://images-na.ssl-images-amazon.com/images/I/51Iz%2B3-HIVL._AC_.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#"> Kids & Family</a>
                                    <h2 class="h5 text-white my-1">ICE AGE COLLISION COURSE</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2016</span>
                                      </a>
                                      <div id="iceage" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">ICE AGE</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <img style="height: 310px;  width: auto; float:left; margin-right: 35px" src="https://images-na.ssl-images-amazon.com/images/I/51Iz%2B3-HIVL._AC_.jpg">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG (for mild peril)</dd>
                                              <dd><tag>Genre:</tag>Animation, Comedy, Kids & Family</dd>
                                              <dd><tag>Directed By:</tag>Chris Wedge, Carlos Saldanha</dd>
                                              <dd><tag>Written By:</tag>Michael Berg, Michael J. Wilson, Peter Ackerman</dd>
                                              <dd><tag>In Theaters:</tag>Mar 15, 2002  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Nov 26, 2002</dd>
                                              <dd><tag>Box Office:</tag>$176,400,000</dd>
                                              <dd><tag>Runtime:</tag>80 minutes</li>
                                              <dd><tag>Studio:</tag>20th Century Fox</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-3">
                                              <p>
                                                Set against the onslaught of the ice age -- and a world filled with wonder and danger -- the story revolves around three unforgettable characters: a wooly mammoth, a saber-toothed tiger, and a sloth, who unite to return a human baby to his tribe.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/707" style="display: block;"><iframe src="https://voidboost.net/embed/707" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/707" style="display: none;"><div id="overroll"><iframe src="https://api1571795485.delivembed.cc/embed/kp/707" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                          </div>

                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                          </div>


                          <h3>Top Actions</h3>
                          <br/>
                          <div class="row">
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#gentleman">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: auto; display: block;" src="https://movienews.film/wp-content/uploads/2020/02/The-Gentlemen.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Action</a>
                                    <h2 class="h5 text-white my-1">The Gentlemen</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2020</span>
                                      </a>
                                      <div id="gentleman" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">The Gentleman</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <img style="height: 310px; width: auto;float:left; margin-right: 35px" src="https://movienews.film/wp-content/uploads/2020/02/The-Gentlemen.jpg">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>R (for violence, language throughout, sexual references and drug content)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Comedy</dd>
                                              <dd><tag>Directed By:</tag>Guy Ritchie</dd>
                                              <dd><tag>Written By:</tag>Guy Ritchie</dd>
                                              <dd><tag>In Theaters:</tag>Jan 24, 2020  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Mar 24, 2020</dd>
                                              <dd><tag>Box Office:</tag>$256,400,000</dd>
                                              <dd><tag>Runtime:</tag>103 minutes</li>
                                              <dd><tag>Studio:</tag>STXfilms</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-4">
                                              <p>
                                                THE GENTLEMEN follows American expat Mickey Pearson (Matthew McConaughey) who built a highly profitable marijuana empire in London. When word gets out that he's looking to cash out of the business forever it triggers plots, schemes, bribery and blackmail in an attempt to steal his domain out from under him.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                              <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1143242" style="display: block;"><iframe src="https://voidboost.net/embed/1143242" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1143242" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#jumanji">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px;width: auto; display: block;" src="https://specials-images.forbesimg.com/imageserve/5deeed7d25ab5d000700adf2/0x800.jpg?cropX1=0&cropX2=566&cropY1=0&cropY2=755" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Action</a>
                                    <h2 class="h5 text-white my-1">Jumanji</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2019</span>
                                      </a>
                                      <div id="jumanji" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Jumanji</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <img style="height:310px;width: auto; float:left; margin-right: 35px" src="https://specials-images.forbesimg.com/imageserve/5deeed7d25ab5d000700adf2/0x800.jpg?cropX1=0&cropX2=566&cropY1=0&cropY2=755">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG-13 (for adventure action, suggestive content and some language)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Drama, Kids & Family, Science Fiction & Fantasy</dd>
                                              <dd><tag>Directed By:</tag>Jake Kasdan</dd>
                                              <dd><tag>Written By:</tag>Erik Sommers, Scott Rosenberg, Jeff Pinkner</dd>
                                              <dd><tag>In Theaters:</tag>Dec 20, 2017  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Mar 20, 2018</dd>
                                              <dd><tag>Box Office:</tag>$393,201,353</dd>
                                              <dd><tag>Runtime:</tag>112 minutes</li>
                                              <dd><tag>Studio:</tag>Columbia Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-2">
                                              <p>
                                                When four high-school kids discover an old video game console with a game they've never heard of--Jumanji--they are immediately drawn into the game's jungle setting, literally becoming the avatars they chose: gamer Spencer becomes a brawny adventurer (Dwayne Johnson); football jock Fridge loses (in his words) "the top two feet of his body" and becomes an Einstein (Kevin Hart); popular girl Bethany becomes a middle-aged male professor (Jack Black); and wallflower Martha becomes a badass warrior (Karen Gillan). What they discover is that you don't just play Jumanji--you must survive it. To beat the game and return to the real world, they'll have to go on the most dangerous adventure of their lives, discover what Alan Parrish left 20 years ago, and change the way they think about themselves--or they'll be stuck in the game forever...
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/695609" style="display: block;"><iframe src="https://voidboost.net/embed/695609" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/695609" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#bloodshot">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: auto; display: block;" src="https://upload.wikimedia.org/wikipedia/ru/archive/9/9d/20200313145530%21Bloodshot_poster.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Action</a>
                                    <h2 class="h5 text-white my-1">Bloodshot</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2020</span>
                                      </a>
                                      <div id="bloodshot" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Bloodshot</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                  <img style="height: 310px; width: auto; float:left; margin-right: 35px" src="https://upload.wikimedia.org/wikipedia/ru/archive/9/9d/20200313145530%21Bloodshot_poster.jpg">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG-13 (for intense sequences of violence, some suggestive material and language)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Science Fiction & Fantasy</dd>
                                              <dd><tag>Directed By:</tag>David S. F. Wilson</dd>
                                              <dd><tag>Written By:</tag>Jeff Wadlow, Eric Heisserer, Bob Layton</dd>
                                              <dd><tag>In Theaters:</tag>Mar 13, 2020  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>	Mar 24, 2020</dd>
                                              <dd><tag>Box Office:</tag>-</dd>
                                              <dd><tag>Runtime:</tag>102 minutes</li>
                                              <dd><tag>Studio:</tag>Columbia Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-2">
                                              <p>
                                                Based on the bestselling comic book, Vin Diesel stars as Ray Garrison, a soldier recently killed in action and brought back to life as the superhero Bloodshot by the RST corporation. With an army of nanotechnology in his veins, he's an unstoppable force -- stronger than ever and able to heal instantly. But in controlling his body, the company has sway over his mind and memories, too. Now, Ray doesn't know what's real and what's not -- but he's on a mission to find out.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                              <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/512673" style="display: block;"><iframe src="https://voidboost.net/embed/512673" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/512673" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                          </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#hobbsshow">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px;width: auto; display: block;" src="https://kinogo.by/uploads/cache/1/0/0/1/9/8/7/8/8/1582804285_4zwx_snyki0-200x300.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Action</a>
                                    <h2 class="h5 text-white my-1">Hobbs&Shaw</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2019</span>
                                      </a>
                                      <div id="hobbsshow" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Hobbs and Show</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                  <img style="height: 310px;width: auto; float:left; margin-right: 35px" src="https://kinogo.by/uploads/cache/1/0/0/1/9/8/7/8/8/1582804285_4zwx_snyki0-200x300.jpg">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>PG-13 (for prolonged sequences of action and violence, suggestive material and some strong language)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Mystery & Suspense</dd>
                                              <dd><tag>Directed By:</tag>David Leitch</dd>
                                              <dd><tag>Written By:</tag>Chris Morgan</dd>
                                              <dd><tag>In Theaters:</tag>Aug 2, 2019  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>Oct 15, 2019</dd>
                                              <dd><tag>Box Office:</tag>-</dd>
                                              <dd><tag>Runtime:</tag>122 minutes</li>
                                              <dd><tag>Studio:</tag>Universal Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-1">
                                              <p>
                                                Ever since hulking lawman Hobbs (Dwayne Johnson), a loyal agent of America's Diplomatic Security Service, and lawless outcast Shaw (Jason Statham), a former British military elite operative, first faced off in 2015's Furious 7, the duo have swapped smack talk and body blows as they've tried to take each other down. But when cyber-genetically enhanced anarchist Brixton (Idris Elba) gains control of an insidious bio-threat that could alter humanity forever--and bests a brilliant and fearless rogue MI6 agent (The Crown's Vanessa Kirby), who just happens to be Shaw's sister--these two sworn enemies will have to partner up to bring down the only guy who might be badder than themselves.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                              <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/1044450" style="display: block;"><iframe src="https://voidboost.net/embed/1044450" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/1044450" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                          </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mx-1" style=" height:auto; width:140;cursor:pointer" data-toggle="modal" data-target="#badboys">
                            <div class="card mb-4 box-shadow">
                              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: auto; display: block;" src="https://images-na.ssl-images-amazon.com/images/I/81zZNJrmgTL._AC_SY741_.jpg" data-holder-rendered="true" style="height: 500px; width: 333px; display: block;">
                              <div class="position-absolute p-2 p-lg-3 b-0 bg-shadow" style="width:100%">
                                    <a class="p-1 badge badge-primary rounded-0" href="#">Action</a>
                                    <h2 class="h5 text-white my-1">Bad Boys For Life</h2>
                                      <a class="text-white font-weight-bold">
                                        <span class="">2020</span>
                                      </a>
                                      <div id="badboys" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content" style="width:1000px; margin-left:-48%; height:auto">
                                            <div class="modal-header">
                                              <h4 class="text-center">Bad Boys for life</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                  <img style="height: 310px; width: auto; float:left; margin-right: 35px;" src="https://images-na.ssl-images-amazon.com/images/I/81zZNJrmgTL._AC_SY741_.jpg">
                                              <dl style="margin-left:50px">
                                              <dd><tag>Rating:</tag>R (for strong bloody violence, language throughout, sexual references and brief drug use)</dd>
                                              <dd><tag>Genre:</tag>Action & Adventure, Comedy</dd>
                                              <dd><tag>Directed By:</tag>Adil El Arbi, Bilall Fallah</dd>
                                              <dd><tag>Written By:</tag>Chris Bremner, Peter Craig, Joe Carnahan</dd>
                                              <dd><tag>In Theaters:</tag>Jan 17, 2020  Wide</dd>
                                              <dd><tag>On Disc/Streaming:</tag>Mar 31, 2020</dd>
                                              <dd><tag>Box Office:</tag>-</dd>
                                              <dd><tag>Runtime:</tag>123 minutes</li>
                                              <dd><tag>Studio:</tag>Columbia Pictures</dd>
                                              </dl>
                                              </div>
                                              <div class="bg-light p-3 mt-1">
                                              <p>
                                                The Bad Boys Mike Lowrey (Will Smith) and Marcus Burnett (Martin Lawrence) are back together for one last ride in the highly anticipated Bad Boys for Life.
                                              </p>
                                            </div>
                                            <div style="margin-left:150px; margin-top:20px">
                                              <div class="inner">
                                                            <div id="player-holder-1" class="player-holder" data-sign="vb" data-url="https://voidboost.net/embed/472386" style="display: block;"><iframe src="https://voidboost.net/embed/472386" allow="autoplay" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div>                <div id="player-holder-2" class="player-holder" data-sign="cl" data-url="https://api1571795485.delivembed.cc/embed/kp/472386" style="display: none;"><div id="overroll"><iframe allow="autoplay *; fullsreen" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe></div></div>
                                                          </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                    </div>
                  </div>
                </div>

<hr style="width:82%">
@include('layouts.carousel')
<hr style="width:77.5%">


@endsection
