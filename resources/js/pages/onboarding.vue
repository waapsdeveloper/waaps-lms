<template>
  <!-- Categorry Section Starts -->
  <section class="course-category-section padding-top-120 padding-bottom-90">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h3 class="my-3">My Prefrences</h3>
          <div class="course-category-sidebar">
            <div class="lms-single-widget">
              <div class="lms-widget-title">
                <h4>Platform</h4>
              </div>
              <ul>
                <li class="">
                  <a href="#">web development</a>
                </li>
                <li class="">
                  <a href="#">Mobile development</a>
                </li>
              </ul>
            </div>
            <div class="lms-single-widget">
              <div class="lms-widget-title">
                <h4>web Development</h4>
              </div>
              <ul>
                <li class=""><a href="#">Type Script</a></li>
                <li><a href="#">NodeJS</a></li>
                <li><a href="#">React</a></li>
                <li><a href="#">Angular</a></li>
                <li><a href="#">VueJs</a></li>
                <li><a href="#">Laravel</a></li>
                <li><a href="#">PHP</a></li>
              </ul>
            </div>

            <div class="lms-single-widget">
              <div class="lms-widget-title">
                <h4>Mobile Development</h4>
              </div>
              <ul>
                <li class=""><a href="#">Angular</a></li>
                <li><a href="#">Ionic</a></li>
                <li><a href="#">JAVA</a></li>
                <li><a href="#">Swift</a></li>
                <li><a href="#">React Native</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <form action="">
            <h4 class="text-left">Hands on your experience</h4>
            <p class="text-left">
              Select your current experience level to get the best courses (no
              of years)
            </p>

            // 0 - 1 year, 1 - 2 year

            <div class="badge-style">
              <div
                v-for="(item, index) in items"
                :key="index"
                class="badge"
                :class="{ selected: item.Selected == true }"
                @click="selectItem(item)"
              >
                {{ item.name }}
              </div>
            </div>

            <br />
            <br />
            <h5 class="text-left">
              Fill your availibility to get the best courses
            </h5>
            <br />

            <div>Monday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Tuesday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Wednesday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Thursday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Friday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Saturday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <div>Sunday</div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">From:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="">To:</div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <br />

            <h5 class="my-3">Select your current experience:</h5>

            <div class="badge-style">
              <div
                v-for="(technology, index) in technologies"
                :key="index"
                class="badge"
                :class="{ selected: technology.selected == true }"
                @click="selectTag(technology)"
              >
                {{ technology.name }}
              </div>
            </div>
            <br />
          </form>
          <div class="row">
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-1.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>web design</h4>
                  </div>
                  <span>03 course(S)</span>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-2.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>marketing</h4>
                  </div>
                  <span>02 course(S)</span>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-3.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>education</h4>
                  </div>
                  <span>10 course(S)</span>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-4.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>business</h4>
                  </div>
                  <span>04 course(S)</span>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-5.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>psychology</h4>
                  </div>
                  <span>03 course(S)</span>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-6.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>UI & UX design</h4>
                  </div>
                  <span>05 course(S)</span>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-7.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>technology</h4>
                  </div>
                  <span>09 course(S)</span>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="/course">
                <div class="single-category-item">
                  <div class="category-image">
                    <img src="assets/images/category-icon-8.png" alt="image" />
                    <img
                      src="assets/images/round-shape-3.png"
                      alt="shape"
                      class="feature-round-shape-3"
                    />
                  </div>
                  <div class="category-title margin-bottom-10">
                    <h4>photography</h4>
                  </div>
                  <span>08 course(S)</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-lg-12">
          <div class="heading text-center"><h3>Past Qualification</h3></div>
          <br />
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text" id="">Current Study:</div>
            </div>
            <input type="text" class="form-control" />
          </div>
          <br />
          <div class="input-group">
            <select class="form-control">
              <option>Type Script</option>
              <option>NodeJs</option>
              <option>React</option>
              <option>Angular</option>
              <option>VueJs</option>
              <option>Laravel</option>
              <option>PHP</option>
              <option>Ionic</option>
              <option>JAVA</option>
              <option>Swift</option>
              <option>React Native</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text" id="">experience:</div>
            </div>
            <input type="text" class="form-control" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Base from "./base.vue";

export default {
  extends: Base,
  name: "onboarding",
  setup() {
  let items = [
    { name: "Item 1", Selected: false },
    { name: "Item 2", Selected: false },
    { name: "Item 3", Selected: false },
    { name: "Item 4", Selected: false },
    // Add more items as needed
  ];

  const selectTag = (item) => {
    console.log("select tag",tag);
    tag.selected = !tag.selected;
        // Add any additional logic you need when an item is selected/deselected
  };

  return {
    items
  };
},
  setup() {
    let technologies = [
      { name: "Type Script", selected: false },
      { name: "NodeJS", selected: false },
      { name: "React", selected: false },
      { name: "Angular", selected: false },
      { name: "VueJS", selected: false },
      { name: "Laravel", selected: false },
      { name: "PHP", selected: false },
      { name: "Ionic", selected: false },
      { name: "JAVA", selected: false },
      { name: "Swift", selected: false },
      { name: "React Native", selected: false },
    ];
    return {
      technologies,
    };
  },
  mounted() {},
  methods: {
    selectTag(tag) {
      console.log("select tag", tag);
      tag.selected = !tag.selected;
    },
  },
};
</script>
<style>
.badge-style {
  display: flex;
  font-size: 20px;
  justify-content: left;
  flex-wrap: wrap;
  gap: 8px;
}
.badge {
  cursor: pointer;
  background-color: white;
  border-radius: 20px;
  color: #50be46;
  border: #50be46 1px solid;
  padding: 10px 16px;
}

.badge:hover {
  color: white;
  border: 1px solid white;
  background-color: #50be46;
}
</style>
