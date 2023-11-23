<template>
  <!-- Breadcrumb Section Starts -->
  <section class="breadcrumb-section">
    <div class="breadcrumb-shape">
      <img
        src="assets/images/round-shape-2.png"
        alt="shape"
        class="hero-round-shape-2 item-moveTwo"
      />
      <img
        src="assets/images/plus-sign.png"
        alt="shape"
        class="hero-plus-sign item-rotate"
      />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Profile page</h2>
          <div class="breadcrumb-link margin-top-10">
            <span><a href="/">home</a> / Profile</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Instructor Details Section Starts -->
  <section class="instructor-details-section padding-top-120">
    <div class="container">
      <div class="instructor-content-top">
        <div class="row">
          <div class="col-lg-4">
            <div class="instructor-image">
              <img
                src="assets/images/instructor-details-image.jpg"
                alt="instructor"
              />
            </div>
          </div>
          <div class="col-lg-8">
            <div class="instructor-info">
              <h3>john doe</h3>
              <br />
              <H5>Personal Details <button
                      type="button"
                      class="template-button-2 pt-1 pb-1 px-1"
                      data-toggle="modal"
                      data-target="#exampleModalLong"
                    >
                      edit
                    </button>

                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="exampleModalLong"
                      tabindex="-1"
                      role="dialog"
                      aria-labelledby="exampleModalLongTitle"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                              Change Your Detail Here
                            </h5>
                            <!-- <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-label="Close"
                            >
                              <span aria-hidden="true">&times;</span>
                            </button> -->
                          </div>
                          <div class="modal-body">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id=""
                                  >Name:</span
                                >
                              </div>
                              <input type="text" class="form-control" v-model="profile.name" />
                            </div>
                            <br />

                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id=""
                                  >Phone:</span
                                >
                              </div>
                              <input type="text" class="form-control" v-model="profile.phone" />
                            </div>
                            <br />

                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id=""
                                  >CNIC:</span
                                >
                              </div>
                              <input type="text" class="form-control" v-model="profile.cnic"  />
                            </div>
                            <br />

                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id=""
                                  >Address:</span
                                >
                              </div>
                              <input type="text" class="form-control" v-model="profile.address"  />
                            </div>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id=""
                                  >Qualification:</span
                                >
                              </div>
                              <input type="text" class="form-control" v-model="profile.qualification"  />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-dismiss="modal"
                            >
                              Close
                            </button>
                            <button type="button" class="template-button-2" @click="saveProfileDetail">
                              Save changes
                            </button>
                          </div>
                        </div>
                      </div>
                    </div></H5>

              <br />
              <table>
                <tr>
                  <td>Name:</td>
                  <td>Noor</td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>(92) 123-7890</td>
                </tr>
                <tr>
                  <td>CNIC:</td>
                  <td>123-45-6789</td>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>
                    123 Main Street, Cityville
                    <!-- Button trigger modal -->

                  </td>
                </tr>
              </table>

              <span class="instructor-tag">UI & UX teacher</span>
              <div class="instructor-social-link">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
              <p class="margin-top-20">
                Blanche has always been a passionate educator and instructor for
                students who have a talent for languages and technical science.
                founded SoftTech-IT in 1988 and trained over 5000 students
                online, many of whom are now successful businessmen, educators &
                technicians.
              </p>
              <div class="instructor-education margin-top-20">
                <h5>education</h5>
                <ul>
                  <li>
                    <i class="fa fa-arrow-circle-right"></i>MBA, Milstone School
                    of Management, Milstone University.
                  </li>
                  <li>
                    <i class="fa fa-arrow-circle-right"></i>BSC, engineering,
                    Technical University of Dhaka.
                  </li>
                </ul>
              </div>
              <div class="instructor-asset margin-top-30">
                <div class="single-asset">
                  <div class="asset-image">
                    <img src="assets/images/category-icon-3.png" alt="image" />
                  </div>
                  <div class="assets-content">
                    <h4>500</h4>
                    <h6>total sdutent</h6>
                  </div>
                </div>
                <div class="single-asset">
                  <div class="asset-image">
                    <img src="assets/images/counter-image-2.png" alt="image" />
                  </div>
                  <div class="assets-content">
                    <h4>20</h4>
                    <h6>courses</h6>
                  </div>
                </div>
                <div class="single-asset">
                  <div class="asset-image">
                    <img src="assets/images/counter-image-1.png" alt="image" />
                  </div>
                  <div class="assets-content">
                    <h4>4.4</h4>
                    <h6>reviews</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <!-- <a href="#" class="template-button-2 mt-5">Terms & condition</a> -->
        <!-- Button trigger modal -->
        <button
          type="button"
          class="template-button-2 mt-5"
          data-toggle="modal"
          data-target="#exampleModal"
        >
          Launch demo modal
        </button>


      </div>
      <div class="instructor-content-bottom margin-top-60">
        <div class="row">
          <div class="col-lg-6">
            <div class="bottom-left-part">
              <div class="bottom-content-title">
                <h4>about me</h4>
              </div>
              <p>
                I am the founder of the SoftTech_IT LTD. and an Amazon Web
                Services community hero. I hold every associate certification
                and I am a certified AWS Solutions Architect Professional. I am
                ex-Rackspace, ex-Sungard. I have been working in the Cloud space
                since it's very inception. I am not just another I.T. trainer. I
                teach Cloud because I know it.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="instructor-skill-part">
              <div class="bottom-content-title">
                <h4>my skills</h4>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="single-skill-item">
                    <div class="progress-info d-flex justify-content-between">
                      <div class="progress-info-left">
                        <span>UI & UX design</span>
                      </div>
                      <div class="progress-info-right">
                        <span>80%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="single-skill-item">
                    <div class="progress-info d-flex justify-content-between">
                      <div class="progress-info-left">
                        <span>wordPress</span>
                      </div>
                      <div class="progress-info-right">
                        <span>90%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="90"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="single-skill-item">
                    <div class="progress-info d-flex justify-content-between">
                      <div class="progress-info-left">
                        <span>technology</span>
                      </div>
                      <div class="progress-info-right">
                        <span>70%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="70"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="single-skill-item">
                    <div class="progress-info d-flex justify-content-between">
                      <div class="progress-info-left">
                        <span>marketing</span>
                      </div>
                      <div class="progress-info-right">
                        <span>60%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="60"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Instructor Courses Section Starts -->
  <section class="instructor-courses padding-90">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>courses by <span>john doe</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-course-item">
            <div class="course-image">
              <img src="assets/images/course-image-1.png" alt="image" />
            </div>
            <div class="course-content margin-top-30">
              <div class="course-title">
                <h4>user experience design with adobe XD</h4>
              </div>
              <div class="course-instructor-rating margin-top-20">
                <div class="course-instructor">
                  <img
                    src="assets/images/course-instructor-1.png"
                    alt="instructor"
                  />
                  <h6>john doe</h6>
                </div>
                <div class="course-rating">
                  <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>4.2(30)</span>
                </div>
              </div>
              <div class="course-info margin-top-20">
                <div class="course-view">
                  <i class="fa fa-eye"></i>
                  <span>25,000 views</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>36 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>2h 40mins</span>
                </div>
              </div>
              <div class="course-price-cart margin-top-20">
                <div class="course-price">
                  <span class="span-big">$ 400.00</span>
                  <span class="span-cross">$ 500.00</span>
                </div>
              </div>
            </div>
            <div class="hover-state">
              <span class="heart-icon"><i class="fa fa-heart-o"></i></span>
              <span class="title-tag">by instructor</span>
              <div class="course-title margin-top-10">
                <h4><a href="#">user experience design with adobe XD</a></h4>
              </div>
              <div class="course-price-info margin-top-20">
                <span class="best-seller">best seller</span>
                <span class="course-category"><a href="#">web design</a></span>
                <span class="course-price">$ 400.00</span>
              </div>
              <div class="course-info margin-top-30">
                <div class="course-enroll">
                  <span>enrolled 0</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>36 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>2h 40mins</span>
                </div>
              </div>
              <p class="margin-top-20">
                Learn WordPress like a Professional! Start from the basics and
                go all the way to creating your own applications and website!
              </p>
              <ul class="margin-top-20">
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Lorem ipsum dolor sit amet.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Consectetur adipisicing elit.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Placeat dolore quaerat itaque.</span>
                </li>
              </ul>
              <div class="preview-button margin-top-20">
                <a href="#" class="template-button">course preview</a>
                <a href="#" class="template-button margin-left-10"
                  >add to cart</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-course-item diffrent-bg-color">
            <div class="course-image">
              <img src="assets/images/course-image-2.png" alt="image" />
            </div>
            <div class="course-content margin-top-30">
              <div class="course-title">
                <h4>the complete financial analytic course</h4>
              </div>
              <div class="course-instructor-rating margin-top-20">
                <div class="course-instructor">
                  <img
                    src="assets/images/course-instructor-2.png"
                    alt="instructor"
                  />
                  <h6>chris doe</h6>
                </div>
                <div class="course-rating">
                  <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>4.2(30)</span>
                </div>
              </div>
              <div class="course-info margin-top-20">
                <div class="course-view">
                  <i class="fa fa-eye"></i>
                  <span>10,000 views</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>30 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>1h 40mins</span>
                </div>
              </div>
              <div class="course-price-cart margin-top-20">
                <div class="course-price">
                  <span class="span-big">$ 250.00</span>
                  <span class="span-cross">$ 400.00</span>
                </div>
              </div>
            </div>
            <div class="hover-state">
              <span class="heart-icon"><i class="fa fa-heart-o"></i></span>
              <span class="title-tag">by instructor</span>
              <div class="course-title margin-top-10">
                <h4><a href="#">the complete financial analytic course</a></h4>
              </div>
              <div class="course-price-info margin-top-20">
                <span class="best-seller">best seller</span>
                <span class="course-category"><a href="#">web design</a></span>
                <span class="course-price">$ 250.00</span>
              </div>
              <div class="course-info margin-top-30">
                <div class="course-enroll">
                  <span>enrolled 0</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>36 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>2h 40mins</span>
                </div>
              </div>
              <p class="margin-top-20">
                Learn WordPress like a Professional! Start from the basics and
                go all the way to creating your own applications and website!
              </p>
              <ul class="margin-top-20">
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Lorem ipsum dolor sit amet.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Consectetur adipisicing elit.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Placeat dolore quaerat itaque.</span>
                </li>
              </ul>
              <div class="preview-button margin-top-20">
                <a href="#" class="template-button">course preview</a>
                <a href="#" class="template-button margin-left-10"
                  >add to cart</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-course-item">
            <div class="course-image">
              <img src="assets/images/course-image-4.png" alt="image" />
            </div>
            <div class="course-content margin-top-30">
              <div class="course-title">
                <h4>user experience design with adobe XD</h4>
              </div>
              <div class="course-instructor-rating margin-top-20">
                <div class="course-instructor">
                  <img
                    src="assets/images/course-instructor-1.png"
                    alt="instructor"
                  />
                  <h6>john doe</h6>
                </div>
                <div class="course-rating">
                  <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>4.2(30)</span>
                </div>
              </div>
              <div class="course-info margin-top-20">
                <div class="course-view">
                  <i class="fa fa-eye"></i>
                  <span>25,000 views</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>36 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>2h 40mins</span>
                </div>
              </div>
              <div class="course-price-cart margin-top-20">
                <div class="course-price">
                  <span class="span-big">$ 400.00</span>
                  <span class="span-cross">$ 500.00</span>
                </div>
              </div>
            </div>
            <div class="hover-state">
              <span class="heart-icon"><i class="fa fa-heart-o"></i></span>
              <span class="title-tag">by instructor</span>
              <div class="course-title margin-top-10">
                <h4><a href="#">user experience design with adobe XD</a></h4>
              </div>
              <div class="course-price-info margin-top-20">
                <span class="best-seller">best seller</span>
                <span class="course-category"><a href="#">web design</a></span>
                <span class="course-price">$ 400.00</span>
              </div>
              <div class="course-info margin-top-30">
                <div class="course-enroll">
                  <span>enrolled 0</span>
                </div>
                <div class="course-video">
                  <i class="fa fa-play-circle-o"></i>
                  <span>36 lectures</span>
                </div>
                <div class="course-time">
                  <i class="fa fa-clock-o"></i>
                  <span>2h 40mins</span>
                </div>
              </div>
              <p class="margin-top-20">
                Learn WordPress like a Professional! Start from the basics and
                go all the way to creating your own applications and website!
              </p>
              <ul class="margin-top-20">
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Lorem ipsum dolor sit amet.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Consectetur adipisicing elit.</span>
                </li>
                <li>
                  <i class="fa fa-circle-o"></i
                  ><span>Placeat dolore quaerat itaque.</span>
                </li>
              </ul>
              <div class="preview-button margin-top-20">
                <a href="#" class="template-button">course preview</a>
                <a href="#" class="template-button margin-left-10"
                  >add to cart</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section Starts -->
  <section class="cta-section gradient-bg padding-top-60 padding-bottom-30">
    <div class="cta-shape">
      <img
        src="assets/images/plus-sign.png"
        alt="image"
        class="plus-sign item-rotate"
      />
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="section-title margin-bottom-40">
            <h2>enhance your skills with <span>best online course</span></h2>
          </div>
          <div class="cta-button">
            <a href="/signup" class="template-button margin-right-20"
              >start teaching</a
            >
            <a href="/signup" class="template-button-2">start learning</a>
          </div>
        </div>
        <div class="col-xl-4 offset-xl-2 col-lg-6">
          <div class="cta-image">
            <img src="assets/images/cta-image.png" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div
          class="modal fade"
          id="termsModal"
          ref="termsModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Terms & Conditions
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>
                  <b><i>Our Terms!</i></b>
                </h4>
                <ul class="py-4">
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quas, in aperiam obcaecati aut asperiores saepe. Aut,
                    corrupti dicta. Aperiam.
                  </li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Maiores, sed!
                  </li>
                  <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Tempora, voluptatem. Inventore?
                  </li>
                  <li>Lorem, ipsum dolor.</li>
                  <div class="lists">
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Consectetur vel quisquam ducimus dolores facere pariatur.
                      Qui sint porro sapiente numquam, fugiat veritatis natus
                      aspernatur asperiores quos magni consequuntur, earum
                      alias.
                    </li>
                    <li>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Incidunt nostrum optio perferendis, dolorem blanditiis
                      neque?
                    </li>
                    <li>Lorem, ipsum.</li>
                    <li>
                      <i><h3>Agreed!!..</h3></i>
                    </li>
                  </div>
                </ul>
                <div>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                  tenetur molestias dolorem alias laborum itaque, explicabo
                  aspernatur blanditiis, labore repudiandae, adipisci repellat.
                  Aliquid fuga veritatis sunt natus laborum architecto
                  asperiores. Impedit, dolorem suscipit ipsa, reprehenderit
                  debitis eaque labore veritatis eos similique atque sapiente
                  voluptates? Incidunt esse temporibus rem iste rerum aliquid
                  quia eaque quasi exercitationem. Cum temporibus voluptas
                  tenetur itaque non inventore praesentium fugiat dicta
                  blanditiis, soluta et rem nesciunt ipsam doloremque assumenda
                  sequi, libero perferendis? Non, inventore exercitationem natus
                  quidem veritatis, laudantium iste placeat qui cum quasi
                  architecto dicta facilis quis laboriosam odit, error fuga
                  culpa saepe! Natus, laudantium. Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. Rerum quam eum optio reiciendis
                  consequuntur. Placeat amet quisquam doloribus quae tenetur
                  voluptates vero ab quibusdam cumque, aut ipsa ex animi
                  eligendi rerum, autem nulla architecto ea quas aspernatur.
                  Quidem maiores dolore numquam. Perspiciatis accusantium quae
                  totam aut eligendi est eaque cum, at odit obcaecati facere
                  quibusdam ex officia fugiat nostrum veniam ducimus quaerat
                  veritatis voluptatum? Deserunt esse culpa iure accusantium
                  unde laboriosam cum ut a saepe quae facere fugiat ullam
                  reprehenderit qui nulla nisi minima facilis explicabo omnis
                  dolores, placeat, incidunt dolor eos eveniet. A temporibus
                  fuga obcaecati assumenda commodi quam sequi maiores non
                  voluptatem quod! Dolorum aspernatur obcaecati odio repellat
                  adipisci, minus aliquid iste consequatur odit voluptate
                  ducimus esse commodi amet praesentium repellendus voluptates
                  molestias! Reiciendis maiores architecto optio quos eligendi
                  laborum enim nihil veritatis dicta amet autem officiis est
                  incidunt, itaque quis harum? Fugit commodi optio eos deleniti
                  quod!
                </div>
              </div>
              <div class="modal-footer">
                <input type="checkbox" v-model="profile.terms" /> I agree terms and conditions

                <button type="button" class="template-button-2" @click="acceptTerms()">
                  Save changes
                </button>
              </div>
            </div>
          </div>
        </div>
