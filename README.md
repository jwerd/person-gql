Laravel + Lighthouse GraphQL

Basic query to return person/phone/relationship/relationshiptype payload

    {
        persons(first:100) {
            data {
                id
                first_name
                last_name
                relationships {
                    id
                    relationshipPerson {
                        id
                        first_name
                        last_name
                    }
                    relationshipType {
                        name
                    }
                }
                phones {
                    id
                    area_code
                    number
                }
                phoneCount
                addresses {
                    id
                    street1
                    street2
                    city
                    state
                    zip
                }
                addressCount
            }
        }
    }