Laravel + Lighthouse GraphQL
=== Basic query to return person/phone payload
    {
        persons(first:100) {
            data {
                id
                first_name
                last_name
                phones {
                    id
                    area_code
                    number
                }
            }
        }
    }
