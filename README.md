Laravel + Lighthouse GraphQL

Basic query to return person/phone payload

    {
        persons(first:20) {
            data {
                id
                first_name
                last_name
                phones {
                    id
                    area_code
                    number
                }
                addresses {
                    id
                    street1
                    street2
                    city
                    state
                    zip
                }
            }
        }
    }

