<section id="comics-list">
    <div class="container">
        <button class="series">CURRENT SERIES</button>
        <div class="row">
            <div class="card" v-for="(comic, i) in comics" :key="i">
                <figure>
                    <img :src="comic.thumb" :alt="comic.series" />
                    <figcaption>
                        <h4></h4>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="btn-box">
            <button class="more">
                <h3>LOAD MORE</h3>
            </button>

        </div>
    </div>
</section>