</template>

<script>
import Base from "./base.vue";
import { reactive, ref } from "vue";

export default {
  extends: Base,
  name: "profile",
  setup(){

    let profile = ref({
      terms: false,
      name: null,
      phone: null,
      cnic: null,
      address: null,
      qualification: null
    });
    return {profile};
  },

  mounted() {
    this.showTerms()
  },




  methods: {
    async showTerms(){

        // get the flag from API to see status
        const res = await this.network().getAcceptTerms()
        console.log(res)

        if(res && res.is_accepted){
            this.profile.terms = true;
        } else {
            $("#termsModal").modal('show');
        }

    },
    async acceptTerms(){
        console.log(this.profile.terms);

        // call API to send data
        let obj = {
            terms_accepted: this.profile.terms
        }

        const res = await this.network().acceptTerms(obj)
        console.log(res)
        $("#termsModal").modal('hide');
    },
    async saveProfileDetail(){
        console.log(this.profile);

        const res = await this.network().saveProfile(this.profile)
        console.log(res)
    }
  }
};
</script>
<style>
.modal-body {
  max-height: 700px;
  overflow-y: scroll;
}
.modal-body ul li {
  list-style-type: disc;
  margin-left: 10px;
}
.lists {
  margin-left: 50px;
  margin-top: 30px;
  font-weight: bold;
}
.modal-dialog {
  max-width: 55%;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
