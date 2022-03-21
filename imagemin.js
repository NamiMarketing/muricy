const imagemin = require('imagemin');
const imageminMozjpeg = require('imagemin-mozjpeg');
(async () => {
  const files = await imagemin(['src/img/*.jpg', 'another_dir/*.jpg'], {
    destination: 'destination_dir',
    plugins: [imageminMozjpeg({
      quality: 50
    })]
  });
  console.log(files);
})();