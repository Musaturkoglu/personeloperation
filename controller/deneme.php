

<style>@mixin hide-scrollbar {
  scrollbar-width: none;
  -ms-overflow-style: none;

  &::-webkit-scrollbar {
    display: none;
  }
}

.carousel {
  $root: &;

  position: relative;
  width: 100%;
  height: 100%;
  counter-reset: carousel;

  &__list {
    @include hide-scrollbar;

    display: flex;
    align-items: stretch;
    height: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
    overflow: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;

    // Remove smooth scrolling if user preferes reduced motion
    @media (prefers-reduced-motion) {
      scroll-behavior: auto;
    }
  }

  &__item {
    position: relative;
    flex: 1 0 auto;
    width: 100%;
    max-width: 100%;
    scroll-snap-align: center;
    counter-increment: carousel;

    &:nth-child(3n + 1) {
      #{$root}__slide {
        background-color: #01539d;
        color: #efa37f;
      }
    }

    &:nth-child(3n + 2) {
      #{$root}__slide {
        background-color: #5f4a8b;
        color: #e69a8d;
      }
    }

    &:nth-child(3n + 3) {
      #{$root}__slide {
        background-color: #00203f;
        color: #adf0d1;
      }
    }
  }

  &__slide {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  &__slide-label {
    font-size: 2rem;

    &::after {
      content: counter(carousel);
      margin-left: 0.25em;
    }
  }

  @mixin nav-base-styling {
    $nav-size: 40px;

    position: absolute;
    top: 50%;
    width: $nav-size;
    height: $nav-size;
    margin-top: calc(#{$nav-size} / -2);
    border-radius: 50%;

    &--prev {
      left: 16px;
    }

    &--next {
      right: 16px;
    }
  }

  &__nav {
    @include nav-base-styling;

    color: transparent;
    overflow: hidden;
  }

  &__nav-dummy {
    @include nav-base-styling;

    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #000;
    color: #fff;
    pointer-events: none;
    opacity: 0.8;
    transform-origin: 50% 50%;
    transition: transform 200ms ease, opacity 200ms ease;

    // Add hover and active styling
    // This requires :has() support
    @supports selector(:has(a)) {
      $nav-directions: "prev", "next";

      @each $dir in $nav-directions {
        &--#{$dir} {
          #{$root}:has(#{$root}__nav--#{$dir}:hover) & {
            opacity: 1;
          }

          #{$root}:has(#{$root}__nav--#{$dir}:active) & {
            transform: scale(0.95);
          }
        }
      }
    }
  }
}

.icon {
  display: block;
  width: 1em;
  height: 1em;
  fill: currentColor;
}

// Other

html,
body {
  height: 100%;
}

body {
  font-family: sans-serif;
  margin: 0;
}
</style><div class="carousel">
  <ul class="carousel__list">
    <li class="carousel__item" id="slide-01">
      <div class="carousel__slide">
        <div class="carousel__slide-label">Slide</div>
      </div>
      <a href="#slide-05" title="" class="carousel__nav carousel__nav--prev">Previous slide</a>
      <a href="#slide-02" title="" class="carousel__nav carousel__nav--next">Next slide</a>
    </li>
    <li class="carousel__item" id="slide-02">
      <div class="carousel__slide">
        <div class="carousel__slide-label">Slide</div>
      </div>
      <a href="#slide-01" title="" class="carousel__nav carousel__nav--prev">Previous slide</a>
      <a href="#slide-03" title="" class="carousel__nav carousel__nav--next">Next slide</a>
    </li>
    <li class="carousel__item" id="slide-03">
      <div class="carousel__slide">
        <div class="carousel__slide-label">Slide</div>
      </div>
      <a href="#slide-02" title="" class="carousel__nav carousel__nav--prev">Previous slide</a>
      <a href="#slide-04" title="" class="carousel__nav carousel__nav--next">Next slide</a>
    </li>
    <li class="carousel__item" id="slide-04">
      <div class="carousel__slide">
        <div class="carousel__slide-label">Slide</div>
      </div>
      <a href="#slide-03" title="" class="carousel__nav carousel__nav--prev">Previous slide</a>
      <a href="#slide-05" title="" class="carousel__nav carousel__nav--next">Next slide</a>
    </li>
    <li class="carousel__item" id="slide-05">
      <div class="carousel__slide">
        <div class="carousel__slide-label">Slide</div>
      </div>
      <a href="#slide-04" title="" class="carousel__nav carousel__nav--prev">Previous slide</a>
      <a href="#slide-01" title="" class="carousel__nav carousel__nav--next">Next slide</a>
    </li>
  </ul>
  <div class="carousel__nav-dummy carousel__nav-dummy--prev" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="icon">
      <path d="M11.4 0l1.4 1.3L5.9 8l6.9 6.7-1.4 1.3-6.9-6.7L3.2 8l1.4-1.3L11.4 0z" />
    </svg>
  </div>
  <div class="carousel__nav-dummy carousel__nav-dummy--next"  aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="icon">
      <path d="M4.6 16l-1.4-1.3L10.1 8 3.2 1.3 4.6 0l6.9 6.7L12.8 8l-1.4 1.3L4.6 16z" />
    </svg>
  </div>
</div>