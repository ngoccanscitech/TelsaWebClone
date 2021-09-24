<template>
    <div style="background-color:white">
        <v-carousel hide-delimiters>
            <v-carousel-item src="https://i.ndh.vn/2021/01/30/tesla-1-1612005480.jpg">
                <v-row class="fill-height" align="center" justify="center">
                    <div class="text-h2"></div>
                </v-row>
            </v-carousel-item>
            <v-carousel-item src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGRgYGhoYGBwYHBocHhocGBgaGhoaHBgcIS4lHCErIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGhISHzQrISQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTc0NDQxNDQ0MTQ0NDQ0NDE0NDQ0NDQ+NDQ0NP/AABEIAKgBLQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYBB//EAEIQAAIABAMEBggEBQMDBQAAAAECAAMRIQQSMQVBUXEGImGBkaETMkJSscHR8BRikuEHcoKi8RYzshXC4iM0Q2PS/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAKREAAgICAgECBgIDAAAAAAAAAAECEQMSITFBMnEEEyJCUWHB0RSBkf/aAAwDAQACEQMRAD8A9FmAaE03g8DHXkg8xA045utwtSJJbGlQdNRwjidSGbVTQwnrpraJnmZ7Upw584hyEVqOzlACQxMs7Kag0iBjXhHZcutb6afZgUuMNtEEdbx/aDkmA6GsZh7U+6QVJmEAboqk0RwTNDHKRWydocbwbKxCtob8N/hG1JMw00S0jlI7HY0ZGwodHIlAbSFSHQqQA2kcpCYgCpoBxNoWUG8CipHMsPpCpEoEeWOFYlpHKQoWRZY4ViakcpCi2QFYYVgkiG5IgBykNKQV6OEZcABlIYZcG+jhGVAABlwwyoPMuGtLgUrzKhhkxZGXDDKi2CuMiGNIiyMqOGVCyFUcPDfw8WplRz0ULFAKNlNGFxakTy1Csa+q1xwrwgCZOLmppXs7IesyxDNawp2Rg1YZisOKVUeEMwyhwQxNR4iB5dS4U1YUsB2jW8JyZbWN+G4jnAtj8RhWXt8ofLAN9TQaQmxaOKMCDx7d14GZypqbmlbbx2iICaantE0pDJbdajAg2A+9IGebnIBtfxvavKCMZigaBdxqT2iFCyeUvrK2u7lDMrjdpvBuO0RydjFYWqDryMSSsWpAqaHfWJRbJZO1HWzUceB8d8FDbUul8wPCn2IBeWra9xH1gd9ng6MRzFfOsaTZlxQdiNrhlbIGG4k6jkAYGTaE2poxoBvA1OlKiA3lMi0HWBIuO21xugfGOCQiHdQ04DdC2KSNDgdrVAz77Bhp3jdzg/E4tEXMx10pcnkIzWGYBAOAoR2jW0AznykkAlBYa2voDFUmRxQbtDGtNJvQVqq17vGBpONZSBnZabgTQd0PaWroGTUagRXTN8Cl0m2Zq3qHFaUYfOHzukb0oFCnjc/G0Z5ZxFuMT4ZmY03b/wDMUyFz9uTjq5H8tB8Igw+25qMSHLV1DksD3HTugPESiWNPumt4GeWwrY2ue/QxUgzUL0u6t5fW7GoPhURzD9KnzddAU4pUEdxJr5RlpMssTemUFjyEEJmCErcEBj+WptztSK0Q9EweOlzRmRg3Gmo5jUQTHm+GejUDkVuhBob6iogyVt3EItc2fK2UhgDyNfW0pv3wFG8hGMtgOlyGizFKE7xdfDUecaDD4hHFUZWH5TWnPhAUEQo5lhUiWBUhFY7CJiFG5YYyxJWOQBFlhZYkpCpApEUjmWJqQqQBkWWh1HxjrzB92gJZx4w4vEAT6RlIIO7cd3CGibU1ap74gLjhDGmwAas4cPlDfSgaE31+6wGJhhFzABLzK7gOUITbZQB3i/jAuaEGgUJBG+GM9IhZ+2GljABUnFshse46QXK2kPaHh9Ipy3ZDS47a9sKFmkGKT3hSKjEoJbkoVIbvpxEAPMpDfTCCQbLJMeAcwTrGxvYwMMSRUAAAkkjnu7RAhniJZUlnFQKL7xNB47+QjVGbJJeIZK5TSt+R+cdZy5JNydaCkdSWg1Z3I1CCijm5H0iaW6j1UUcyXPxIhQsgTC9WtRm4G3nDpYozCtMqmvYSP2EEORvVfBRArqDUigB1u1/OkKFjpCUli9C11PAm4rzhslWyltahuroCtfZPfA2KlsUrnmBdxyBktzHzgOfisSECrNkuBpnV0buy1X4RdWS0Tyks60OYrYV4a/KD8AMyXFiqjmAtD5/CMwdsTwT6TDO9agvL61qbymYAW9qkSYbpcigI6FaC2ax7LGh8orTFliV6qGlRnKkg3BB1Hd5iJ2dkejdZTQZuw6Zu3dFZgsejWUrQHPatuYrYQUcS9yWBBtW4FuUKAsTKBIKGwsaXpex7R+8SJO/9RSrEMa1oSLgf+PwhuIl+0hysKaGx58O+K95pJqbG99PLdF7BpP8AU01ymgMticy1GegAoy77EwzaHSTEM3o7KpYEMmYNlJqKMDoOW6M+sx61qorqd55+HnB7FnQNRWymoKkBl49XeLecSgaXZHSN1bJP6y6BqdYdpp6w8+cayVNVgGVgQbgg1Bjy0YwFhmUU3mt9PLdE+G2vMSmViO0XFz7jCle2JQPT6Rykedr0nxANM/iifSJZ/SbE7nUfyqt+81hQPQBCpHnMnb84HrOx5Mw8jY8osZe2Gf1Z5vuJAI+Y7oaizbUjlIwk0vWpdieJYnzrHTOmb5j/AKz9YaksrlNePdeJSp1ytSL5JSglgKV1t9NIbMxCVIz3GoJOkcdjpRR1J3GnZDFJrStBpcG0XyMpAykcjQW5GHfhV4CphYooVlObqM3Lf2gGIsj1pSnGtvMxf/gBX1QT3VHIi8I4BTqCeZJ3U11i7Cii9C9KihB3ggwPMZgaHzjRf9OQ2oQNbEgg9kC4nBaCrnSmYK28caWiqSJRR+mbt7qmHrMc+y3hBGJ2m6HKpV6WrlIvXn3RV4jaj16zkn3Vv8CAIjkj24/gsk1b4DJjsPWZQeGp76RD+KbXdxpbxiTBTJ7eqMo7ST5mx8IupQNKPNLdii37+EVSJP4Rx8mf/Gk8ImwkuZMPUSo3saBQOJbd8Y0EkSU0lqTxZSfjaAds4p3WiOEFbKAtO00GkatHH5E30NcSZQq7K7cur/Sur8zblEM3aBfdQcW+AUfCMvj8LiQSbEcVNzzzfUxUT5rp6yvzKsf7tI0tfDOMsOSPaZvDi14k8M1h3LDGxY3uo7AQPhHnr7W7fCB22oOJjVGD0WbtKUik5lZtwrW/ExSynmTOuWyoLl3OVe4anutGOmYtm0Ma7au1sMcMczSnIVQqAtTNagVRleg7tIqRGXeP2qv4e01QmSmcmxFKVtvJ3CMpgHZwZkxmSUtzU3Pf8oC2Zs/0jBnXIgOZJdWIHacxJqfG9OyBumrTMyoQVRRXLSwJ0rS1abufaYzd8I9KxLFHaa5fS/suX6WTGVhhQJaKypW3pHLVstQVFlJqfnFT+FafNWXQogBLEEE1ymhtapaltNYqcFjUWQZWVg7TFYtWoYKGFMoWq0r21vF7gekcmXJCMrLMDEsaVLA0pvtQbjTQ6VixXJxnJyXJzofiMuKlLmYUmFCymjddSm8UpmAsRTsj0PbMppSmaZZny1qXaUAk5ABdsnqThxspA43jzjE4U4fHlFOcCbLdSBrmKueregBYjuj2nD4morTu/wAxWZVvowkqeJymZhponIt3VAVmIK+3JN6VHrCotEAxyHUNruINt+u+NR0a6IS8LiZuJVqGZmVJa+oiMytlqbsaqOAFaUg/b3RaViOuhEqZvNOq/wDMBofzDvrGbNasxv4uRvVh9/zQlxUoMCkx1G80uKcjeFj+iWJS4QTBxlMG/tNG8ooZilSVIIIsRwik6L4zJRJPpmvxU+do6JkvdO8RT5RnQ32Y7nrYAc9POsCGnVxXKJisaVtQjyiUhqboy/oWAzFWy8R9aROjS7VeYvePLhAF8yGukJpJrUAdsUL7TKGizyVFLsENu81MPfpEVqM6Nw6pFb9lolsF4J7g2NuAJHlEoxszgDzP7Rl16S1pUqKe6pNb6dloI/1J/wDU57m+NLw5FHpkvAKtcrGhJJBJNz27okGDWliajizN2aNUR5xM/igPZw3i8Dv/ABRmbpCfqb5COGkjpsje4nAMHs7UoRm6p9au83t36xXnY0y3/raC3VNacCc1zxjFP/EyedJMsd7GIH/iPidySx/ST841rImyNudkTgxyTBbRqNexHEaA0iJsHiTrNqQbglxUmmjCo/xGHf8AiFjDvlj+j6mGf6/x3voOSCLpIbI30vC4tKgOpBrWrteoAvvr9IkXaU0IyF6vUoWrYBSQcvaSSCeAHfVfw+xuOx00vMmn0Er16KozvqJYNOFyeFONRdY9FVmVLqCb8eZ37/GMyVHs+DgpztroqjLZ+qGyrW7bzy4Dz5aQRKkypYtcj71MSyNnzXUsq1AsSaDuAJv3QOuAZiQagjiCByjn0faTi7V9dkjYsnSG/im96ndATSSDQsB4w78NX1TmO+lRQcSdAOcNma+VBdk5mE6mvfC/EgboF9CoN2LHgnzf6AxMh4KB8e8m/gBCyPHHwv4Jln1vlNOO7xgzDqKXWvIV+EVr4tkuNewVP6jeAcTtWed7Acz8YuyMvC31wXeL2bIYVdFp+dR8SIqMR0bwbWEtB2qzKPECkUOL2oUu7VJ3E1JiFemQUBcgNLA5qG3AhTG4tvo8uVYocSab9i5mdD5Gik14CYfpWGyejKyjUywGpZiWah5sdOQBh+x+lsg8ZbcScw5VABB5gR3aXTJFaiZ37VCgH9V/KNc/k4ReJSuKXvQlwpznKVKimrAHNTW3Ctoh2h0afEMxMwANloAcxGWtLk31MCTOlcwnqoBb2nJ37wAIFfpBiWsrKvDKtf8AmTDalRicITk5NWy3wXQSUoozuSdaMqk9+sW+F6L4KUQfRAkb2JY/GM5gMQahsRiGIF8iEksdwYpRQOyt4s36TgWSWT2uQPJa/GLsZ+VBdI1+GEkDqjLyUD5RZ4cqbK47xePNn6SYhtHVB+RR8Wr8oGmYx39d3fsZiR+nQRlyNaJnpGM2iqHrTZan8zgeF7RXHpHh/anCvYHYeIFIwPoU3W+HlDHULfTf3RlzZtY40eg4nptIkKGzZ66BLnv4fGMb0i2kcXO9PhkZ0dELVBqjqMhU0NNFBr+aMtjMcakKoJ31rQVvlFCL8T2xp/4dTiPxFFUgmWwzitCwetN1bCsdVaVnzcji5OugNNmYtvYReZHwqYLk9FMY/tD+ivyWNr+Kmagqv8iIvmBWGPMd/Wdm5saRNmY1MunQed7c0r2FgP8Ak0Sr0Hkj18R3A181U/GNAssRJlENmWiok9GMGvvv/TXzZvlBabKwo9WQO+nyX5wbl7Kc4YzqN4hYoaklF9SUg7ifiYk9Kw90clUfKI2n19VTzh+aIDyAbGm8F8Yeuwpp93z+kevDYajWdIHIV+Yjv/TZQ1xMsckr/wB0a2JR5IvR6Yd47gx+USp0YmHf/afrHq34bDDXEuf5Up8QYYXwg9ue/wCgfACGzFHmqdEnOubwA+JglOhzbyfFY9A/G4YaSph/mcj4GOf9TlbsMv8AU5aGzFIH6HZsJKeS1cjFnDinUOUKcxt1TQdteI0ssLmBExSGtUEdYVPlGe6V7ZVZUtWRESY5BKZtUWozV9m/3QxQYbHzJRzSnZQb9U1U9uXQxmSvk9fw+bVONdnoM+fNYAdYBdLUFzrSkCzsFON63/Mb+BjM4fp5Nlnroj8SOqfmPhBbfxBkuCGR1JsbAjxU18ow4nuhmrhJIJ2jMlSFrPmIr6hSwrT+UX8ooW6X4dbBi/JSB/dTxhLtDAGtCUqakKripOpNtYRm4Bj/ALjKOb1+EFGPmyyy536aGP0sk0qFqc2WmZam1agAm27nEsrbDzHKSZOci5oxCqKA1Zigy66a20iCc+zx6rOf6pjHw9XuvDtmGXOf0UlSstRmc+qANwoAKk9vbF+k5uXxUvuSNFsnDT5lXdZaoKgFGLEkdrACgvpWAelm0kwyAL1pj1yCmg0zH6bzB2Ix4lrTNlVRS3ADQAdkeYbTxjzpzOxuTQbwoFqdw8yYkYqTN58s8ONbStsEnMzEsxqTc1074YHXj4LaHMamg0Gn1iRMNmakehKj4zbk7fYOy0utiL23/fCLnBhZiqxFaajtGsVqJQn7uPswbsiwcXoG3CuojE1xZ1wS+qg5wtRRQtOGY/EmEOyIzMvZSe1rDwjqF2tWnYg+ccj33ZKFO+3O0N9MvvV/lBPmIMwGxJk00RGc7yb05k2HeYtW2Th5P/ucQiEaohzN4AH/AImCtiq74KBJ1TQI57gIJRCdNeYMWL9J8FJ/2cMZrDRptl7ganyEVWP6d4pxlV1kr7slQn9128CIqi2c3kjHzZLVhr8YExuKsq+8b/yi586RSnaDMasxYk1qxJNeNTesKVic0wV0Fr+f32RqMXfJzy51q0vIZiMG6KjNcOC3jqT318I2fQXDBJBc6zGsL6J1dOYPhGNmmbMKKQwA6orUA1Pqj58BWN3gJ2RERSKIoUdtNT3m/fG5HjRf5xyhvpuF/vwgGXOHGvwglX3xg0Th45bd5Q2UpY9VGPaBb9RtBE2SqCsyYqDnUnsA391YjkkVJkLDifH6QpcouaKCeNAYlknP/tSHce/MORT20Nz4RNNPszJ2nsSgQB2Ei/iRGXMqiQtIVLO4B91as3cq6RJKk1HVksRxLU8gD5mGjEhLS0VRxIBJ7hb4xG2JY+0T5RPqZfpRTRyEJI+yYTS1GtO/946nMaXXiPKGmYv+BWEZiDQ+H7RG83gpP320gBxncAYXpTw8xEDlvdA5mIXLcR8YAg6SgzZGS2ZDnUcdagdtzGHkY15dgervU6d3DujZ4tCRqT3U+MZ/G4TMasprxGvfuP3eNozbT4BjtFH1GU+IiNxAk7BMDY18j4H5Vi36NKkxvw80Zc1TLbQq1PVvuNNDao7YzJVyenFNuST8gAMLNF9iei2IQ1VVcbiKX7aN+8QPiMRL1kqvb6BB5hYxZ7NWu7Kpak0EWuCxrS0KqaFrtTee6A5+2JzgqXIU6qtFB5gQIrxGrNRmou0WmKx7ZSTwJiqkpY8aU8dfjCxEzq04kDzibDPStOJ+UbgqR4vi5uUlYklFQTTy7QPC/lFhKwuRlzHW4rQVXutrWHSMUQyuGoVuCOMD4jHs7FnarmozG9vpSOjPKnTsinKtyPzGvlEeEegYg0qx8rfKGznoLb9OQ08dYiUWAFT98T9IjV8GoS1dh4xaD1iWPBfqbQ19sEWRAvmYFTCM3s+NTBsnY7nU08vhGdF5Ov8AkSXRFO2riXUK01wmgXNkX9IoD4QEqD3v0gnz0i/k7FUa3g2Xs5F3VjaSRylklLtmZl4euiM3M08gPnBkvZsxtEVRy/8A1WNLLlDhEwIEDPJmj0fY+s0Rf6cINQ9O6sa+TLd/URm7dB4m0EPgkQVnOiDhWp++UYc4oqi2ZfDYEpQlix0BNBTkBFtgsLNb1VJ52HiYsZGNlE0kSWmn3qEL4m/wg9Nn4mZ67rKX3JYv47vGMvJ/r3NKBDIwqoKzZoXsS5PIn6GDsPjF0kSWc+++nOrWHhEf4HDyfWOd/wBTd+4c4kO1SBRECjcTdvDQecc7cuv6N8R7C0ws9+tOnZF4JQU/rbTuEdlPhkNUTO+92qb/AM7X8Iq2mMxqxJPb9N0dzmKoflhy/BZYjHu+rUHBbeesDqwEDBjCDmNJJdGG2+wkPCzRDmjubsigrynafE/KEJQ4DwrE+SOlIpCEjn5Ryn3UxPk+/wDEd9FAUCMB2REyc4PKiGFYtiiveX2QLMwoOoi3dIiaXyhZKM/iNlV0EVOI2Y66VjYsIjZRvELFGPTF4lPVmOBwzEDwBETL0jxa/wDyf2of+SmNI+HQ7oDnYFDuhSZtZJx6b/6UeI6SYlxRsjfzS5Z/7BFTOxLMalVH8qqo8FAjTPs5eERNs1eENUPnT/JmJ0wkC2+sEy5orXj9/fOLd9mjhA7bGY6WjSVGJScnbIxJVh1XC8Q2byYAg/doZ6NVtXMTuANDzqAW5UA7TBkrYtNXP9NoPw2ARNFvxNzGrMgeH2eWu+pg6XgkEEBIllyybAEnsESxQxFA0WJBBsrZcw60QfmPyF4J/BSUFXYtTU+qo793jGHkSNqDZWIK6eV4Ok7MmEVICji5p5a+URTuksmX1ZagnTqD/vOvdWIBOxs+6qJSH2nN/MVPcsc3N/ivc0oL39i1fCyUFZjk+CL4nXxivfbkhTlky87bgqk+bCvkYlw/RMHrznZ2/MSB8cx8RFnLkYaSKWP5UFu8DXvjGyfls1q1+itlDGz/AGhKT8t2/bxEWOG6MyU680l23tMa3hv76w59sMRlloFHE69wEBTHZjV2LHt+Q3RVGT/S/Qckv2Wz7TRBllJWmhplUchvgKbj3f1noOC2+F4HUHkIcVjShFGXJsWanZCW5+cNjrAmNmSYTI7WIlAF4TMTppABCvCLUiNFhzmAJVaHGbwiEQ4ERCnRSEziIswhVi0QeZkcLff+Y5UQs4gDtTDaGONM7IbnPKBR1DEbR3NCBHD75wIMpDDKgmGu4EADGR2wxpIiR8RwFYgd2PZADWlU4CB3ZRvryjszKPWaGK1bKta8Y0QaW4DxhhXiYuMLsGc92GRfzdXy18os5Ox5KesS7cBp+8c5ZYryaUJMy8qQWNFUk9gizkbDc+tRB26+EWmM2xKkilUTs9r9C1bxpGbxnSlnOWUjOToWr5Ihqe8xjeT6RrSK7ZeS9myk1Jc+A8BAuL2/JlDKpWvuoKnvIt4mKpNjYvEf7r+jQ+ybf2LbxoYvdn9FpSXK5zxelP06eNYw5Jep37Gkm/Sq9yhbaeJxBpJlUHvHreZ6g84mkdF3cg4iazn3UNaf1NZeQEaudiJUvqs1TuRBXyEBvtR/YQIN1bnwFoJyfpVINJduzuB2Gkq6qkumres/620iSdtFEsnXbj/5fSK2c7OauxPP6aQM7gaRtYr5k7I8niJPiMS7+u1vdBtESKNwpDVB3/fdEhjqkl0c27O1ppD1XfDMwEc9JAExeG5yfvSI1WsSAgQA9RT6x0vELvCTtgCUCtz4RKoiJWiZDvMAOMdUCGVrc/4hjTPAQBIxjoMQCZWHBid0AOpHKQQEh4Xs+cLALlhZDBLHtiJ56jfXlAEeXnCyw1sUfZXxhjFzqfCAHsANYa0wRE2Uan5wlBayqTAD/SxDMmD/ABFlh9iTHu3VHbB6bHkpdyWPgIxKcY9sqhJmXzsbKtT4+UFydhYh7t1Bxc5fLXyjQti0Raoqoo9o0UfqMUeO6VylrRmmNwSy97n5Axj5spelG9IrthuG6PSU9dy54IKDxufhBzT5UhagJKHvMese89Yxin2/ipxyyUyD8gqe9zp5Q6R0WnTDmnTMtdbl2Pfp5xlxf3uipr7UWG0+mEsVCZph4+on1PlFSMXjcTZAUQ+71F73N28TGlwHRqSlCqZz7z38BoPCLV1RLu45RlTiuIq2a1b9TMlgOiC6zXLn3UsO9jc+UafCbLSWvVVUXfTU8zqe+Ip+190te8j5RWz3ZzV2Ldm7wi6zn26M3GPRaTtpS0sgzny8YrsRipkz13yr7q2Hjqe6kDkw0DeTHWOKMTMpyY5VA9UR13pDGngaRxam58/pHQwKhbsEPSUq/WOF6QxzAHXYRGGJso746Err4RMtu6AGJJprc9sKGzcREK1aAJzM3KLwgnHWOy1CxKDvP+IAYqQ8ncIYzg2GkNzUgBwYaRMH4wKDHXm0EAFs3hEL3oIZJet/CHgQBIBQfdocIYDHOR/eAC3m0/b6wO84mFCgRkbAm5PjEbT0XffshQoqA38UT6q07TBeG2VPmXykDieqPE690dhRicmlwWKvsuMPsCWl3ep4L9Tr4QYk1EHUQc/3MdhR43klJ8np0S6KTaXSaWlc0wE+6nWP6vVHnGYxfSmY5pJSldCeu/cNB4R2FHqxYo+TjKbIpew8TPIecxUcXJJ7k3eUaDZ3RWSl2DTG/NZf0j51jsKOObJJLg3CCZerhVQahFG4UFO6BJu1Ja+oC57NPE2hQozjipPk1OTXQJP2hNfeEHBdfEwGyXqbnibmFCj1xil0cNmxjGGhxzhQopBEkxwqYUKAOqgEJoUKAOAw3LWFCgBwAH3f9o47EwoUCMYsmt4ceAhQoFHVpDHaFCgBitUw924QoUARkw0tChQBKh8IkzwoUAPJ3eMdrChQB//Z">
                <v-row class="fill-height" align="center" justify="center">
                    <div class="text-h2"></div>
                </v-row>
            </v-carousel-item>
            <v-carousel-item src="https://vcdn-vnexpress.vnecdn.net/2021/07/31/16235386261534-5404-1627749346.jpg">
                <v-row class="fill-height" align="center" justify="center">
                    <div class="text-h2"></div>
                </v-row>
            </v-carousel-item>
        </v-carousel>
        <div class="row">
          <div class="col-md-6 col-sm-6  col-xs-12" v-for="category in categories.slice(0,2)" :key="category.id">
                <v-card>
                    <v-img class="white--text align-center" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,0.5)" :src="'storage/uploads/'+category.image" alt="aaa" height="400px">
                    <h1 class="text-center font-size">{{category.name}}</h1>
                <div class="text-center">
                    <v-btn class="white--text"
                     outlined
                     @click="()=>navigateCategoryScreen(category)"
                     >View Products</v-btn>
                </div>
                </v-img>
                </v-card>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4  col-xs-12" v-for="category in categories.slice(2,5)" :key="category.id">
                <v-card>
                    <v-img class="white--text align-center" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,0.5)" :src="'storage/uploads/'+category.image" alt="aaa" height="400px">
                    <h1 class="text-center font-size">{{category.name}}</h1>
                <div class="text-center">
                    <v-btn class="white--text" outlined
                     @click="()=>navigateCategoryScreen(category)"
                     >View Products</v-btn>
                </div>
                </v-img>
                </v-card>
            </div>
        </div>
        <v-container >
            <v-row no-gutters>
                <v-col :cols="12">
                    <v-card-text tile outlined>
                        <v-card-title>Latest Products</v-card-title>
                        <v-divider></v-divider>
                        <div class="row text-center" >
                            <div class="col-12 col-md-3 col-sm-6 col-xl-4 text-center" v-for="product in products" :key="product.id" >
                                <v-hover v-slot="{ hover }" open-delay="240">
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img class="white--text align-end" height="200px" :src="'storage/uploads/'+product.image">
                                            <v-card-title>
                                                {{product.name}}
                                            </v-card-title>
                                        </v-img>
                                        <v-card-text class="text--primary text-center">
                                           <div> {{product.price}}</div>
                                           <div>{{product.category.name}}</div>
                                        </v-card-text>
                                        <div class="text-center">
                                            <v-btn outlined color="info" dark @click="()=>{$router.push({name: 'ProductDetails', query: {product} } )}">View Product</v-btn>
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                            </div>
                    </v-card-text>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data: function(){
        return{
            categories: [],
            products: []
        }
    },
    methods: {
        getCategories(){
             axios.get('api/categories').then(response => {
            if(response.status >= 200 && response.status < 300){
                this.categories = response.data.categories
            }
        })
        },
        getLatestProducts(){
             axios.get('api/latestProducts').then(response => {
            if(response.status >= 200 && response.status < 300){
                this.products = response.data.products
            }
        })
        },
        navigateCategoryScreen(category){
            this.$router.push({name:'CategoryProducts', query: {category}})
        }
    },
    mounted(){
        this.getCategories(),
        this.getLatestProducts()
    }
}
</script>
<style>
</style>
