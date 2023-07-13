<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create([
            'id' => 1,
            'title' => 'The Shawshank Redemption',
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg',
            'description' => 'the shawshank redemption is a 1994 american drama film written and directed by frank darabont, based on the 1982 stephen king novella rita hayworth and shawshank redemption. it tells the story of banker andy dufresne (tim robbins), who is sentenced to life in shawshank state penitentiary for the murders of his wife and her lover, despite his claims of innocence. over the following two decades, he befriends a fellow prisoner, contraband smuggler ellis "red" redding (morgan freeman), and becomes instrumental in a money-laundering operation led by the prison warden samuel norton (bob gunton). william sadler, clancy brown, gil bellows, and james whitmore appear in supporting roles.',
            'release_date' => '1994-09-23',
            'country_id' => 1,
            'genre_id' => 5,
            'video_url' => 'https://www.youtube.com/embed/6hB3S9bIaco',
            'rating' => 9.3,
        ]);
        Movies::create([
            'id' => 2,
            'title' => 'The Godfather',
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg',
            'description' => 'the godfather is a 1972 american crime film directed by francis ford coppola, who co-wrote the screenplay with mario puzo, based on puzo\'s best-selling 1969 novel of the same name. the film stars marlon brando, al pacino, james caan, richard castellano, robert duvall, sterling hayden, john marley, richard conte, and diane keaton. it is the first installment in the godfather trilogy. the story, spanning from 1945 to 1955, chronicles the corleone family under patriarch vito corleone (brando), focusing on the transformation of one of his sons, michael corleone (pacino), from reluctant family outsider to ruthless mafia boss.',
            'release_date' => '1972-03-24',
            'country_id' => 1,
            'genre_id' => 5,
            'video_url' => 'https://www.youtube.com/embed/sY1S34973zA',
            'rating' => 9.2,
        ]);
        Movies::create([
            'id' => 3,
            'title' => 'The Dark Knight',
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/The_Dark_Knight_%282008_film%29.jpg',
            'description' => 'the dark knight is a 2008 superhero film directed, produced, and co-written by christopher nolan. based on the dc comics character batman, the film is the second installment of nolan\'s the dark knight trilogy and a sequel to 2005\'s batman begins, starring christian bale and supported by michael caine, heath ledger, gary oldman, aaron eckhart, maggie gyllenhaal, and morgan freeman. in the film, bruce wayne / batman (bale), police lieutenant james gordon (oldman) and district attorney harvey dent (eckhart) form an alliance to dismantle organized crime in gotham city, but are menaced by an anarchistic mastermind known as the joker (ledger), who seeks to undermine batman\'s influence and turn the city to chaos.',
            'release_date' => '2008-07-18',
            'country_id' => 1,
            'genre_id' => 1,
            'video_url' => 'https://www.youtube.com/embed/EXeTwQWrcwY',
            'rating' => 9.0,
        ]);
        Movies::create([
            'id' => 4,
            'title' => "Schindler`s List",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/3/38/Schindler%27s_List_movie.jpg',
            'description' => 'Schindler`s List is a 1993 film based on the novel Schindler`s Ark by Thomas Keneally, which was published in the United States under the title Schindler`s List and later re-published in Commonwealth countries under that title.',
            'release_date' => '1993-12-15',
            'country_id' => 1,
            'genre_id' => 5,
            'video_url' => 'https://www.youtube.com/embed/JdRGC-w9syA',
            'rating' => 8.9,
        ]);
        // buatkan 5 film lagi 
        Movies::create([
            'id' => 5,
            'title' => "The Lord of the Rings: The Return of the King",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/23/The_Lord_of_the_Rings%2C_TROTK_%282003%29.jpg/220px-The_Lord_of_the_Rings%2C_TROTK_%282003%29.jpg',
            'description' => 'The Lord of the Rings: The Return of the King is a 2003 epic fantasy adventure film directed by Peter Jackson, based on the third volume of J. R. R. Tolkien\'s The Lord of the Rings. The film is the final instalment in the Lord of the Rings trilogy and was produced by Barrie M. Osborne, Jackson and Fran Walsh, and written by Walsh, Philippa Boyens and Jackson. The film features an ensemble cast including Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin, Cate Blanchett, John Rhys-Davies, Bernard Hill, Billy Boyd, Dominic Monaghan, Orlando Bloom, Hugo Weaving, Miranda Otto, David Wenham, Karl Urban, John Noble, Andy Serkis, Ian Holm, and Sean Bean. It was preceded by The Fellowship of the Ring (2001) and The Two Towers (2002).',
            'release_date' => '2003-12-17',
            'country_id' => 1,
            'genre_id' => 2,
            'video_url' => 'https://www.youtube.com/embed/r5X-hFf6Bwo',
            'rating' => 8.9,
        ]);
        Movies::create([
            'id' => 6,
            'title' => "The Good, the Bad and the Ugly",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Good_the_bad_and_the_ugly_poster.jpg/220px-Good_the_bad_and_the_ugly_poster.jpg',
            'description' => 'The Good, the Bad and the Ugly is a 1966 Italian epic Spaghetti Western film directed by Sergio Leone and starring Clint Eastwood as "the Good", Lee Van Cleef as "the Bad", and Eli Wallach as "the Ugly". Its screenplay was written by Age & Scarpelli, Luciano Vincenzoni and Leone (with additional screenplay material and dialogue provided by an uncredited Sergio Donati), based on a story by Vincenzoni and Leone. Director of photography Tonino Delli Colli was responsible for the film\'s sweeping widescreen cinematography, and Ennio Morricone composed the film\'s score, including its main theme. It is an Italian-led production with co-producers in Spain, West Germany and the United States.',
            'release_date' => '1966-12-23',
            'country_id' => 1,
            'genre_id' => 1,
            'video_url' => 'https://www.youtube.com/embed/WCN5JJY_wiA',
            'rating' => 8.8,
        ]);
        Movies::create([
            'id' => 7,
            'title' => "The Lord of the Rings: The Fellowship of the Ring",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8a/The_Lord_of_the_Rings%2C_TFOTR_%282001%29.jpg/220px-The_Lord_of_the_Rings%2C_TFOTR_%282001%29.jpg',
            'description' => 'The Lord of the Rings: The Fellowship of the Ring is a 2001 fantasy film directed by Peter Jackson. The film is the first part of the Lord of the Rings trilogy based on the novel of the same name by JRR Tolkien. The film was produced by Barrie M. Osborne, Jackson, Fran Walsh and Tim Sanders, and written by Walsh, Philippa Boyens and Jackson. The film features an ensemble cast including Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin, Cate Blanchett, John Rhys-Davies, Billy Boyd, Dominic Monaghan, Orlando Bloom, Christopher Lee, Hugo Weaving, Sean Bean, Ian Holm, and Andy Serkis. It was followed by The Two Towers (2002) and The Return of the King (2003).',
            'release_date' => '2001-12-19',
            'country_id' => 1,
            'genre_id' => 2,
            'video_url' => 'https://www.youtube.com/embed/V75dMMIW2B4',
            'rating' => 8.8,
        ]);
        Movies::create([
            'id' => 8,
            'title' => "Pulp Fiction",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg',
            'description' => 'Pulp Fiction is a 1994 American neo-noir black comedy crime film written and directed by Quentin Tarantino, who conceived it with Roger Avary. Starring John Travolta, Samuel L. Jackson, Bruce Willis, Tim Roth, Ving Rhames, and Uma Thurman, it tells several stories of criminal Los Angeles. The title refers to the pulp magazines and hardboiled crime novels popular during the mid-20th century, known for their graphic violence and punchy dialogue.',
            'release_date' => '1994-10-14',
            'country_id' => 1,
            'genre_id' => 5,
            'video_url' => 'https://www.youtube.com/embed/s7EdQ4FqbhY',
            'rating' => 8.9,
        ]);
        // buatkan 1 film
        Movies::create([
            'id' => 9,
            'title' => "The Lord of the Rings: The Two Towers",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/fc/The_Lord_of_the_Rings%2C_T2T_%282002%29.jpg/220px-The_Lord_of_the_Rings%2C_T2T_%282002%29.jpg',
            'description' => 'The Lord of the Rings: The Two Towers is a 2002 epic fantasy adventure film directed by Peter Jackson, based on the second volume of J. R. R. Tolkien\'s The Lord of the Rings. The film is the second instalment in The Lord of the Rings trilogy and was produced by Barrie M. Osborne, Fran Walsh and Jackson, and written by Walsh, Philippa Boyens, Stephen Sinclair and Jackson. The film features an ensemble cast including Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin, Cate Blanchett, John Rhys-Davies, Bernard Hill, Christopher Lee, Billy Boyd, Dominic Monaghan, Orlando Bloom, Hugo Weaving, Miranda Otto, David Wenham, Brad Dourif, Karl Urban and Andy Serkis. It was preceded by The Fellowship of the Ring (2001) and followed by The Return of the King (2003).',
            'release_date' => '2002-12-18',
            'country_id' => 1,
            'genre_id' => 2,
            'video_url' => 'https://www.youtube.com/embed/LbfMDwc4azU',
            'rating' => 8.7,
        ]);
        Movies::create([
            'id' => 10,
            'title' => "The Matrix",
            'poster_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c1/The_Matrix_Poster.jpg/220px-The_Matrix_Poster.jpg',
            'description' => 'The Matrix is a 1999 science fiction action film written and directed by the Wachowskis. It stars Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano and is the first installment in the Matrix franchise. It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix, created by intelligent machines to distract humans while using their bodies as an energy source. When computer programmer Thomas Anderson, under the hacker alias "Neo", uncovers the truth, he "is drawn into a rebellion against the machines" along with other people who have been freed from the Matrix.',
            'release_date' => '1999-03-31',
            'country_id' => 1,
            'genre_id' => 1,
            'video_url' => 'https://www.youtube.com/embed/m8e-FF8MsqU',
            'rating' => 8.7,
        ]);

    }
}
