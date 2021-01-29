Laravel + Lighthouse GraphQL

Basic query to return relationshipTypes with relationships payload

    {
        relationshipTypes {
            data {
                id
                name
                relationships {
                    person {
                        first_name
                        last_name
                    }
                    relationshipPerson {
                        first_name
                        last_name
                    }
                }
                relationshipCount
            }
        }
    }

Basic query to return person/phone/relationship/relationshipType payload

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