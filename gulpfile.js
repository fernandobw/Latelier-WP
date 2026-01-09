const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const minifyCss = require('gulp-minify-css');
const uglify = require('gulp-uglify');
const purgecss = require('gulp-purgecss');

// 🧩 1. Compilar SCSS principal
gulp.task('scss', function () {
	return gulp.src('./assets/css/styles.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('./assets/css')); // genera ./assets/css/styles.css
});

// 🧩 3. Purgar Swiper
gulp.task('swiper', function () {
	return gulp.src('./node_modules/swiper/swiper-bundle.css')
		.pipe(purgecss({
			content: ['**/*.html', '**/*.php', '**/*.js'],
			safelist: [/^swiper/],
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest('./assets/css/swiper'));
});

// 🧩 4. Compilar y unir tus estilos finales
gulp.task('styles', function () {
	return gulp.src([
        './assets/css/tailwind.css',
		'./assets/fonts/fonts.css',
		'./assets/css/swiper/swiper-bundle.css',
		'./assets/css/styles.css' // generado desde SCSS
	])
		.pipe(concat('styles.css'))
		.pipe(minifyCss())
		.pipe(gulp.dest('./assets/dist'));
});

gulp.task('styles-dev', function () {
	return gulp.src([
		'./assets/css/tailwind.css',
		'./assets/fonts/fonts.css',
		'./assets/css/swiper/swiper-bundle.css',
	])
		.pipe(concat('styles.dev.css'))
		.pipe(minifyCss())
		.pipe(gulp.dest('./assets/dist'));
});

// 🧩 5. Concatenar y minificar JS
gulp.task('js', function () {
	return gulp.src([
		'./node_modules/jquery/dist/jquery.min.js',
		'./node_modules/swiper/swiper-bundle.min.js',
		'./assets/js/main.js'
	])
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./assets/dist'));
});

gulp.task('js-dev', function () {
	return gulp.src([
		'./node_modules/jquery/dist/jquery.min.js',
		'./node_modules/swiper/swiper-bundle.min.js'
	])
		.pipe(concat('main.dev.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./assets/dist'));
});

// 🧩 6. Tarea por defecto
gulp.task('default', gulp.series(
	gulp.parallel('scss', 'swiper'), // compila SCSS y purga librerías
	gulp.parallel('styles', 'styles-dev', 'js', 'js-dev') // genera los builds finales
));

// 🧩 7. Watch — escuchar cambios en SCSS y recompilar automáticamente
gulp.task('watch', function () {
    //gulp.watch('./assets/css/styles.scss', gulp.series('scss', 'styles', 'styles-dev', 'js', 'js-dev'));
	
	//gulp.watch('./assets/css/styles.scss', gulp.series('scss', 'styles', 'styles-dev'));

	gulp.watch('./assets/js/main.js', gulp.series('js', 'js-dev'));
});