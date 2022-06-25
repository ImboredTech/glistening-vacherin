import scrape from 'website-scraper'; // only as ESM, no CommonJS
const options = {
  urls: ['https://sfmemz.github.io/CutTheRope/'],
  directory: './dump'
};

// with async/await
const result = await scrape(options);

// with promise
scrape(options).then((result) => {});